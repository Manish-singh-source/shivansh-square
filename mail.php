<?php
declare(strict_types=1);

$smtpConfig = require __DIR__ . '/mail-config.php';
$mailError = '';

function clean_text(string $value): string
{
    $value = trim($value);
    $value = str_replace(["\r", "\n"], ' ', $value);
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function field(string $name): string
{
    return isset($_POST[$name]) ? clean_text((string) $_POST[$name]) : '';
}

function is_ajax_request(): bool
{
    return isset($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower((string) $_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

function finish(bool $sent): void
{
    global $mailError;

    if (is_ajax_request()) {
        header('Content-Type: text/plain; charset=UTF-8');
        if (!$sent && isset($_GET['debug']) && $_GET['debug'] === '1') {
            echo 'failed: ' . $mailError;
            exit;
        }
        echo $sent ? 'sent' : 'failed';
        exit;
    }

    $target = $_SERVER['HTTP_REFERER'] ?? 'index.html';
    $separator = strpos($target, '?') !== false ? '&' : '?';
    header('Location: ' . $target . $separator . 'mail=' . ($sent ? 'sent' : 'failed'));
    exit;
}

function mail_log_error(string $message): void
{
    global $mailError;

    $mailError = $message;
    error_log('[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL, 3, __DIR__ . '/mail-error.log');
}

function smtp_read($socket): string
{
    $response = '';

    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;
        if (isset($line[3]) && $line[3] === ' ') {
            break;
        }
    }

    return $response;
}

function smtp_command($socket, string $command, array $expectedCodes): bool
{
    fwrite($socket, $command . "\r\n");
    $response = smtp_read($socket);
    $code = (int) substr($response, 0, 3);

    if (!in_array($code, $expectedCodes, true)) {
        mail_log_error('SMTP command failed. Expected ' . implode('/', $expectedCodes) . ', got ' . trim($response));
        return false;
    }

    return true;
}

function smtp_send(array $config, string $to, string $subject, string $body, array $headers): bool
{
    if (smtp_send_once($config, $to, $subject, $body, $headers)) {
        return true;
    }

    if (!isset($config['fallback_port'], $config['fallback_encryption'])) {
        return false;
    }

    $fallbackConfig = $config;
    $fallbackConfig['port'] = $config['fallback_port'];
    $fallbackConfig['encryption'] = $config['fallback_encryption'];

    return smtp_send_once($fallbackConfig, $to, $subject, $body, $headers);
}

function smtp_send_once(array $config, string $to, string $subject, string $body, array $headers): bool
{
    $encryption = $config['encryption'] ?? 'tls';
    $transport = $encryption === 'ssl' ? 'ssl://' : 'tcp://';

    $socket = stream_socket_client(
        $transport . $config['host'] . ':' . $config['port'],
        $errno,
        $errstr,
        10,
        STREAM_CLIENT_CONNECT
    );

    if (!$socket) {
        mail_log_error('SMTP connection failed on port ' . $config['port'] . ': ' . $errstr . ' (' . $errno . ')');
        return false;
    }

    stream_set_timeout($socket, 10);

    if ((int) substr(smtp_read($socket), 0, 3) !== 220) {
        mail_log_error('SMTP server did not return ready response on port ' . $config['port']);
        fclose($socket);
        return false;
    }

    $hostName = $_SERVER['HTTP_HOST'] ?? 'localhost';

    if (!smtp_command($socket, 'EHLO ' . $hostName, [250])) {
        fclose($socket);
        return false;
    }

    if ($encryption === 'tls') {
        if (!smtp_command($socket, 'STARTTLS', [220])) {
            fclose($socket);
            return false;
        }

        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            mail_log_error('Could not enable TLS for SMTP connection.');
            fclose($socket);
            return false;
        }

        if (!smtp_command($socket, 'EHLO ' . $hostName, [250])) {
            fclose($socket);
            return false;
        }
    }

    $commands = [
        ['AUTH LOGIN', [334]],
        [base64_encode($config['username']), [334]],
        [base64_encode($config['password']), [235]],
        ['MAIL FROM:<' . $config['from_email'] . '>', [250]],
        ['RCPT TO:<' . $to . '>', [250, 251]],
    ];

    foreach ($commands as $command) {
        if (!smtp_command($socket, $command[0], $command[1])) {
            smtp_command($socket, 'QUIT', [221]);
            fclose($socket);
            return false;
        }
    }

    if (!smtp_command($socket, 'DATA', [354])) {
        smtp_command($socket, 'QUIT', [221]);
        fclose($socket);
        return false;
    }

    $message = implode("\r\n", $headers) . "\r\n\r\n" . $body;
    $message = preg_replace('/^\./m', '..', $message);

    fwrite($socket, $message . "\r\n.\r\n");
    $sent = (int) substr(smtp_read($socket), 0, 3) === 250;

    if (!$sent) {
        mail_log_error('SMTP DATA was not accepted.');
    }

    smtp_command($socket, 'QUIT', [221]);
    fclose($socket);

    return $sent;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    finish(false);
}

$formType = field('form_type') ?: 'Website Enquiry';
$name = field('name');
$email = field('email');
$phone = field('phone');
$city = field('city');
$message = field('message');

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    finish(false);
}

$subject = 'Shivansh Square - ' . $formType;

$lines = [
    'New enquiry from Shivansh Square website',
    '',
    'Form: ' . $formType,
    'Name: ' . $name,
    'Email: ' . $email,
];

if ($phone !== '') {
    $lines[] = 'Phone: ' . $phone;
}

if ($city !== '') {
    $lines[] = 'City / Site Location: ' . $city;
}

$optionalFields = [
    'Project Type' => field('project_type'),
    'Approx. Area' => field('property_size'),
    'Design Style' => field('design_style'),
    'Timeline' => field('timeline'),
    'Budget Range' => field('budget_range'),
];

foreach ($optionalFields as $label => $value) {
    if ($value !== '') {
        $lines[] = $label . ': ' . $value;
    }
}

if (isset($_POST['services']) && is_array($_POST['services'])) {
    $services = array_map(static function ($item): string {
        return clean_text((string) $item);
    }, $_POST['services']);
    $services = array_filter($services);
    if ($services !== []) {
        $lines[] = 'Services Required: ' . implode(', ', $services);
    }
}

if ($message !== '') {
    $lines[] = '';
    $lines[] = 'Message:';
    $lines[] = $message;
}

$body = implode("\n", $lines);

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: ' . $smtpConfig['from_name'] . ' <' . $smtpConfig['from_email'] . '>',
    'Reply-To: ' . $name . ' <' . $email . '>',
];

$sent = smtp_send($smtpConfig, $smtpConfig['to_email'], $subject, $body, $headers);

finish($sent);
