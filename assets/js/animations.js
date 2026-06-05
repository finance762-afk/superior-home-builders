/* ============================================================
   Superior Home Builders — Animations
   IntersectionObserver reveal system + stat counters
   Page One Insights v6.1
   ============================================================ */

(function () {
  'use strict';

  /* Respect prefers-reduced-motion */
  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ── REVEAL CLASSES OBSERVER ────────────────────────────── */
  var revealSelectors = '.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale';

  if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -48px 0px'
    });

    document.querySelectorAll(revealSelectors).forEach(function (el) {
      /* Never animate above-fold content */
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.85) {
        el.classList.add('visible');
      } else {
        revealObserver.observe(el);
      }
    });
  } else {
    /* Reduced motion or no IntersectionObserver: show everything immediately */
    document.querySelectorAll(revealSelectors).forEach(function (el) {
      el.classList.add('visible');
    });
  }

  /* ── LEGACY data-animate OBSERVER ──────────────────────── */
  if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    var animateObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          animateObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.10, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('[data-animate]').forEach(function (el) {
      animateObserver.observe(el);
    });
  } else {
    document.querySelectorAll('[data-animate]').forEach(function (el) {
      el.classList.add('animated');
    });
  }

  /* ── STAT COUNTER ANIMATION ─────────────────────────────── */
  /* Triggers on elements with [data-counter="NUMBER"] */
  var counters = document.querySelectorAll('[data-counter]');

  if (counters.length && !prefersReducedMotion && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        counterObserver.unobserve(entry.target);

        var el       = entry.target;
        var target   = parseInt(el.getAttribute('data-counter'), 10);
        var suffix   = el.getAttribute('data-suffix')  || '';
        var prefix   = el.getAttribute('data-prefix')  || '';
        var duration = parseInt(el.getAttribute('data-duration') || '2000', 10);
        var startTime = null;

        function animate(ts) {
          if (!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          var eased    = 1 - Math.pow(1 - progress, 3); /* ease-out cubic */
          el.textContent = prefix + Math.floor(eased * target).toLocaleString() + suffix;
          if (progress < 1) {
            requestAnimationFrame(animate);
          } else {
            el.textContent = prefix + target.toLocaleString() + suffix;
          }
        }
        requestAnimationFrame(animate);
      });
    }, { threshold: 0.4 });

    counters.forEach(function (el) { counterObserver.observe(el); });
  } else if (counters.length) {
    counters.forEach(function (el) {
      var target = el.getAttribute('data-counter') || '0';
      var suffix = el.getAttribute('data-suffix') || '';
      var prefix = el.getAttribute('data-prefix') || '';
      el.textContent = prefix + parseInt(target, 10).toLocaleString() + suffix;
    });
  }

})();
