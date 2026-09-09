(function () {
  var header = [
    '<!-- header begin -->',
    '<header class="transparent site-sticky-header fixed header-mobile-sticky">',
    '  <div class="container">',
    '    <div class="row">',
    '      <div class="col-md-12">',
    '        <div class="de-flex sm-pt10">',
    '          <div class="de-flex-col">',
    '            <div id="logo">',
    '              <a href="index.html">',
    '                <img class="logo-main brand-logo-img" src="images/logopng.png" alt="Shivansh Square">',
    '                <img class="logo-scroll brand-logo-img" src="images/logopng.png" alt="Shivansh Square">',
    '                <img class="logo-mobile brand-logo-img" src="images/logopng.png" alt="Shivansh Square">',
    '              </a>',
    '            </div>',
    '          </div>',
    '          <div class="de-flex-col header-col-mid">',
    '            <ul id="mainmenu">',
    '              <li><a class="menu-item" href="index.html">Home</a></li>',
    '              <li><a class="menu-item" href="about.html">About Us</a></li>',
    '              <li><a class="menu-item" href="services-style-3.html">Services</a></li>',
    '              <li><a class="menu-item" href="projects.html">Portfolio</a></li>',
    '              <li><a class="menu-item" href="contact.html">Contact</a></li>',
    '            </ul>',
    '          </div>',
    '          <div class="de-flex-col">',
    '            <div class="menu_side_area">',
    '              <a href="consultation.html" class="btn-main fx-slide"><span>Request A Quote</span></a>',
    '              <span id="menu-btn"></span>',
    '            </div>',
    '            <div id="btn-extra">',
    '              <span></span>',
    '              <span></span>',
    '            </div>',
    '          </div>',
    '        </div>',
    '      </div>',
    '    </div>',
    '  </div>',
    '</header>',
    '<!-- header close -->'
  ].join('');

  var footer = [
    '<!-- footer begin -->',
    '<footer class="site-footer text-light section-dark">',
    '  <div class="container">',
    '    <div class="site-footer__top">',
    '      <div class="site-footer__brand">',
    '        <a href="index.html">',
    '          <img class="site-footer__logo brand-logo-img" src="images/shivanshsqwhite.png" alt="Shivansh Square">',
    '        </a>',
    '        <p>',
    '          Shivansh Square delivers turnkey interior, civil, MEP, security,',
    '          networking, HVAC, and workspace solutions designed for modern',
    '          residential and commercial environments.',
    '        </p>',
    '      </div>',
    '      <div class="site-footer__links">',
    '        <h3>Pages</h3>',
    '        <ul>',
    '          <li><a href="index.html">Home</a></li>',
    '          <li><a href="about.html">About Us</a></li>',
    '          <li><a href="services-style-3.html">Services</a></li>',
    '          <li><a href="projects.html">Portfolio</a></li>',
    '          <li><a href="contact.html">Contact</a></li>',
    '        </ul>',
    '      </div>',
    '      <div class="site-footer__links">',
    '        <h3>Services</h3>',
    '        <ul>',
    '          <li><a href="services-style-3.html">Interiors</a></li>',
    '          <li><a href="services-style-3.html">Security Systems</a></li>',
    '          <li><a href="services-style-3.html">Fire-Fighting</a></li>',
    '          <li><a href="services-style-3.html">HVAC & Air-Conditioning</a></li>',
    '          <li><a href="services-style-3.html">Electricals & Networking</a></li>',
    '          <li><a href="services-style-3.html">Work Stations</a></li>',
    '        </ul>',
    '      </div>',
    '      <div class="site-footer__contact">',
    '        <h3>Request A Quote</h3>',
    '        <p><a href="tel:+919967064755">+91 99670 64755</a></p>',
    '        <a href="consultation.html" class="btn-main fx-slide"><span>Request A Quote</span></a>',
    '        <!-- <div class="site-footer__social">',
    '          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>',
    '          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>',
    '          <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>',
    '          <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>',
    '        </div> -->',
    '      </div>',
    '    </div>',
    '    <div class="site-footer__bottom">',
    '      <div>Copyright 2026 Shivansh Square. All Rights Reserved.</div>',
    '      <div class="site-footer__bottom-links">',
    '        <a href="contact.html">Contact</a>',
    '        <a href="services-style-3.html">Services</a>',
    '      </div>',
    '    </div>',
    '  </div>',
    '</footer>',
    '<!-- footer close -->'
  ].join('');

  function render(id, html) {
    var target = document.getElementById(id);
    if (target && !target.dataset.rendered) {
      target.innerHTML = html;
      target.dataset.rendered = 'true';
    }
  }

  function injectBrandOverrides() {
    if (document.getElementById('shivansh-brand-overrides')) return;

    var style = document.createElement('style');
    style.id = 'shivansh-brand-overrides';
    style.textContent = [
      ':root{--service-accent:#CCA669;--service-bronze:#997945;--service-navy:#0D2738;}',
      '.service-page{background:#FAF8F4!important;color:#0D2738!important;}',
      '.service-kicker{color:#CCA669!important;}',
      '.service-hero:after{background:linear-gradient(90deg,rgba(13,39,56,.92),rgba(13,39,56,.54),rgba(13,39,56,.16))!important;}',
      '.service-page--v2 .service-hero:after{background:linear-gradient(180deg,rgba(13,39,56,.28),rgba(13,39,56,.9))!important;}',
      '.service-page--v3 .service-hero:after{background:linear-gradient(120deg,rgba(13,39,56,.88),rgba(13,39,56,.22))!important;}',
      '.service-panel{border-top-color:#CCA669!important;box-shadow:0 24px 70px rgba(13,39,56,.1)!important;}',
      '.service-page--v4 .service-panel{background:#F3EEE6!important;}',
      '.service-step{border-bottom-color:rgba(13,39,56,.14)!important;}',
      '.service-step span{color:#997945!important;}',
      '.service-btn{display:inline-flex!important;align-items:center!important;justify-content:center!important;min-height:52px!important;padding:0 26px!important;background:#CCA669!important;color:#0D2738!important;border:1px solid #CCA669!important;font-weight:700!important;text-decoration:none!important;box-shadow:0 14px 30px rgba(204,166,105,.24)!important;transition:all .25s ease!important;}',
      '.service-btn:hover{background:#997945!important;border-color:#997945!important;color:#fff!important;transform:translateY(-2px)!important;}',
      '.service-btn--ghost{background:rgba(255,255,255,.1)!important;border-color:rgba(204,166,105,.58)!important;color:#fff!important;box-shadow:none!important;}',
      '.service-btn--ghost:hover{background:#CCA669!important;border-color:#CCA669!important;color:#0D2738!important;}',
      '.service-cta{position:relative!important;overflow:hidden!important;background:linear-gradient(135deg,#0D2738 0%,#06151F 100%)!important;color:#fff!important;padding:76px 0!important;border-top:1px solid rgba(204,166,105,.36)!important;border-bottom:1px solid rgba(204,166,105,.2)!important;}',
      '.service-cta:before{content:""!important;position:absolute!important;inset:0!important;background:radial-gradient(circle at 12% 20%,rgba(204,166,105,.18),transparent 34%)!important;pointer-events:none!important;}',
      '.service-cta .container{position:relative!important;z-index:1!important;}',
      '.service-cta h2{color:#fff!important;margin-bottom:16px!important;max-width:820px!important;font-size:clamp(34px,4.4vw,58px)!important;line-height:1.05!important;}',
      '.service-cta p{max-width:720px!important;color:rgba(255,255,255,.82)!important;font-size:18px!important;line-height:1.75!important;margin-bottom:0!important;}',
      '.service-cta .text-lg-end{display:flex!important;justify-content:flex-end!important;}',
      '@media only screen and (max-width:991px){.service-cta{padding:58px 0!important;}.service-cta .text-lg-end{justify-content:flex-start!important;}.service-cta h2{font-size:34px!important;}.service-cta p{font-size:16px!important;}}'
    ].join('');
    document.head.appendChild(style);
  }

  injectBrandOverrides();
  render('site-header', header);
  render('site-footer', footer);
})();
