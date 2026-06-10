<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Thank-You Page ───────────────────────────────────────────────────────────
$pageTitle        = 'Thank You — We\'ll Be in Touch | Superior Home Builders';
$pageDescription  = 'Your message has been received. Superior Home Builders will contact you within one business day to discuss your project.';
$canonicalUrl     = $siteUrl . '/thank-you/';
$currentPage      = 'thank-you';
$noindex          = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ═══════════════════════════════════════════════════════
   THANK-YOU PAGE — Superior Home Builders
   ═══════════════════════════════════════════════════════ */
.thankyou-page {
  min-height: 75vh;
  display: flex;
  align-items: center;
  background: var(--color-bg);
  padding: calc(var(--nav-height) + var(--space-4xl)) 0 var(--space-4xl);
  position: relative;
  overflow: hidden;
}
.thankyou-page::before {
  content: '';
  position: absolute;
  top: -100px;
  right: -100px;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 65%);
  pointer-events: none;
}
.thankyou-page::after {
  content: '';
  position: absolute;
  bottom: -80px;
  left: -60px;
  width: 380px;
  height: 380px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 65%);
  pointer-events: none;
}
.thankyou-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 680px;
  margin: 0 auto;
}
.thankyou-check {
  width: 88px;
  height: 88px;
  border-radius: 50%;
  background: rgba(var(--color-secondary-rgb), 0.10);
  border: 3px solid rgba(var(--color-secondary-rgb), 0.25);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-2xl);
  color: var(--color-secondary);
}
.thankyou-check i, .thankyou-check svg { width: 40px; height: 40px; }
.thankyou-inner h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
  text-wrap: balance;
}
.thankyou-inner h1 em { font-style: italic; color: var(--color-secondary); }
.thankyou-inner > p {
  font-size: clamp(1rem, 1.3vw, 1.15rem);
  color: var(--color-text-light);
  line-height: 1.72;
  margin-bottom: var(--space-3xl);
  max-width: 54ch;
  margin-left: auto;
  margin-right: auto;
}

/* Next steps */
.thankyou-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
  margin-bottom: var(--space-3xl);
  text-align: left;
}
.thankyou-step {
  background: var(--color-bg-alt);
  border-radius: var(--radius);
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
}
.thankyou-step-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  display: block;
  margin-bottom: var(--space-sm);
  -webkit-text-stroke: 1px rgba(var(--color-primary-rgb), 0.15);
}
.thankyou-step h3 {
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}
.thankyou-step p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  margin: 0;
}
.thankyou-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-2xl);
}
.thankyou-back {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
}
.thankyou-back a {
  color: var(--color-secondary);
  font-weight: 600;
  text-decoration: underline;
  text-underline-offset: 2px;
}
@media (max-width: 640px) {
  .thankyou-steps { grid-template-columns: 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="thankyou-page" aria-label="Message received confirmation">
  <div class="container">
    <div class="thankyou-inner">
      <div class="thankyou-check">
        <?php echo lucide_icon('check-circle-2'); ?>
      </div>

      <h1>Message received — <em>thank you!</em></h1>
      <p>
        We've received your project request and a member of the <?php echo htmlspecialchars($siteName); ?> team
        will contact you within one business day. If you have an urgent need, call us directly.
      </p>

      <div class="thankyou-steps">
        <div class="thankyou-step">
          <span class="thankyou-step-num">01</span>
          <h3>We review your request</h3>
          <p>Our team reads every inquiry personally and researches your project type and scope.</p>
        </div>
        <div class="thankyou-step">
          <span class="thankyou-step-num">02</span>
          <h3>We'll contact you</h3>
          <p>Expect a call or email within one business day to discuss details and schedule an on-site visit.</p>
        </div>
        <div class="thankyou-step">
          <span class="thankyou-step-num">03</span>
          <h3>Free written estimate</h3>
          <p>After our site visit, we provide a detailed, itemized estimate with no hidden costs or pressure.</p>
        </div>
      </div>

      <div class="thankyou-actions">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-primary btn-lg">
          <?php echo lucide_icon('phone'); ?> Call Now: <?php echo htmlspecialchars($phone); ?>
        </a>
        <?php endif; ?>
        <a href="/services/" class="btn btn-secondary btn-lg">Browse Our Services</a>
      </div>

      <p class="thankyou-back">
        <a href="/">← Back to <?php echo htmlspecialchars($siteName); ?></a>
      </p>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
