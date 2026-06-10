<?php
/**
 * header.php — Shared site header + navigation
 * Superior Home Builders | Page One Insights v6.1
 *
 * Expects: $currentPage, $siteName, $tagline, $phone, $services, $siteUrl, $logoUrl
 * All set via includes/config.php (required before this file).
 */
if (!isset($siteName)) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
}
if (!function_exists('isActivePage')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
}
?>
  <!-- Skip to main content (accessibility) -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <header class="site-header" data-header>
    <nav class="navbar" aria-label="Main navigation">
      <div class="navbar-inner container">

        <!-- Logo -->
        <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
          <img src="<?php echo htmlspecialchars($logoUrl); ?>"
               alt="<?php echo htmlspecialchars($siteName); ?> logo"
               width="180" height="54"
               loading="eager" fetchpriority="high">
        </a>

        <!-- Desktop Nav Links -->
        <ul class="navbar-links" role="list">
          <li>
            <a href="/"
               <?php if (isActivePage('home')): ?>aria-current="page"<?php endif; ?>>
              Home
            </a>
          </li>

          <!-- Services with Dropdown -->
          <li class="has-dropdown">
            <a href="/services/"
               <?php if (isActivePage('services')): ?>aria-current="page"<?php endif; ?>
               aria-haspopup="true">
              Services
            </a>
            <!-- CRITICAL: inline style="display:none" prevents cached CSS blink -->
            <ul class="dropdown" role="menu" aria-label="Services menu" style="display:none">
              <?php foreach ($services as $svc): ?>
              <li role="none">
                <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"
                   role="menuitem">
                  <?php echo htmlspecialchars($svc['name']); ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>

          <li>
            <a href="/service-area/"
               <?php if (isActivePage('service-area')): ?>aria-current="page"<?php endif; ?>>
              Service Area
            </a>
          </li>
          <li>
            <a href="/about/"
               <?php if (isActivePage('about')): ?>aria-current="page"<?php endif; ?>>
              About
            </a>
          </li>
          <li>
            <a href="/contact/"
               <?php if (isActivePage('contact')): ?>aria-current="page"<?php endif; ?>>
              Contact
            </a>
          </li>
          <li>
            <a href="/blog/"
               <?php if (isActivePage('blog')): ?>aria-current="page"<?php endif; ?>>
              Blog
            </a>
          </li>
        </ul>

        <!-- Desktop CTA -->
        <div class="navbar-cta">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"
             class="cta-phone"
             aria-label="Call <?php echo htmlspecialchars($siteName); ?>">
            <i data-lucide="phone"></i>
            <?php echo htmlspecialchars($phone); ?>
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn btn-secondary btn-sm">Free Estimate</a>
        </div>

        <!-- Mobile Hamburger -->
        <button class="hamburger"
                id="hamburger-btn"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                aria-controls="mobile-menu">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>

      </div><!-- /.navbar-inner -->
    </nav><!-- /.navbar -->

    <!-- Mobile Full-Screen Overlay Menu -->
    <div class="mobile-menu" id="mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu">
      <nav>
        <ul class="mobile-nav-links" role="list">
          <li><a href="/" <?php if (isActivePage('home')): ?>aria-current="page"<?php endif; ?>>Home</a></li>
          <li><a href="/services/" <?php if (isActivePage('services')): ?>aria-current="page"<?php endif; ?>>Services</a></li>
          <li><a href="/service-area/" <?php if (isActivePage('service-area')): ?>aria-current="page"<?php endif; ?>>Service Area</a></li>
          <li><a href="/about/" <?php if (isActivePage('about')): ?>aria-current="page"<?php endif; ?>>About</a></li>
          <li><a href="/contact/" <?php if (isActivePage('contact')): ?>aria-current="page"<?php endif; ?>>Contact</a></li>
          <li><a href="/blog/" <?php if (isActivePage('blog')): ?>aria-current="page"<?php endif; ?>>Blog</a></li>
        </ul>

        <!-- Service sub-links -->
        <div class="mobile-sub-services" aria-label="Service pages">
          <?php foreach ($services as $svc): ?>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/">
            <?php echo htmlspecialchars($svc['name']); ?>
          </a>
          <?php endforeach; ?>
        </div>

        <!-- Mobile menu CTAs -->
        <div class="mobile-menu-cta">
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"
             class="btn btn-outline btn-lg w-full">
            <i data-lucide="phone"></i>
            Call Now
          </a>
          <?php endif; ?>
          <a href="/contact/" class="btn btn-secondary btn-lg w-full">
            Get a Free Estimate
          </a>
        </div>
      </nav>
    </div><!-- /.mobile-menu -->

  </header><!-- /.site-header -->

  <main id="main-content">
