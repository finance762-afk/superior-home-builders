<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Contact Page ─────────────────────────────────────────────────────────────
$pageTitle        = 'Contact Superior Home Builders | Free Estimates in Mount Vernon, OR';
$pageDescription  = 'Contact Superior Home Builders for a free estimate in Mount Vernon, OR. Custom home building, remodeling, decks, windows, and more. Serving Eastern Oregon since 2004.';
$canonicalUrl     = $siteUrl . '/contact/';
$currentPage      = 'contact';
$ogImage          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604273137-ksvcbn-518240531_10161958113367734_8953895085965006897_n.jpg';
$heroImagePreload = $ogImage;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   CONTACT PAGE — Superior Home Builders
   Premium tier page-specific styles | var() tokens only
   Techniques: layered hero (C1), SVG divider (C3), two-column form
   layout, floating accent, tinted trust badges, reveal animations,
   animated floating label inputs, consent fieldset styling
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ─────────────────────────────────────────────────────────── */
.contact-hero {
  position: relative;
  min-height: 48vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604273137-ksvcbn-518240531_10161958113367734_8953895085965006897_n.jpg');
  background-size: cover;
  background-position: center 35%;
  padding-top: var(--nav-height);
}
.contact-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    115deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-secondary-rgb), 0.80) 60%,
    rgba(var(--color-primary-rgb), 0.60) 100%
  );
  z-index: 1;
}
.contact-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  z-index: 2;
  pointer-events: none;
}
.contact-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
  text-align: center;
}
.contact-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-lg);
}
.contact-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4.5vw, 3.6rem);
  font-weight: 800;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-lg);
  text-wrap: balance;
}
.contact-hero h1 em { font-style: italic; color: var(--color-accent); }
.contact-hero p {
  font-size: clamp(1rem, 1.3vw, 1.15rem);
  color: rgba(255,255,255,0.82);
  max-width: 560px;
  margin: 0 auto;
  line-height: 1.7;
}
.contact-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.50);
}
.contact-hero-breadcrumb a { color: rgba(255,255,255,0.70); }
.contact-hero-breadcrumb a:hover { color: var(--color-accent); }
.contact-hero-breadcrumb .sep { margin: 0 var(--space-xs); }

/* ── MAIN CONTACT SECTION ─────────────────────────────────────────── */
.contact-main {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.contact-main-float {
  position: absolute;
  top: -100px;
  right: -100px;
  width: 440px;
  height: 440px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  pointer-events: none;
}
.contact-grid {
  display: grid;
  grid-template-columns: 3fr 2fr;
  gap: var(--space-4xl);
  align-items: start;
}

/* ── FORM ─────────────────────────────────────────────────────────── */
.contact-form-wrap {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg, 16px);
  padding: var(--space-3xl);
  box-shadow: 0 4px 32px rgba(var(--color-primary-rgb), 0.07);
}
.contact-form-wrap h2 {
  font-family: var(--font-heading);
  font-size: 1.7rem;
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.contact-form-wrap p.form-intro {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  margin-bottom: var(--space-2xl);
  line-height: 1.65;
}
.contact-form {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}
.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
}
.form-field {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
}
.form-field label {
  font-size: var(--fs-sm);
  font-weight: 600;
  color: var(--color-text);
  letter-spacing: 0.01em;
}
.form-field label .req { color: var(--color-accent-dark, #c0392b); margin-left: 2px; }
.form-field input,
.form-field select,
.form-field textarea {
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  color: var(--color-text);
  background: var(--color-bg);
  border: 1.5px solid rgba(var(--color-primary-rgb), 0.15);
  border-radius: var(--radius);
  padding: var(--space-md) var(--space-lg);
  transition: border-color var(--transition), box-shadow var(--transition);
  outline: none;
  width: 100%;
}
.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus {
  border-color: var(--color-secondary);
  box-shadow: 0 0 0 3px rgba(var(--color-secondary-rgb), 0.12);
}
.form-field textarea { resize: vertical; min-height: 120px; }
.form-field select { appearance: none; cursor: pointer; }

/* Consent fieldset */
.form-consent-fieldset {
  border: 1px solid rgba(var(--color-primary-rgb), 0.12);
  border-radius: var(--radius);
  padding: var(--space-xl) var(--space-lg);
  margin: var(--space-md) 0 0;
  background: rgba(var(--color-secondary-rgb), 0.03);
}
.form-consent-legend {
  font-size: var(--fs-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 0 var(--space-sm);
  color: var(--color-text-light);
}
.form-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-md) 0;
  cursor: pointer;
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.06);
}
.form-consent-item:last-child { border-bottom: none; }
.consent-checkbox {
  flex-shrink: 0;
  margin-top: 3px;
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: var(--color-secondary);
}
.consent-label {
  font-size: 0.83rem;
  line-height: 1.55;
  color: var(--color-text);
}
.consent-label strong { font-weight: 600; }
.consent-label a {
  color: var(--color-secondary);
  text-decoration: underline;
  text-underline-offset: 2px;
}
.required-star { color: var(--color-accent-dark, #c0392b); }
.form-consent-required .consent-label { font-weight: 500; }

.contact-submit-btn {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  letter-spacing: 0.02em;
  padding: var(--space-lg) var(--space-2xl);
  border-radius: var(--radius);
  background: var(--color-secondary);
  color: #fff;
  border: none;
  cursor: pointer;
  transition: background var(--transition), transform var(--transition), box-shadow var(--transition);
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  margin-top: var(--space-sm);
}
.contact-submit-btn:hover {
  background: var(--color-primary);
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(var(--color-primary-rgb), 0.20);
}
.contact-submit-btn:active { transform: translateY(0); }

/* ── CONTACT INFO SIDEBAR ─────────────────────────────────────────── */
.contact-info-wrap {
  display: flex;
  flex-direction: column;
  gap: var(--space-xl);
}
.contact-info-header {
  padding-bottom: var(--space-xl);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
}
.contact-info-header h3 {
  font-family: var(--font-heading);
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.contact-info-header p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.65;
}
.contact-info-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-lg);
  background: var(--color-bg-alt);
  border-radius: var(--radius);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  transition: box-shadow var(--transition);
}
.contact-info-item:hover {
  box-shadow: 0 4px 18px rgba(var(--color-primary-rgb), 0.09);
}
.contact-info-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  flex-shrink: 0;
}
.contact-info-icon i, .contact-info-icon svg { width: 20px; height: 20px; }
.contact-info-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 4px;
}
.contact-info-text a,
.contact-info-text span {
  font-size: var(--fs-sm);
  color: var(--color-text);
  line-height: 1.5;
  text-decoration: none;
  display: block;
}
.contact-info-text a:hover { color: var(--color-secondary); text-decoration: underline; }
.contact-service-list {
  padding: var(--space-xl);
  background: var(--color-primary);
  border-radius: var(--radius-lg, 16px);
  margin-top: var(--space-md);
}
.contact-service-list h4 {
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-accent);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-bottom: var(--space-md);
}
.contact-service-list ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.contact-service-list li {
  font-size: var(--fs-sm);
  color: rgba(255,255,255,0.80);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
}
.contact-service-list li::before {
  content: '→';
  color: var(--color-accent);
  font-weight: 700;
  flex-shrink: 0;
}

