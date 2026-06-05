<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Privacy Policy ───────────────────────────────────────────────────────────
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Oregon';
$companyEmail      = $email;
$companyPhone      = $phone;
$companyAddress    = trim((!empty($address['street']) ? $address['street'] . ', ' : '') .
                    $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']);
$lastUpdated       = date('F j, Y');

$pageTitle        = 'Privacy Policy | ' . $siteName;
$pageDescription  = 'Privacy Policy for ' . $siteName . ' — how we collect, use, and protect your personal information. SMS terms, CCPA/CPRA rights, and data practices.';
$canonicalUrl     = $siteUrl . '/privacy-policy/';
$currentPage      = 'legal';
$ogImage          = $logoUrl;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ═══════════════════════════════════════════════════════
   LEGAL PAGES — Superior Home Builders
   Shared legal page styles | var() tokens only
   Techniques: tinted legal hero, content-narrow prose layout,
   section divider, reveal animations, anchor nav
   ═══════════════════════════════════════════════════════ */
.legal-hero {
  padding-top: var(--nav-height);
  padding-bottom: var(--space-3xl);
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
  min-height: 40vh;
  display: flex;
  align-items: center;
}
.legal-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: repeating-linear-gradient(
    -45deg,
    transparent,
    transparent 50px,
    rgba(var(--color-accent-rgb), 0.025) 50px,
    rgba(var(--color-accent-rgb), 0.025) 100px
  );
}
.legal-hero::after {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 65%);
  pointer-events: none;
}
.legal-hero-inner {
  position: relative;
  z-index: 1;
  padding: var(--space-3xl) 0;
}
.legal-hero-eyebrow {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.legal-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 800;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.legal-hero p {
  font-size: var(--fs-body);
  color: rgba(255,255,255,0.72);
  max-width: 56ch;
  line-height: 1.7;
}
.legal-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.50);
}
.legal-breadcrumb a { color: rgba(255,255,255,0.68); }
.legal-breadcrumb a:hover { color: var(--color-accent); }
.legal-breadcrumb .sep { margin: 0 var(--space-xs); }

/* Legal prose content */
.legal-content {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.content-narrow {
  max-width: 72ch;
  margin: 0 auto;
}
.legal-updated {
  display: inline-block;
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  background: rgba(var(--color-secondary-rgb), 0.07);
  padding: var(--space-sm) var(--space-lg);
  border-radius: var(--radius);
  margin-bottom: var(--space-3xl);
  border-left: 3px solid var(--color-secondary);
}
.content-narrow h2 {
  font-family: var(--font-heading);
  font-size: 1.4rem;
  font-weight: 800;
  color: var(--color-primary);
  margin: var(--space-3xl) 0 var(--space-md);
  padding-top: var(--space-xl);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.07);
  scroll-margin-top: calc(var(--nav-height) + var(--space-lg));
}
.content-narrow h2:first-of-type {
  margin-top: 0;
  border-top: none;
  padding-top: 0;
}
.content-narrow h3 {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin: var(--space-xl) 0 var(--space-sm);
}
.content-narrow p {
  font-family: var(--font-body);
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.80;
  margin-bottom: var(--space-lg);
  max-width: 68ch;
}
.content-narrow ul,
.content-narrow ol {
  padding-left: var(--space-xl);
  margin-bottom: var(--space-lg);
}
.content-narrow li {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  margin-bottom: var(--space-sm);
}
.content-narrow a {
  color: var(--color-secondary);
  text-decoration: underline;
  text-underline-offset: 2px;
}
.content-narrow a:hover { color: var(--color-primary); }
.content-narrow strong { font-weight: 600; color: var(--color-primary); }

/* Cookie table (used on cookie policy) */
.cookie-table {
  width: 100%;
  border-collapse: collapse;
  margin: var(--space-lg) 0 var(--space-xl);
  font-size: var(--fs-sm);
}
.cookie-table th {
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 700;
  text-align: left;
  padding: var(--space-sm) var(--space-md);
  font-size: 0.85rem;
}
.cookie-table td {
  padding: var(--space-sm) var(--space-md);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
  color: var(--color-text);
  vertical-align: top;
}
.cookie-table tr:nth-child(even) td { background: rgba(var(--color-secondary-rgb), 0.03); }

/* Legal disclaimer box */
.legal-disclaimer {
  background: rgba(var(--color-accent-rgb), 0.10);
  border: 1px solid rgba(var(--color-accent-rgb), 0.30);
  border-radius: var(--radius);
  padding: var(--space-xl) var(--space-2xl);
  margin-top: var(--space-3xl);
  font-size: var(--fs-sm);
  color: var(--color-text);
  line-height: 1.7;
}
.legal-disclaimer strong { color: var(--color-primary); }

