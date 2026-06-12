<?php
/**
 * footer.php — Shared site footer
 * Superior Home Builders | Page One Insights v6.1
 *
 * Closes </main>, renders full footer, loads scripts.
 * Expects all variables from includes/config.php.
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
// Split services into two columns for footer
$_servicesHalf1 = array_slice($services, 0, 4);
$_servicesHalf2 = array_slice($services, 4);
$_year = date('Y');
?>
  </main><!-- /#main-content -->

  <!-- ═══════════════════════════════════════════
       SITE FOOTER
  ═══════════════════════════════════════════ -->
  <footer class="site-footer" aria-label="Site footer">

    <!-- Footer Top: 4-column grid -->
    <div class="footer-top">
      <div class="container">
        <div class="footer-grid">

          <!-- Col 1: Brand + Description + Trust -->
          <div class="footer-col">
            <p class="footer-logo-name"><?php echo htmlspecialchars($siteName); ?></p>
            <p class="footer-tagline"><?php echo htmlspecialchars($tagline); ?></p>
            <p>Eastern Oregon's trusted custom home builder and general contractor. Over <?php echo $yearsInBusiness; ?> years building homes and transforming spaces across Grant County and beyond.</p>

            <div class="footer-trust-badges">
              <span class="footer-badge"><?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured</span>
              <span class="footer-badge"><?php echo lucide_icon('award'); ?> CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
              <span class="footer-badge"><?php echo lucide_icon('calendar'); ?> Est. <?php echo $yearEstablished; ?></span>
              <span class="footer-badge"><?php echo lucide_icon('star'); ?> Free Estimates</span>
            </div>

            <!-- AEO Entity Block -->
            <div class="footer-entity" itemscope itemtype="https://schema.org/HomeAndConstructionBusiness">
              <meta itemprop="name"      content="<?php echo htmlspecialchars($siteName); ?>">
              <meta itemprop="url"       content="<?php echo $siteUrl; ?>/">
              <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
              <strong itemprop="name"><?php echo htmlspecialchars($siteName); ?></strong> is a licensed general contractor
              (Oregon CCB# <?php echo htmlspecialchars($licenseNumber); ?>)
              based in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?><?php if (!empty($address['zip'])): ?> <?php echo htmlspecialchars($address['zip']); ?><?php endif; ?>,
              serving Eastern Oregon with custom home building, bathroom remodeling, kitchen remodeling, decks,
              framing, and commercial construction since <?php echo $yearEstablished; ?>.
            </div>
          </div><!-- /Col 1 -->

          <!-- Col 2: Services (first half) -->
          <div class="footer-col">
            <h4>Our Services</h4>
            <ul>
              <?php foreach ($_servicesHalf1 as $svc): ?>
              <li><a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"><?php echo htmlspecialchars($svc['name']); ?></a></li>
              <?php endforeach; ?>
              <li><a href="/services/">View All Services →</a></li>
            </ul>
          </div><!-- /Col 2 -->

          <!-- Col 3: More Services + Service Areas -->
          <div class="footer-col">
            <h4>More Services</h4>
            <ul>
              <?php foreach ($_servicesHalf2 as $svc): ?>
              <li><a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"><?php echo htmlspecialchars($svc['name']); ?></a></li>
              <?php endforeach; ?>
            </ul>

            <h4 style="margin-top:var(--space-xl)">Service Areas</h4>
            <ul>
              <?php foreach ($serviceAreas as $area): ?>
              <?php if (!empty($area['city'])): ?>
              <li><a href="/service-area/"><?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></a></li>
              <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div><!-- /Col 3 -->

          <!-- Col 4: Contact Info -->
          <div class="footer-col">
            <h4>Contact Us</h4>

            <?php if (!empty($phone)): ?>
            <div class="footer-contact-item">
              <?php echo lucide_icon('phone'); ?>
              <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a>
            </div>
            <?php endif; ?>

            <?php if (!empty($email)): ?>
            <div class="footer-contact-item">
              <?php echo lucide_icon('mail'); ?>
              <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
            </div>
            <?php endif; ?>

            <div class="footer-contact-item">
              <?php echo lucide_icon('map-pin'); ?>
              <span>
                <?php if (!empty($address['street'])): ?><?php echo htmlspecialchars($address['street']); ?><br><?php endif; ?>
                <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
              </span>
            </div>

            <div class="footer-contact-item">
              <?php echo lucide_icon('clock'); ?>
              <span>
                Mon–Fri: 8:00 AM – 5:00 PM<br>
                Saturday: 9:00 AM – 2:00 PM<br>
                Sunday: Closed
              </span>
            </div>

            <div style="margin-top:var(--space-lg)">
              <a href="/contact/" class="btn btn-secondary btn-sm w-full">Get a Free Estimate</a>
            </div>
          </div><!-- /Col 4 -->

        </div><!-- /.footer-grid -->
      </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <!-- Footer Legal Row + Bottom Bar -->
    <div class="footer-bottom-bar">
      <div class="container">

        <!-- Legal Row (REQUIRED — TCPA/CCPA compliance links) -->
        <nav class="footer-legal-row" aria-label="Legal">
          <a href="/privacy-policy/">Privacy Policy</a>
          <span class="divider">|</span>
          <a href="/terms/">Terms of Service</a>
          <span class="divider">|</span>
          <a href="/cookie-policy/">Cookie Policy</a>
          <span class="divider">|</span>
          <a href="/accessibility/">Accessibility</a>
          <span class="divider">|</span>
          <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
          <span class="divider">|</span>
          <a href="/sitemap.xml">Sitemap</a>
        </nav>

        <!-- Copyright + Credit -->
        <div class="footer-bottom-inner">
          <p class="footer-copyright">
            &copy; <?php echo $_year; ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.
          </p>
          <p class="footer-credit">
            <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">
              Web Design &amp; Hosting by Page One Insights, LLC
            </a>
          </p>
        </div>
      </div>
    </div><!-- /.footer-bottom-bar -->

  </footer><!-- /.site-footer -->

  <!-- ═══════════════════════════════════════════
       BACK TO TOP
  ═══════════════════════════════════════════ -->
  <button class="back-to-top" aria-label="Back to top" id="back-to-top">
    <?php echo lucide_icon('arrow-up'); ?>
  </button>

  <!-- ═══════════════════════════════════════════
       MOBILE FLOATING CTA BAR (< 768px)
  ═══════════════════════════════════════════ -->
  <div class="mobile-cta-bar" aria-hidden="true">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline">
      <?php echo lucide_icon('phone'); ?> Call Now
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-secondary">Free Estimate</a>
  </div>

  <!-- ═══════════════════════════════════════════
       COOKIE BANNER
  ═══════════════════════════════════════════ -->
  <div class="cookie-banner" id="cookie-banner" role="dialog" aria-label="Cookie notice" aria-live="polite">
    <p>
      We use cookies to improve your experience and analyze site traffic.
      By continuing to use this site you accept our
      <a href="/cookie-policy/">Cookie Policy</a>.
    </p>
    <button class="cookie-banner__dismiss" id="cookie-dismiss">Got it</button>
  </div>

  <!-- ═══════════════════════════════════════════
       SCRIPTS
       Icons are inline SVG (includes/icons.php) — no icon JS (v6.2).
  ═══════════════════════════════════════════ -->
  <script src="/assets/js/animations.js" defer></script>
  <script src="/assets/js/effects.js"    defer></script>
  <script src="/assets/js/main.js"       defer></script>

  <?php if (!empty($useSwiper)): ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
  <?php endif; ?>
  <?php if (!empty($useTilt)): ?>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js" defer></script>
  <?php endif; ?>

</body>
</html>