@media (max-width: 1024px) {
  .contact-grid { grid-template-columns: 1fr; gap: var(--space-3xl); }
  .contact-info-wrap { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-xl); align-items: start; }
  .contact-service-list { grid-column: 1 / -1; }
}
@media (max-width: 640px) {
  .contact-form-wrap { padding: var(--space-2xl) var(--space-xl); }
  .form-row { grid-template-columns: 1fr; }
  .contact-info-wrap { grid-template-columns: 1fr; }
}

/* ── BOTTOM DIVIDER ───────────────────────────────────────────────── */
.contact-divider {
  display: block; width: 100%; overflow: hidden; line-height: 0;
}
.contact-divider svg { display: block; width: 100%; height: 55px; }

/* ── CTA STRIP ────────────────────────────────────────────────────── */
.contact-cta-strip {
  background: var(--color-primary);
  padding: var(--space-3xl) 0;
  text-align: center;
}
.contact-cta-strip h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-lg);
  text-wrap: balance;
}
.contact-cta-strip h2 em { font-style: italic; color: var(--color-accent); }
.contact-cta-strip p {
  font-size: var(--fs-body);
  color: rgba(255,255,255,0.72);
  margin-bottom: var(--space-2xl);
  max-width: 50ch;
  margin-left: auto;
  margin-right: auto;
}
.contact-cta-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Superior Home Builders",
  "url": "<?php echo $siteUrl; ?>/contact/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "Contact", "item": "<?php echo $siteUrl; ?>/contact/"}
    ]
  },
  "provider": { "@id": "<?php echo $siteUrl; ?>/#organization" }
}
</script>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="contact-hero" aria-label="Contact us">
  <div class="contact-hero-inner container">
    <span class="contact-hero-eyebrow">
      <?php echo lucide_icon('message-circle'); ?>
      Free Estimates — No Obligation
    </span>
    <h1>Let's build <em>something</em><br>great together</h1>
    <p>
      Reach out to <?php echo htmlspecialchars($siteName); ?> for a free, honest estimate on your project
      in <?php echo htmlspecialchars($address['city']); ?>, OR or anywhere across Eastern Oregon.
      We respond within one business day.
    </p>
    <nav class="contact-hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">›</span>
      <span aria-current="page">Contact</span>
    </nav>
  </div>
</section>

