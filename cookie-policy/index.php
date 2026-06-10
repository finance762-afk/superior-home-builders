<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Cookie Policy ────────────────────────────────────────────────────────────
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Oregon';
$companyEmail      = $email;
$companyPhone      = $phone;
$companyAddress    = trim((!empty($address['street']) ? $address['street'] . ', ' : '') .
                    $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']);
$lastUpdated       = date('F j, Y');

$pageTitle        = 'Cookie Policy | ' . $siteName;
$pageDescription  = 'Cookie Policy for ' . $siteName . ' — what cookies we use, why, and how to control them.';
$canonicalUrl     = $siteUrl . '/cookie-policy/';
$currentPage      = 'legal';
$ogImage          = $logoUrl;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
.legal-hero {
  padding-top: var(--nav-height); padding-bottom: var(--space-3xl);
  background: var(--color-primary); position: relative; overflow: hidden;
  min-height: 40vh; display: flex; align-items: center;
}
.legal-hero::before {
  content: ''; position: absolute; inset: 0;
  background: repeating-linear-gradient(-45deg, transparent, transparent 50px,
    rgba(var(--color-accent-rgb), 0.025) 50px, rgba(var(--color-accent-rgb), 0.025) 100px);
}
.legal-hero::after {
  content: ''; position: absolute; top: -80px; right: -80px; width: 400px; height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 65%);
  pointer-events: none;
}
.legal-hero-inner { position: relative; z-index: 1; padding: var(--space-3xl) 0; }
.legal-hero-eyebrow {
  display: inline-block; font-size: var(--fs-xs); font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-md);
}
.legal-hero h1 {
  font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 800;
  color: #fff; text-wrap: balance; margin-bottom: var(--space-md);
}
.legal-hero p { font-size: var(--fs-body); color: rgba(255,255,255,0.72); max-width: 56ch; line-height: 1.7; }
.legal-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.50); }
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
  font-family: var(--font-heading); font-size: 1.4rem; font-weight: 800; color: var(--color-primary);
  margin: var(--space-3xl) 0 var(--space-md); padding-top: var(--space-xl);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.07);
  scroll-margin-top: calc(var(--nav-height) + var(--space-lg));
}
.content-narrow h2:first-of-type { margin-top: 0; border-top: none; padding-top: 0; }
.content-narrow h3 {
  font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-primary);
  margin: var(--space-xl) 0 var(--space-sm);
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

/* Cookie table */
.cookie-table {
  width: 100%; border-collapse: collapse; margin: var(--space-lg) 0 var(--space-xl); font-size: var(--fs-sm);
}
.cookie-table th {
  background: var(--color-primary); color: #fff; font-family: var(--font-heading);
  font-weight: 700; text-align: left; padding: var(--space-sm) var(--space-md); font-size: 0.85rem;
}
.cookie-table td {
  padding: var(--space-sm) var(--space-md); border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
  color: var(--color-text); vertical-align: top;
}
.cookie-table tr:nth-child(even) td { background: rgba(var(--color-secondary-rgb), 0.03); }
.legal-disclaimer {
  background: rgba(var(--color-accent-rgb), 0.10); border: 1px solid rgba(var(--color-accent-rgb), 0.30);
  border-radius: var(--radius); padding: var(--space-xl) var(--space-2xl); margin-top: var(--space-3xl);
  font-size: var(--fs-sm); color: var(--color-text); line-height: 1.7;
}
.legal-disclaimer strong { color: var(--color-primary); }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Cookie Policy",
  "url": "<?php echo $siteUrl; ?>/cookie-policy/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "@id": "<?php echo $siteUrl; ?>/#organization"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home",          "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "Cookie Policy", "item": "<?php echo $siteUrl; ?>/cookie-policy/"}
    ]
  }
}
</script>

<section class="legal-hero" aria-label="Cookie Policy">
  <div class="container">
    <div class="legal-hero-inner">
      <span class="legal-hero-eyebrow">Legal</span>
      <h1>Cookie Policy</h1>
      <p>What cookies <?php echo htmlspecialchars($siteName); ?> uses on this website and how to control them.</p>
      <nav class="legal-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="sep" aria-hidden="true">›</span>
        <span aria-current="page">Cookie Policy</span>
      </nav>
    </div>
  </div>
</section>