/* SVG Divider */
.legal-divider {
  display: block; width: 100%; overflow: hidden; line-height: 0;
}
.legal-divider svg { display: block; width: 100%; height: 50px; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy",
  "url": "<?php echo $siteUrl; ?>/privacy-policy/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "@id": "<?php echo $siteUrl; ?>/#organization"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home",           "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "Privacy Policy", "item": "<?php echo $siteUrl; ?>/privacy-policy/"}
    ]
  }
}
</script>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="legal-hero" aria-label="Privacy Policy">
  <div class="container">
    <div class="legal-hero-inner">
      <span class="legal-hero-eyebrow">Legal</span>
      <h1>Privacy Policy</h1>
      <p>How <?php echo htmlspecialchars($siteName); ?> collects, uses, and protects your personal information.</p>
      <nav class="legal-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="sep" aria-hidden="true">›</span>
        <span aria-current="page">Privacy Policy</span>
      </nav>
    </div>
  </div>
</section>

<!-- ═══════════════════════════ CONTENT ════════════════════════════════ -->
<section class="legal-content" aria-label="Privacy policy content">
  <div class="container">
    <div class="content-narrow">

      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <h2>Introduction</h2>
      <p>
        <?php echo htmlspecialchars($siteName); ?> ("Company," "we," "us," or "our"), a
        <?php echo htmlspecialchars($companyEntityType); ?> formed in the State of
        <?php echo htmlspecialchars($companyState); ?>, operates this website. This Privacy Policy
        describes how we collect, use, disclose, and protect your personal information when you visit
        our website or submit information through our contact forms.
      </p>
      <p>By using our website, you agree to the collection and use of information in accordance with this policy. If you do not agree, please do not use our website.</p>

      <h2>Information We Collect</h2>
      <h3>Information You Provide</h3>
      <p>When you submit a contact form or request a quote, we collect:</p>
      <ul>
        <li>Full name</li>
        <li>Email address</li>
        <li>Phone number</li>
        <li>Service requested</li>
        <li>Message or project details</li>
      </ul>
      <p>We also automatically capture the following when you submit a form:</p>
      <ul>
        <li>IP address</li>
        <li>Browser user agent</li>
        <li>Consent timestamp</li>
        <li>Page URL where the form was submitted</li>
        <li>Consent version identifier</li>
      </ul>

      <h3>Information Collected Automatically</h3>
      <p>We use Google Analytics 4 to collect anonymized usage data, including:</p>
      <ul>
        <li>Pages visited and time on site</li>
        <li>Device type, browser, and operating system</li>
        <li>Referring website</li>
        <li>General geographic location (city/region level)</li>
      </ul>

      <h2>How We Use Your Information</h2>
      <ul>
        <li>Respond to your inquiries and requests for service</li>
        <li>Schedule appointments and provide estimates</li>
        <li>Send transactional communications related to your inquiry</li>
        <li>With your explicit consent, send marketing communications via email</li>
        <li>With your explicit consent, send SMS/text messages about services, appointments, and promotions</li>
        <li>Improve our website and services</li>
        <li>Comply with legal obligations</li>
      </ul>

      <h2>How We Share Your Information</h2>
      <p>We do not sell your personal information. We may share your information with the following categories of service providers who assist in operating our business:</p>

      <h3>Google LLC</h3>
      <p>We use Google Analytics (website analytics) and Google Fonts (typography) on this website. Google may collect cookies and usage data as described in their <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>.</p>

      <h3>Page One Insights LLC</h3>
      <p>Our website and lead management services are provided by Page One Insights LLC, a web design and digital marketing company. Page One Insights handles form submissions, CRM (customer relationship management), and communications infrastructure on our behalf. Their sub-processors include:</p>
      <ul>
        <li><strong>Supabase Inc.</strong> — data hosting and database services</li>
        <li><strong>Twilio SendGrid</strong> — email delivery for lead notifications</li>
        <li><strong>Twilio Inc.</strong> — SMS/text message delivery (only if you opt in to SMS communications)</li>
      </ul>

      <h3>Hosting Provider</h3>
      <p>Our website is hosted by Hostinger International Ltd., which provides web hosting infrastructure.</p>

      <h3>Legal Requirements</h3>
      <p>We may disclose your information if required by law, court order, or governmental regulation, or if disclosure is necessary to protect our rights, property, or safety.</p>

      <h2>Your Privacy Rights</h2>

      <h3 id="ccpa-rights">California Residents (CCPA/CPRA)</h3>
      <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) as amended by the California Privacy Rights Act (CPRA):</p>
      <ul>
        <li><strong>Right to Know:</strong> You may request disclosure of the categories and specific pieces of personal information we have collected about you.</li>
        <li><strong>Right to Delete:</strong> You may request deletion of personal information we have collected, subject to certain exceptions.</li>
        <li><strong>Right to Correct:</strong> You may request correction of inaccurate personal information we maintain.</li>
        <li><strong>Right to Limit Use of Sensitive Personal Information:</strong> You may limit use and disclosure of your sensitive personal information.</li>
        <li><strong>Right to Opt-Out of Sale/Sharing:</strong> We do not sell or share your personal information for cross-context behavioral advertising. You may still exercise this right by contacting us.</li>
        <li><strong>Right to Non-Discrimination:</strong> We will not discriminate against you for exercising your privacy rights.</li>
        <li><strong>Authorized Agent:</strong> You may designate an authorized agent to make a request on your behalf.</li>
      </ul>
      <p>We honor Global Privacy Control (GPC) signals as a valid opt-out request.</p>
      <?php if (!empty($companyEmail) || !empty($companyPhone)): ?>
      <p>To exercise these rights, contact us
        <?php if (!empty($companyEmail)): ?>at <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a><?php endif; ?>
        <?php if (!empty($companyEmail) && !empty($companyPhone)): ?> or <?php endif; ?>
        <?php if (!empty($companyPhone)): ?>call <a href="tel:<?php echo preg_replace('/\D/', '', $companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a><?php endif; ?>.
        We will respond within 45 days.
      </p>
      <?php endif; ?>

      <h3>Oregon Residents (OCPA)</h3>
      <p>Under the Oregon Consumer Privacy Act (OCPA), Oregon residents have rights to access, correct, delete, and opt out of certain data processing activities. Contact us to exercise these rights. We will respond within 45 days.</p>

      <h3>Other State Privacy Rights</h3>
      <p>Residents of Virginia, Colorado, Connecticut, Utah, Texas, Florida, and other states with privacy laws have similar rights to access, correct, delete, and opt out of certain data processing. Contact us to exercise your rights under your state's applicable law.</p>

      <h2>Data Retention</h2>
      <p>We retain lead data and consent records for four (4) years from the date of collection, consistent with the statute of limitations for TCPA claims. After this period, data is purged unless an active client relationship exists. Active client data is retained for the duration of the relationship plus four years.</p>

      <h2>Security</h2>
      <p>We implement reasonable technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These include encrypted data transmission (SSL/TLS), secure database hosting, and access controls. However, no method of electronic transmission or storage is 100% secure.</p>

      <h2>Children's Privacy</h2>
      <p>Our website and services are not directed to children under the age of 13. We do not knowingly collect personal information from children under 13. If you believe we have inadvertently collected such information, please contact us immediately.</p>

      <h2>Third-Party Links</h2>
      <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>

      <h2>SMS Program Terms</h2>
      <p>If you opt in to receive SMS/text messages from <?php echo htmlspecialchars($siteName); ?>:</p>
      <ul>
        <li><strong>Message frequency:</strong> Varies. You may receive appointment reminders, service updates, and promotional offers.</li>
        <li><strong>Message and data rates may apply.</strong> Check with your carrier for details.</li>
        <li><strong>Opt-out:</strong> Text <strong>STOP</strong> to cancel at any time. You may also opt out by
          <?php if (!empty($companyEmail)): ?>emailing <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a>, <?php endif; ?>
          <?php if (!empty($companyPhone)): ?>calling <a href="tel:<?php echo preg_replace('/\D/', '', $companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a>, <?php endif; ?>
          or any other reasonable method. We will honor all reasonable opt-out requests.</li>
        <li><strong>Help:</strong> Text <strong>HELP</strong> for help, or contact us directly.</li>
        <li><strong>Carriers:</strong> Carriers are not liable for delayed or undelivered messages.</li>
        <li><strong>Consent is not a condition of purchase.</strong> You are not required to opt in to SMS to use our services or receive a quote.</li>
      </ul>

      <h2>Changes to This Privacy Policy</h2>
      <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of our website after changes constitutes acceptance of the revised policy.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about this Privacy Policy or wish to exercise your privacy rights, contact us:</p>
      <ul>
        <li><strong><?php echo htmlspecialchars($siteName); ?></strong></li>
        <?php if (!empty($companyEmail)): ?><li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li><?php endif; ?>
        <?php if (!empty($companyPhone)): ?><li>Phone: <a href="tel:<?php echo preg_replace('/\D/', '', $companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li><?php endif; ?>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>

      <div class="legal-disclaimer">
        <strong>Attorney Review Recommended:</strong> This Privacy Policy is provided as a general template.
        We recommend reviewing this document with a licensed <?php echo htmlspecialchars($companyState); ?> attorney before publication.
      </div>

    </div><!-- /.content-narrow -->
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
