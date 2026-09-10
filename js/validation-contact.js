$(document).ready(function() {
    $('#send_message').click(function(e) {
        e.preventDefault(); // Prevent form submission

        // Reset error state
        var error = false;
        var name = $('#name').val().trim();
        var email = $('#email').val().trim();
        var phone = $('#phone').val().trim();
        var message = $('#message').val().trim();

        // Remove previous error styles when typing again
        $('#name, #email, #phone, #message').on('input', function() {
            $(this).removeClass("error_input");
        });

        // Validation rules
        if (name.length === 0) {
            error = true;
            $('#name').addClass("error_input");
        }

        if (email.length === 0 || email.indexOf('@') === -1) {
            error = true;
            $('#email').addClass("error_input");
        }

        if (phone.length === 0) {
            error = true;
            $('#phone').addClass("error_input");
        }

        if (message.length === 0) {
            error = true;
            $('#message').addClass("error_input");
        }

        // Process the form if no error
        if (!error) {
            if (window.location.port === '5500' || window.location.protocol === 'file:') {
                showContactFormError('This form must be tested on PHP hosting, XAMPP/WAMP, or PHP local server. VS Code Live Server cannot send email.');
                return;
            }

            $('#send_message').attr({
                'disabled': true,
                'value': 'Sending...'
            });

            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: $("#contact_form").serialize(),
                timeout: 30000,
                success: function(result) {
                    if (result.trim() === 'sent') {
                        $('#contact_form').fadeOut(400, function() {
                            $('<div id="success_message" class="alert alert-success mt-3">Your message has been sent successfully!</div>')
                                .hide()
                                .appendTo($(this).parent())
                                .fadeIn(500);
                        });
                    } else {
                        showContactFormError();
                    }
                },
                error: function() {
                    showContactFormError();
                }
            });
        }
    });

    function showContactFormError(message) {
        if (!$('#mail_fail').length) {
            $('<div id="mail_fail" class="alert alert-danger mt-3"></div>')
                .text(message || 'Message failed to send. Please make sure the website is running on a PHP-enabled server and try again.')
                .hide()
                .appendTo($('#contact_form').parent())
                .fadeIn(500);
        } else if (message) {
            $('#mail_fail').text(message);
        }

        $('#send_message').removeAttr('disabled').attr('value', 'Send Message');
    }
});
