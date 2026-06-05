/* ============================================================
   Superior Home Builders — Effects
   Header scroll, back-to-top, cookie banner, FAQ accordion,
   smooth scroll, ticker pause-on-hover
   Page One Insights v6.1
   ============================================================ */

(function () {
  'use strict';

  /* ── HEADER SCROLL CLASS ──────────────────────────────── */
  var navbar = document.querySelector('.navbar');
  if (navbar) {
    var onScroll = function () {
      if (window.scrollY > 60) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); /* run once on load */
  }

  /* ── BACK TO TOP ──────────────────────────────────────── */
  var backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 600) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    }, { passive: true });

    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ── COOKIE BANNER ────────────────────────────────────── */
  var cookieBanner  = document.getElementById('cookie-banner');
  var cookieDismiss = document.getElementById('cookie-dismiss');
  var COOKIE_KEY    = 'shb_cookie_accepted';

  if (cookieBanner) {
    /* Show banner unless already dismissed */
    if (!localStorage.getItem(COOKIE_KEY)) {
      setTimeout(function () {
        cookieBanner.classList.add('visible');
      }, 1200);
    }

    if (cookieDismiss) {
      cookieDismiss.addEventListener('click', function () {
        localStorage.setItem(COOKIE_KEY, '1');
        cookieBanner.classList.remove('visible');
        setTimeout(function () {
          cookieBanner.style.display = 'none';
        }, 500);
      });
    }
  }

  /* ── FAQ ACCORDION ────────────────────────────────────── */
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.faq-item');
      if (!item) return;
      var isOpen = item.classList.contains('open');

      /* Close all open items in the same container */
      var container = item.parentElement;
      if (container) {
        container.querySelectorAll('.faq-item.open').forEach(function (openItem) {
          if (openItem !== item) openItem.classList.remove('open');
        });
      }

      item.classList.toggle('open', !isOpen);
    });
  });

  /* ── SMOOTH SCROLL FOR ANCHOR LINKS ──────────────────── */
  var siteHeader = document.querySelector('.site-header');
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var hash   = this.getAttribute('href');
      var target = document.querySelector(hash);
      if (!target) return;
      e.preventDefault();
      var offset    = siteHeader ? siteHeader.offsetHeight + 12 : 80;
      var targetTop = target.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top: targetTop, behavior: 'smooth' });
    });
  });

  /* ── TICKER PAUSE ON HOVER ────────────────────────────── */
  document.querySelectorAll('.ticker-track').forEach(function (track) {
    track.addEventListener('mouseenter', function () {
      track.style.animationPlayState = 'paused';
    });
    track.addEventListener('mouseleave', function () {
      track.style.animationPlayState = 'running';
    });
  });

})();
