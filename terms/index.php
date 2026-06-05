<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Terms of Service ─────────────────────────────────────────────────────────
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Oregon';
$companyEmail      = $email;
$companyPhone      = $phone;
$companyAddress    = trim((!empty($address['street']) ? $address['street'] . ', ' : '') .
                    $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']);
$lastUpdated       = date('F j, Y');

$pageTitle        = 'Terms of Service | ' . $siteName;
$pageDescription  = 'Terms of Service for ' . $siteName . ' — terms governing your use of our website and construction services in Mount Vernon, OR.';
$canonicalUrl     = $siteUrl . '/terms/';
$currentPage      = 'legal';
$ogImage          = $logoUrl;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Legal pages — shared styles (same as privacy-policy/index.php) */
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
    -45deg, transparent, transparent 50px,
    rgba(var(--color-accent-rgb), 0.025) 50px,
    rgba(var(--color-accent-rgb), 0.025) 100px
  );
}
.legal-hero::after {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 65%);
  pointer-events: none;
}
.legal-hero-inner { position: relative; z-index: 1; padding: var(--space-3xl) 0; }
.legal-hero-eyebrow {
  display: inline-block;
  font-size: var(--fs-xs); font-weight: 700; letter-spacing: 0.12em;
  text-transform: uppercase; color: var(--color-accent); margin-bottom: var(--space-md);
}
.legal-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 800;
  color: #fff; text-wrap: balance; margin-bottom: var(--space-md);
}
.legal-hero p {
  font-size: var(--fs-body); color: rgba(255,255,255,0.72);
  max-width: 56ch; line-height: 1.7;
}
.legal-breadcrumb {
  margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.50);
}
.legal-breadcrumb a { color: rgba(255,255,255,0.68); }
.legal-breadcrumb a:hover { color: var(--color-accent); }
.legal-breadcrumb .sep { margin: 0 var(--space-xs); }

.legal-content { padding: var(--space-4xl) 0; background: var(--color-bg); }
.content-narrow { max-width: 72ch; margin: 0 auto; }
.legal-updated {
  display: inline-block; font-size: var(--fs-sm); color: var(--color-text-light);
  background: rgba(var(--color-secondary-rgb), 0.07);
  padding: var(--space-sm) var(--space-lg); border-radius: var(--radius);
  margin-bottom: var(--space-3xl); border-left: 3px solid var(--color-secondary);
}
.content-narrow h2 {
  font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800;
  color: var(--color-primary); margin: var(--space-3xl) 0 var(--space-md);
  padding-top: var(--space-xl); border-top: 1px solid rgba(var(--color-primary-rgb), 0.07);
  scroll-margin-top: calc(var(--nav-height) + var(--space-lg));
}
.content-narrow h2:first-of-type { margin-top: 0; border-top: none; padding-top: 0; }
.content-narrow h3 {
  font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700;
  color: var(--color-primary); margin: var(--space-xl) 0 var(--space-sm);
}
.content-narrow p {
  font-family: var(--font-body); font-size: var(--fs-body); color: var(--color-text);
  line-height: 1.80; margin-bottom: var(--space-lg); max-width: 68ch;
}
.content-narrow ul, .content-narrow ol { padding-left: var(--space-xl); margin-bottom: var(--space-lg); }
.content-narrow li {
  font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; margin-bottom: var(--space-sm);
}
.content-narrow a { color: var(--color-secondary); text-decoration: underline; text-underline-offset: 2px; }
.content-narrow a:hover { color: var(--color-primary); }
.content-narrow strong { font-weight: 600; color: var(--color-primary); }
.legal-disclaimer {
  background: rgba(var(--color-accent-rgb), 0.10);
  border: 1px solid rgba(var(--color-accent-rgb), 0.30);
  border-radius: var(--radius); padding: var(--space-xl) var(--space-2xl);
  margin-top: var(--space-3xl); font-size: var(--fs-sm); color: var(--color-text); line-height: 1.7;
}
.legal-disclaimer strong { color: var(--color-primary); }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Terms of Service",
  "url": "<?php echo $siteUrl; ?>/terms/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "@id": "<?php echo $siteUrl; ?>/#organization"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home",             "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "Terms of Service", "item": "<?php echo $siteUrl; ?>/terms/"}
    ]
  }
}
</script>

<section class="legal-hero" aria-label="Terms of Service">
  <div class="container">
    <div class="legal-hero-inner">
      <span class="legal-hero-eyebrow">Legal</span>
      <h1>Terms of Service</h1>
      <p>The terms governing your use of the <?php echo htmlspecialchars($siteName); ?> website and services.</p>
      <nav class="legal-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="sep" aria-hidden="true">›</span>
        <span aria-current="page">Terms of Service</span>
      </nav>
    </div>
  </div>
</section>

