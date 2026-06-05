<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Accessibility Statement ───────────────────────────────────────────────────
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Oregon';
$companyEmail      = $email;
$companyPhone      = $phone;
$companyAddress    = trim((!empty($address['street']) ? $address['street'] . ', ' : '') .
                    $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']);
$lastUpdated       = date('F j, Y');

$pageTitle        = 'Accessibility Statement | ' . $siteName;
$pageDescription  = 'Accessibility statement for ' . $siteName . ' — our commitment to WCAG 2.1 AA compliance and digital inclusion for all visitors.';
$canonicalUrl     = $siteUrl . '/accessibility/';
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
.content-narrow code {
  font-family: monospace; font-size: 0.9em; background: rgba(var(--color-secondary-rgb), 0.08);
  padding: 0.1em 0.4em; border-radius: 3px; color: var(--color-secondary);
}
.legal-disclaimer {
  background: rgba(var(--color-accent-rgb), 0.10); border: 1px solid rgba(var(--color-accent-rgb), 0.30);
  border-radius: var(--radius); padding: var(--space-xl) var(--space-2xl); margin-top: var(--space-3xl);
  font-size: var(--fs-sm); color: var(--color-text); line-height: 1.7;
}
.legal-disclaimer strong { color: var(--color-primary); }

/* Conformance status badge */
.a11y-conformance-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-secondary-rgb), 0.08);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.20);
  color: var(--color-secondary);
  padding: var(--space-sm) var(--space-lg);
  border-radius: 100px;
  font-size: var(--fs-sm);
  font-weight: 600;
  margin-bottom: var(--space-xl);
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Accessibility Statement",
  "url": "<?php echo $siteUrl; ?>/accessibility/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "@id": "<?php echo $siteUrl; ?>/#organization"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home",                    "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "Accessibility Statement", "item": "<?php echo $siteUrl; ?>/accessibility/"}
    ]
  }
}
</script>

<section class="legal-hero" aria-label="Accessibility Statement">
  <div class="container">
    <div class="legal-hero-inner">
      <span class="legal-hero-eyebrow">Legal</span>
      <h1>Accessibility Statement</h1>
      <p><?php echo htmlspecialchars($siteName); ?>'s commitment to digital accessibility for people of all abilities.</p>
      <nav class="legal-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="sep" aria-hidden="true">›</span>
        <span aria-current="page">Accessibility</span>
      </nav>
    </div>
  </div>
</section>

