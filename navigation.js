(function () {
  'use strict';
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.getElementById('primary-navigation');
  var labels = window.loopkindNavigation || {};
  if (!toggle || !nav) return;
  function setOpen(open) {
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? (labels.closeMenu || 'Close menu') : (labels.openMenu || 'Open menu'));
    nav.classList.toggle('is-open', open);
  }
  toggle.addEventListener('click', function () { setOpen(toggle.getAttribute('aria-expanded') !== 'true'); });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && nav.classList.contains('is-open')) { setOpen(false); toggle.focus(); }
  });
  document.addEventListener('click', function (event) {
    if (nav.classList.contains('is-open') && !nav.contains(event.target) && !toggle.contains(event.target)) setOpen(false);
  });
  window.addEventListener('resize', function () { if (window.innerWidth > 980) setOpen(false); });
})();