<section class="legal-content" aria-label="Cookie policy content">
  <div class="container">
    <div class="content-narrow">

      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <p><?php echo htmlspecialchars($siteName); ?> ("we," "us," or "our") uses cookies and similar technologies on our website. This Cookie Policy explains what cookies are, which cookies we use, and how you can control them.</p>

      <h2>What Are Cookies</h2>
      <p>Cookies are small text files stored on your device when you visit a website. They help websites remember your preferences and understand how you interact with the site. Cookies can be "session" cookies (deleted when you close your browser) or "persistent" cookies (remain until they expire or you delete them).</p>

      <h2>Strictly Necessary Cookies</h2>
      <p>These cookies are essential for the website to function and cannot be disabled without affecting how the site works.</p>
      <table class="cookie-table">
        <thead>
          <tr><th>Cookie</th><th>Provider</th><th>Purpose</th><th>Duration</th></tr>
        </thead>
        <tbody>
          <tr><td>PHPSESSID</td><td>This website</td><td>PHP session management — maintains server-side session state during a visit</td><td>Session</td></tr>
          <tr><td>cookie_consent</td><td>This website</td><td>Stores your cookie banner dismissal preference via localStorage</td><td>Persistent (localStorage)</td></tr>
        </tbody>
      </table>

      <h2>Analytics Cookies</h2>
      <p>These cookies help us understand how visitors interact with our website by collecting anonymous usage data. This information helps us improve the website experience.</p>
      <table class="cookie-table">
        <thead>
          <tr><th>Cookie</th><th>Provider</th><th>Purpose</th><th>Duration</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics 4</td><td>Distinguishes unique users by assigning a randomly generated number as a client identifier</td><td>2 years</td></tr>
          <tr><td>_ga_&lt;container-id&gt;</td><td>Google Analytics 4</td><td>Persists session state and tracks page interaction data</td><td>2 years</td></tr>
        </tbody>
      </table>
      <p>You can opt out of Google Analytics by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google Analytics Opt-out Browser Add-on</a>.</p>

      <h2>Functional Cookies &amp; Third-Party Resources</h2>
      <p>Web fonts and interface icons on this site are self-hosted and served directly from our own domain — they load no third-party resources and set no cookies. Aside from the analytics services described above, no third-party functional resources are loaded.</p>

      <h2>How to Control Cookies</h2>
      <p>You can control and delete cookies through your browser settings. Most browsers allow you to:</p>
      <ul>
        <li>View what cookies are stored and delete them individually</li>
        <li>Block third-party cookies</li>
        <li>Block cookies from specific sites</li>
        <li>Block all cookies (note: this may break website functionality)</li>
        <li>Delete all cookies when you close your browser</li>
      </ul>
      <p>For instructions specific to your browser, visit:</p>
      <ul>
        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
        <li><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
        <li><a href="https://support.apple.com/en-us/105082" target="_blank" rel="noopener noreferrer">Apple Safari</a></li>
        <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
      </ul>

      <h2>Do Not Track / Global Privacy Control</h2>
      <p>We honor the Global Privacy Control (GPC) signal. When we detect a GPC signal from your browser, we treat it as a valid opt-out request for the sale or sharing of your personal information.</p>

      <h3 id="ccpa-cookie-rights">California Residents</h3>
      <p>For more information about your privacy rights under the CCPA/CPRA, including your right to opt out of the sale or sharing of personal information, please see our <a href="/privacy-policy/#ccpa-rights">Privacy Policy — California Residents section</a>.</p>

      <h2>Changes to This Cookie Policy</h2>
      <p>We may update this Cookie Policy from time to time. Changes will be posted on this page with an updated "Last Updated" date. We encourage you to review this page periodically.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about our use of cookies, contact us:</p>
      <ul>
        <li><strong><?php echo htmlspecialchars($siteName); ?></strong></li>
        <?php if (!empty($companyEmail)): ?><li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li><?php endif; ?>
        <?php if (!empty($companyPhone)): ?><li>Phone: <a href="tel:<?php echo preg_replace('/\D/', '', $companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li><?php endif; ?>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>

      <div class="legal-disclaimer">
        <strong>Attorney Review Recommended:</strong> This Cookie Policy is provided as a general template.
        We recommend reviewing this document with a licensed <?php echo htmlspecialchars($companyState); ?> attorney before publication.
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