<section class="legal-content" aria-label="Accessibility statement content">
  <div class="container">
    <div class="content-narrow">

      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <span class="a11y-conformance-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
        WCAG 2.1 Level AA — Partial Conformance
      </span>

      <h2>Our Commitment</h2>
      <p>
        <?php echo htmlspecialchars($siteName); ?> is committed to ensuring digital accessibility for
        people with disabilities. We continually work to improve the user experience of our website
        and aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.
      </p>

      <h2>Conformance Status</h2>
      <p>
        This website <strong>partially conforms</strong> to WCAG 2.1 Level AA. "Partially conforms" means
        that some parts of the content do not fully conform to the accessibility standard. We are
        actively working to identify and remediate any remaining issues.
      </p>

      <h2>Accessibility Features</h2>
      <p>We have implemented the following accessibility features on our website:</p>
      <ul>
        <li><strong>Semantic HTML5 structure</strong> — proper use of headings, landmarks, lists, and structural elements for screen reader compatibility</li>
        <li><strong>Skip-to-content link</strong> — allows keyboard users to bypass navigation and jump directly to main content</li>
        <li><strong>ARIA labels and landmarks</strong> — descriptive labels on interactive elements and ARIA landmarks for navigation regions (<code>header</code>, <code>nav</code>, <code>main</code>, <code>footer</code>)</li>
        <li><strong>Full keyboard navigation</strong> — all interactive elements are operable via keyboard</li>
        <li><strong>Visible focus indicators</strong> — clear visual focus outlines on all interactive elements when navigating with a keyboard</li>
        <li><strong>WCAG AA color contrast</strong> — minimum 4.5:1 contrast ratio for body text and 3:1 for large text</li>
        <li><strong>Descriptive alt text</strong> — all informational images include descriptive alternative text; purely decorative images use <code>alt=""</code></li>
        <li><strong>Responsive zoom up to 200%</strong> — content remains usable and readable when zoomed to 200%</li>
        <li><strong><code>prefers-reduced-motion</code> media query</strong> — all animations are disabled or significantly reduced for users who prefer reduced motion</li>
        <li><strong>Form labels associated with inputs</strong> — all form fields have programmatically associated labels</li>
        <li><strong>Required field indicators</strong> — required fields are clearly marked and described to assistive technology</li>
        <li><strong><code>aria-current="page"</code></strong> — active navigation links are marked for screen reader users</li>
        <li><strong><code>aria-expanded</code> on mobile menu</strong> — mobile menu toggle announces its expanded/collapsed state</li>
        <li><strong>Language attribute</strong> — the page language is declared as <code>lang="en"</code></li>
      </ul>

      <h2>Known Limitations</h2>
      <p>Despite our best efforts, some areas of the website may not be fully accessible:</p>
      <ul>
        <li><strong>Third-party content:</strong> Embedded content from third-party services (such as Google Fonts CDN loading behavior and icon libraries) may not fully conform to WCAG 2.1 AA standards. We are working with these providers to address any limitations.</li>
        <li><strong>Older PDF documents:</strong> If any downloadable documents are provided in the future, they may not be fully accessible. We will work to provide accessible alternatives upon request.</li>
      </ul>

      <h2>Feedback and Contact</h2>
      <p>We welcome your feedback on the accessibility of our website. If you encounter accessibility barriers, have suggestions for improvement, or need information in an alternative format, please contact us:</p>
      <ul>
        <?php if (!empty($companyEmail)): ?><li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li><?php endif; ?>
        <?php if (!empty($companyPhone)): ?><li>Phone: <a href="tel:<?php echo preg_replace('/\D/', '', $companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li><?php endif; ?>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>
      <p>We aim to respond to accessibility feedback within 5 business days and provide an accessible alternative or resolve the issue within 30 days.</p>

      <h2>Enforcement</h2>
      <p>
        We recognize your rights under the Americans with Disabilities Act (ADA), Section 508 of the
        Rehabilitation Act, the Oregon Accessibility Law, and applicable state accessibility statutes.
        If you believe that your rights have been violated and we have not adequately addressed your
        concern, you may file a complaint with:
      </p>
      <ul>
        <li><strong>U.S. Department of Justice ADA Information Line:</strong> 1-800-514-0301 (voice) or 1-833-610-1264 (TTY)</li>
        <li><strong>U.S. Access Board:</strong> <a href="https://www.access-board.gov" target="_blank" rel="noopener noreferrer">www.access-board.gov</a></li>
      </ul>

      <h2>Technical Specifications</h2>
      <p>Accessibility of this website relies on the following technologies working in combination:</p>
      <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>JavaScript (ES6+)</li>
        <li>PHP 8+</li>
        <li>WAI-ARIA 1.1</li>
      </ul>
      <p>The following browsers and assistive technologies are our primary support targets:</p>
      <ul>
        <li>Chrome + NVDA (Windows)</li>
        <li>Firefox + NVDA (Windows)</li>
        <li>Safari + VoiceOver (macOS / iOS)</li>
        <li>Chrome + TalkBack (Android)</li>
      </ul>

      <div class="legal-disclaimer">
        <strong>Attorney Review Recommended:</strong> This Accessibility Statement is provided as a general template.
        We recommend reviewing this document with a licensed <?php echo htmlspecialchars($companyState); ?> attorney or
        a certified accessibility consultant before publication.
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
