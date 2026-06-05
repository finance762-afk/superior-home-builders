/* ============================================================
   Superior Home Builders — Main JavaScript
   Mobile menu toggle, Swiper init, misc interactions
   Page One Insights v6.1
   ============================================================ */

(function () {
  'use strict';

  /* ── MOBILE MENU TOGGLE ──────────────────────────────── */
  var hamburger   = document.getElementById('hamburger-btn');
  var mobileMenu  = document.getElementById('mobile-menu');

  if (hamburger && mobileMenu) {
    var isMenuOpen = false;

    function openMenu() {
      isMenuOpen = true;
      mobileMenu.classList.add('active');
      hamburger.classList.add('active');
      hamburger.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      isMenuOpen = false;
      mobileMenu.classList.remove('active');
      hamburger.classList.remove('active');
      hamburger.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    hamburger.addEventListener('click', function () {
      if (isMenuOpen) { closeMenu(); } else { openMenu(); }
    });

    /* Close when a nav link is clicked */
    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });

    /* Close on Escape key */
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && isMenuOpen) { closeMenu(); }
    });

    /* Close when clicking the overlay background (outside nav) */
    mobileMenu.addEventListener('click', function (e) {
      if (e.target === mobileMenu) { closeMenu(); }
    });
  }

  /* ── SWIPER CAROUSEL (reviews, galleries) ─────────────── */
  if (typeof Swiper !== 'undefined') {
    /* Reviews carousel */
    var reviewsEl = document.querySelector('.reviews-swiper');
    if (reviewsEl) {
      new Swiper('.reviews-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
          640:  { slidesPerView: 2 },
          1024: { slidesPerView: 3 }
        }
      });
    }

    /* Gallery carousel */
    var galleryEl = document.querySelector('.gallery-swiper');
    if (galleryEl) {
      new Swiper('.gallery-swiper', {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true,
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
          480:  { slidesPerView: 2 },
          768:  { slidesPerView: 3 },
          1024: { slidesPerView: 4 }
        }
      });
    }
  }

  /* ── VANILLA TILT (optional — enable per page via data-tilt) ── */
  if (typeof VanillaTilt !== 'undefined') {
    VanillaTilt.init(document.querySelectorAll('[data-tilt]'), {
      max: 8,
      speed: 400,
      glare: true,
      'max-glare': 0.15
    });
  }

})();
