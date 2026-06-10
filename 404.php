<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── 404 Page ─────────────────────────────────────────────────────────────────
$pageTitle        = '404 — Page Not Found | Superior Home Builders';
$pageDescription  = 'The page you were looking for could not be found. Browse our construction and remodeling services or contact Superior Home Builders in Mount Vernon, OR.';
$canonicalUrl     = $siteUrl . '/404';
$currentPage      = '404';
$noindex          = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ═══════════════════════════════════════════════════════
   404 PAGE — Superior Home Builders
   ═══════════════════════════════════════════════════════ */
.error-page {
  min-height: 75vh;
  display: flex;
  align-items: center;
  background: var(--color-bg);
  padding-top: var(--nav-height);
  padding: calc(var(--nav-height) + var(--space-4xl)) 0 var(--space-4xl);
  position: relative;
  overflow: hidden;
}
.error-page::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: radial-gradient(circle at 70% 40%, rgba(var(--color-secondary-rgb), 0.04) 0%, transparent 55%);
  pointer-events: none;
}
.error-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 700px;
  margin: 0 auto;
}
.error-number {
  font-family: var(--font-heading);
  font-size: clamp(7rem, 18vw, 13rem);
  font-weight: 900;
  line-height: 1;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  display: block;
  margin-bottom: var(--space-lg);
  opacity: 0.15;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -55%);
  pointer-events: none;
  white-space: nowrap;
}
.error-icon {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: rgba(var(--color-secondary-rgb), 0.10);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-secondary);
  margin: 0 auto var(--space-xl);
}
.error-icon i, .error-icon svg { width: 36px; height: 36px; }
.error-inner h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
  text-wrap: balance;
}
.error-inner p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  line-height: 1.72;
  margin-bottom: var(--space-2xl);
  max-width: 52ch;
  margin-left: auto;
  margin-right: auto;
}
.error-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-3xl);
}
.error-links {
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.08);
  padding-top: var(--space-2xl);
}
.error-links h3 {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.error-links-grid {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  justify-content: center;
}
.error-link-pill {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  padding: var(--space-sm) var(--space-lg);
  border: 1.5px solid rgba(var(--color-primary-rgb), 0.14);
  border-radius: 100px;
  font-size: var(--fs-sm);
  font-weight: 600;
  color: var(--color-text);
  text-decoration: none;
  transition: all var(--transition);
}
.error-link-pill:hover {
  background: var(--color-primary);
  border-color: var(--color-primary);
  color: #fff;
}
.error-link-pill i, .error-link-pill svg { width: 14px; height: 14px; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="error-page" aria-label="Page not found">
  <div class="container">
    <span class="error-number" aria-hidden="true">404</span>
    <div class="error-inner">
      <div class="error-icon">
        <?php echo lucide_icon('map-pin-off'); ?>
      </div>
      <h1>This page doesn't exist</h1>
      <p>
        It looks like the page you were looking for has moved, been removed, or never existed.
        Try one of the links below, or head back to the homepage and find what you need from there.
      </p>
      <div class="error-actions">
        <a href="/" class="btn btn-primary">Back to Homepage</a>
        <a href="/contact/" class="btn btn-secondary">Get a Free Estimate</a>
      </div>

      <div class="error-links">
        <h3>Popular Pages</h3>
        <div class="error-links-grid">
          <a href="/services/" class="error-link-pill">
            <?php echo lucide_icon('tool'); ?> All Services
          </a>
          <a href="/services/custom-home-building/" class="error-link-pill">
            <?php echo lucide_icon('home'); ?> Custom Home Building
          </a>
          <a href="/services/bathroom-remodeling/" class="error-link-pill">
            <?php echo lucide_icon('bath'); ?> Bathroom Remodeling
          </a>
          <a href="/services/kitchen-remodeling/" class="error-link-pill">
            <?php echo lucide_icon('utensils'); ?> Kitchen Remodeling
          </a>
          <a href="/services/decks/" class="error-link-pill">
            <?php echo lucide_icon('layout'); ?> Decks
          </a>
          <a href="/about/" class="error-link-pill">
            <?php echo lucide_icon('users'); ?> About Us
          </a>
          <a href="/contact/" class="error-link-pill">
            <?php echo lucide_icon('message-circle'); ?> Contact
          </a>
          <a href="/faq/" class="error-link-pill">
            <?php echo lucide_icon('help-circle'); ?> FAQ
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