<section class="legal-content" aria-label="Terms of service content">
  <div class="container">
    <div class="content-narrow">

      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <h2>Acceptance of Terms</h2>
      <p>
        These Terms of Service ("Terms") constitute a legally binding agreement between you ("you" or "user")
        and <?php echo htmlspecialchars($siteName); ?>, a <?php echo htmlspecialchars($companyEntityType); ?>
        formed in the State of <?php echo htmlspecialchars($companyState); ?> ("Company," "we," "us," or "our").
        By accessing or using our website, you agree to be bound by these Terms. If you do not agree,
        do not use our website.
      </p>

      <h2>Description of Services</h2>
      <p><?php echo htmlspecialchars($siteName); ?> provides professional construction and remodeling services as described on this website, including custom home building, bathroom remodeling, kitchen remodeling, windows and doors installation, deck building, structural framing, general remodeling, and commercial construction. The specific services available, service areas, and pricing are subject to change without notice. Descriptions of services on this website are for informational purposes and do not constitute a binding offer.</p>

      <h2>Use of This Website</h2>
      <p>You agree to use this website only for lawful purposes. You may not:</p>
      <ul>
        <li>Use the website in any way that violates applicable federal, state, or local laws</li>
        <li>Attempt to gain unauthorized access to any portion of the website or its systems</li>
        <li>Use automated tools to scrape, crawl, or extract data from the website without written permission</li>
        <li>Transmit any material that is defamatory, obscene, threatening, or that constitutes harassment</li>
        <li>Interfere with or disrupt the website's infrastructure or other users' access</li>
      </ul>

      <h2>Intellectual Property</h2>
      <p>All content on this website — including text, graphics, logos, images, photographs, and software — is the property of <?php echo htmlspecialchars($siteName); ?> or its content suppliers and is protected by United States and international copyright, trademark, and other intellectual property laws. You may not reproduce, distribute, modify, or create derivative works from any content without our prior written consent.</p>

      <h2>User Submissions</h2>
      <p>When you submit information through our contact forms, you represent that:</p>
      <ul>
        <li>The information you provide is accurate and complete</li>
        <li>You have the right to submit the information</li>
        <li>Your submission does not violate any third-party rights</li>
      </ul>
      <p>By submitting content, you grant <?php echo htmlspecialchars($siteName); ?> a non-exclusive, royalty-free, perpetual license to use, display, and reproduce such content in connection with our business operations, including marketing and testimonials.</p>

      <h2>Estimates and Pricing</h2>
      <p>Any estimates, quotes, or pricing information provided through this website or in response to inquiries are for informational purposes only and do not constitute binding offers. Final pricing is determined after a site assessment, inspection, or detailed consultation and may differ from initial estimates based on actual conditions, scope of work, materials required, and other factors. All binding agreements are made through signed written contracts.</p>

      <h2>Service Disclaimers</h2>
      <p>This website and all services are provided on an "AS IS" and "AS AVAILABLE" basis without warranties of any kind, either express or implied, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We do not warrant that the website will be uninterrupted, error-free, or free of viruses or other harmful components.</p>

      <h2>Limitation of Liability</h2>
      <p>To the fullest extent permitted by applicable law, <?php echo htmlspecialchars($siteName); ?> shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or use, arising out of or in connection with your use of this website or our services. Our total liability for any claim arising out of or relating to these Terms or our services shall not exceed the total amount you have paid to us in the twelve (12) months preceding the claim. Some states do not allow the exclusion or limitation of certain damages, so the above limitations may not apply to you.</p>

      <h2>Indemnification</h2>
      <p>You agree to indemnify, defend, and hold harmless <?php echo htmlspecialchars($siteName); ?>, its officers, directors, employees, agents, and affiliates from and against any claims, liabilities, damages, judgments, awards, losses, costs, or expenses (including reasonable attorneys' fees) arising out of or relating to your violation of these Terms or your use of the website.</p>

      <h2>Governing Law</h2>
      <p>These Terms are governed by the laws of the State of <?php echo htmlspecialchars($companyState); ?>, without regard to conflict of laws principles. Any dispute arising out of or relating to these Terms shall be resolved in the state or federal courts located in <?php echo htmlspecialchars($companyState); ?>.</p>

      <h2>Changes to These Terms</h2>
      <p>We reserve the right to update or modify these Terms at any time. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the website after changes constitutes acceptance of the revised Terms.</p>

      <h2>Severability</h2>
      <p>If any provision of these Terms is held to be invalid or unenforceable, the remaining provisions shall continue in full force and effect.</p>

      <h2>Entire Agreement</h2>
      <p>These Terms, together with our <a href="/privacy-policy/">Privacy Policy</a> and <a href="/cookie-policy/">Cookie Policy</a>, constitute the entire agreement between you and <?php echo htmlspecialchars($siteName); ?> regarding your use of this website.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about these Terms of Service, contact us:</p>
      <ul>
        <li><strong><?php echo htmlspecialchars($siteName); ?></strong></li>
        <?php if (!empty($companyEmail)): ?><li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li><?php endif; ?>
        <?php if (!empty($companyPhone)): ?><li>Phone: <a href="tel:<?php echo preg_replace('/\D/', '', $companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li><?php endif; ?>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>

      <div class="legal-disclaimer">
        <strong>Attorney Review Recommended:</strong> This Terms of Service is provided as a general template.
        We recommend reviewing this document with a licensed <?php echo htmlspecialchars($companyState); ?> attorney before publication.
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