<!-- ═══════════════════════════ MAIN CONTENT ══════════════════════════ -->
<section class="contact-main" aria-label="Contact form and information">
  <div class="contact-main-float" aria-hidden="true"></div>
  <div class="container">
    <div class="contact-grid">

      <!-- ─── FORM ─────────────────────────────────────────────── -->
      <div class="contact-form-wrap reveal-up">
        <h2>Request a Free Estimate</h2>
        <p class="form-intro">
          Tell us about your project and we'll get back to you within one business day with a
          no-pressure estimate. Serving Mount Vernon, John Day, Canyon City, Prairie City, and
          surrounding Eastern Oregon communities.
        </p>

        <form class="contact-form"
              action="<?php echo htmlspecialchars($formAction); ?>"
              method="POST"
              novalidate>

          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">

          <!-- Redirects & Consent tracking -->
          <input type="hidden" name="_next" value="/thank-you">
          <input type="hidden" name="_consent_version" value="<?php echo htmlspecialchars($consentVersion); ?>">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-row">
            <div class="form-field">
              <label for="contact-name">Full Name <span class="req">*</span></label>
              <input type="text" id="contact-name" name="name" required placeholder="Jane Smith" autocomplete="name">
            </div>
            <div class="form-field">
              <label for="contact-phone">Phone <span class="req">*</span></label>
              <input type="tel" id="contact-phone" name="phone" required placeholder="(541) 555-0100" autocomplete="tel">
            </div>
          </div>

          <div class="form-field">
            <label for="contact-email">Email Address <span class="req">*</span></label>
            <input type="email" id="contact-email" name="email" required placeholder="you@example.com" autocomplete="email">
          </div>

          <div class="form-field">
            <label for="contact-service">Service Needed</label>
            <select id="contact-service" name="service">
              <option value="">Select a service…</option>
              <?php foreach ($services as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['name']); ?>">
                <?php echo htmlspecialchars($svc['name']); ?>
              </option>
              <?php endforeach; ?>
              <option value="Not Sure / Multiple Services">Not Sure / Multiple Services</option>
            </select>
          </div>

          <div class="form-field">
            <label for="contact-message">Project Details</label>
            <textarea id="contact-message" name="message" rows="5"
              placeholder="Describe your project — size, scope, timeline, any questions…"></textarea>
          </div>

          <!-- ═══ SEPARATE CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" id="email-opt-in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, promotions, and news.
                I understand I can unsubscribe anytime<?php if (!empty($email)): ?> by emailing
                <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><?php endif; ?>.
                Message frequency varies.
              </span>
            </label>

            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" id="sms-opt-in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName); ?> at the phone number I provided. Message types may
                include appointment reminders, service updates, and promotional offers. Message frequency
                varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" id="terms-accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a> and
                <a href="/terms/">Terms of Service</a>.
                <span class="required-star">*</span>
              </span>
            </label>
          </fieldset>

          <button type="submit" class="contact-submit-btn">
            <?php echo lucide_icon('send'); ?>
            Send My Request
          </button>
        </form>
      </div><!-- /.contact-form-wrap -->

      <!-- ─── SIDEBAR INFO ──────────────────────────────────────── -->
      <div class="contact-info-wrap reveal-right">

        <div class="contact-info-header">
          <h3>Get in Touch Directly</h3>
          <p>We're a local Eastern Oregon contractor — no call centers, no voicemail mazes. Reach us directly for the fastest response.</p>
        </div>

        <?php if (!empty($phone)): ?>
        <div class="contact-info-item">
          <div class="contact-info-icon"><?php echo lucide_icon('phone'); ?></div>
          <div class="contact-info-text">
            <strong>Call or Text</strong>
            <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"><?php echo htmlspecialchars($phone); ?></a>
          </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($email)): ?>
        <div class="contact-info-item">
          <div class="contact-info-icon"><?php echo lucide_icon('mail'); ?></div>
          <div class="contact-info-text">
            <strong>Email Us</strong>
            <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
          </div>
        </div>
        <?php endif; ?>

        <div class="contact-info-item">
          <div class="contact-info-icon"><?php echo lucide_icon('map-pin'); ?></div>
          <div class="contact-info-text">
            <strong>Location</strong>
            <span>
              <?php if (!empty($address['street'])): ?><?php echo htmlspecialchars($address['street']); ?><br><?php endif; ?>
              <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
            </span>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><?php echo lucide_icon('clock'); ?></div>
          <div class="contact-info-text">
            <strong>Business Hours</strong>
            <span>Mon–Fri: 8:00 AM – 5:00 PM<br>Saturday: 9:00 AM – 2:00 PM<br>Sunday: Closed</span>
          </div>
        </div>

        <div class="contact-service-list">
          <h4>Services We Offer</h4>
          <ul>
            <?php foreach ($services as $svc): ?>
            <li><?php echo htmlspecialchars($svc['name']); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div><!-- /.contact-info-wrap -->
    </div><!-- /.contact-grid -->
  </div>
</section>

<!-- SVG Divider -->
<div class="contact-divider" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C480,55 960,55 1440,0 L1440,55 L0,55 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ═══════════════════════════ CTA STRIP ══════════════════════════════ -->
<section class="contact-cta-strip" aria-label="Additional contact options">
  <div class="container">
    <div class="reveal-up">
      <h2>Prefer to <em>call directly</em>?</h2>
      <p>
        We're a local Eastern Oregon team — available Monday through Friday from 8 AM to 5 PM.
        Call us for same-day responses on urgent projects.
      </p>
      <div class="contact-cta-actions">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg">
          <?php echo lucide_icon('phone'); ?> <?php echo htmlspecialchars($phone); ?>
        </a>
        <?php endif; ?>
        <a href="/services/" class="btn btn-outline btn-lg">View All Services</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
