(function () {
  var partialCache = {};

  function render(id, html) {
    var target = document.getElementById(id);
    if (target && !target.dataset.rendered) {
      target.innerHTML = html;
      target.dataset.rendered = 'true';
    }
  }

  function loadPartial(id, path) {
    var target = document.getElementById(id);
    if (!target || target.dataset.rendered) return;

    partialCache[path] = partialCache[path] || fetch(path).then(function (response) {
      if (!response.ok) {
        throw new Error('Unable to load ' + path);
      }

      return response.text();
    });

    partialCache[path].then(function (html) {
      render(id, html);
    }).catch(function (error) {
      if (window.console) {
        console.error(error);
      }
    });
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
    ].join('');
    document.head.appendChild(style);
  }
  function renderLayout() {
    injectBrandOverrides();
    loadPartial('site-header', 'header.html');
    loadPartial('site-footer', 'footer.html');
  }

  renderLayout();

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', renderLayout);
  }
})();