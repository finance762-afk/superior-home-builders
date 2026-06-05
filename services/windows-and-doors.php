<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Windows and Doors in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Window replacement and door installation in Mount Vernon, OR. Energy-efficient vinyl, wood, and fiberglass windows for Eastern Oregon\'s climate. Licensed contractor serving Grant County since 2004. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/windows-and-doors';
$currentPage      = 'services';
$heroImage        = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604124347-3q5r39-Finished_windows_Southside.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q' => 'How much does window replacement cost in Mount Vernon, OR?',
   'a' => 'Vinyl double-pane window replacement in the Mount Vernon area typically runs $400–$900 per window installed, including labor and trim-out. A full-house replacement with 10–15 windows comes to $6,000–$18,000 depending on window count, style selection, and whether any openings need modification. We provide a written per-window estimate after measuring on-site.'],
  ['q' => 'How long does window installation take in Grant County?',
   'a' => 'Most homes with 8–15 windows are completed in 1–3 days. A single entry door replacement is typically a half-day install. Larger projects combining windows and multiple door units may run 2–4 days. Timing depends on the number of openings, whether framing work is required, and custom sizing lead times.'],
  ['q' => 'What types of windows do you install in Eastern Oregon?',
   'a' => 'We install vinyl, wood, clad-wood, and fiberglass frame windows. For Eastern Oregon\'s climate — cold winters and significant temperature swings — we specify double-pane low-E glass with argon fill. U-factor and solar heat gain coefficient (SHGC) selection matters for Grant County homes: lower U-factor for heat retention, moderate SHGC to capture winter solar gain. We help you choose the right spec for your home\'s orientation and exposure.'],
  ['q' => 'Do I need a permit for window replacement in Oregon?',
   'a' => 'Like-for-like replacement in the same rough opening generally does not require a permit in Oregon. Enlarging an existing opening, creating a new opening, or making structural modifications to the header does require a building permit. Superior Home Builders handles the permit application, structural drawings if required, and all inspections as part of the project.'],
  ['q' => 'What energy savings can I expect from new windows in Eastern Oregon?',
   'a' => 'Properly specified replacement windows can reduce heating costs 15–25% in Eastern Oregon homes, particularly when replacing failed-seal double-pane or single-pane windows. Low-E glass with argon fill dramatically reduces conductive heat loss in Grant County\'s cold winters. The return on investment is faster here than in the mild Willamette Valley due to the higher heating load.'],
  ['q' => 'Can you replace an exterior door at the same time as windows?',
   'a' => 'Yes — combining window and door replacement on a single project is common and cost-effective. One mobilization, one permit (when required), and one crew finish the entire scope. We install entry doors, sliding patio doors, French doors, and garage side-entry doors. If you\'re planning an exterior refresh, combining everything into one project makes sense.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',              'url' => $siteUrl . '/'],
  ['name' => 'Services',          'url' => $siteUrl . '/services'],
  ['name' => 'Windows and Doors', 'url' => $siteUrl . '/services/windows-and-doors'],
]);
$serviceSchema = [
  '@context'  => 'https://schema.org',
  '@type'     => 'Service',
  '@id'       => $siteUrl . '/services/windows-and-doors#service',
  'name'      => 'Windows and Doors',
  'url'       => $siteUrl . '/services/windows-and-doors',
  'provider'  => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed' => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Window replacement and door installation services in Mount Vernon, OR. Vinyl, wood, and fiberglass window options with low-E argon glass specified for Eastern Oregon\'s heating-dominated climate. Serving Grant County homeowners since 2004.',
];
$faqSchema   = generateFAQSchema($faqs);
$schemaGraph = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   WINDOWS AND DOORS — Superior Home Builders
   Premium page styles | var() tokens only | No hardcoded values
   Techniques: layered hero + noise, bento problem section, asymmetric
   expert positioning (photo RIGHT), scroll process timeline, proof
   module, dark comparison grid, FAQ accordion, floating accent,
   multi-dir reveals, SVG section dividers
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ─────────────────────────────────────────────────────────── */
.sp-hero {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    110deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-secondary-rgb), 0.80) 55%,
    rgba(var(--color-primary-rgb), 0.58) 100%
  );
  z-index: 1;
}
.sp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  background-size: 180px 180px;
  z-index: 2;
  pointer-events: none;
}
.sp-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
  color: #fff;
}
.sp-hero-layout {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: var(--space-3xl);
  align-items: center;
}
.sp-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  color: var(--color-accent);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 5px var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-md);
}
.sp-hero h1 {
  font-family: var(--font-heading);
  font-size: var(--fs-h1);
  font-weight: 800;
  line-height: 1.05;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.sp-hero h1 em {
  font-style: italic;
  color: var(--color-accent);
}
.sp-hero p.hero-answer {
  font-size: clamp(1rem, 1.3vw, 1.15rem);
  color: rgba(255, 255, 255, 0.85);
  max-width: 60ch;
  line-height: 1.75;
  margin-bottom: var(--space-xl);
}
.sp-hero-trust {
  display: flex;
  gap: var(--space-lg);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.sp-hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.75);
}
.sp-hero-trust-item svg {
  color: var(--color-accent);
  flex-shrink: 0;
}
.sp-hero-actions {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
/* Hero glassmorphism card */
.sp-hero-card {
  background: rgba(255, 255, 255, 0.07);
  border: 1px solid rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 16px;
  padding: var(--space-2xl);
  color: #fff;
}
.sp-hero-card h3 {
  font-family: var(--font-heading);
  font-size: 1.3rem;
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.sp-hero-card ul {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.sp-hero-card ul li {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.82);
}
.sp-hero-card ul li svg {
  color: var(--color-accent);
  flex-shrink: 0;
}
.sp-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255, 255, 255, 0.50);
}
.sp-hero-breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
}
.sp-hero-breadcrumb a:hover {
  color: var(--color-accent);
}
.sp-hero-breadcrumb .sep {
  margin: 0 4px;
}

/* ── SVG DIVIDERS ─────────────────────────────────────────────────── */
.sp-divider {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.sp-divider svg {
  display: block;
  width: 100%;
}

/* ── PROBLEM SECTION ──────────────────────────────────────────────── */
.sp-problem {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
}
.sp-problem-pull {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 2.8vw, 2.4rem);
  font-weight: 700;
  font-style: italic;
  color: var(--color-primary);
  border-left: 4px solid var(--color-accent);
  padding-left: var(--space-xl);
  max-width: 70ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.4;
  text-wrap: balance;
}
.sp-bento {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
.sp-bento-card {
  padding: var(--space-xl) var(--space-lg);
  border-radius: 12px;
  position: relative;
  overflow: hidden;
}
.sp-bento-card:nth-child(1) { background: var(--color-card-tint-1); }
.sp-bento-card:nth-child(2) { background: var(--color-card-tint-2); }
.sp-bento-card:nth-child(3) { background: var(--color-card-tint-3); }
.sp-bento-card:nth-child(4) { background: var(--color-card-tint-neutral); }
.sp-bento-card .icon-wrap {
  width: 48px;
  height: 48px;
  border-radius: 10px;
  background: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-md);
  color: var(--color-primary);
}
.sp-bento-card h3 {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}
.sp-bento-card p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* ── EXPERT POSITIONING (photo RIGHT for windows page) ────────────── */
.sp-expert {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
/* Reverse grid: content left, photo right */
.sp-expert-grid {
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: var(--space-3xl);
  align-items: center;
}
.sp-expert-photo {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.sp-expert-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.sp-expert-photo::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.52) 100%);
}
.sp-expert-photo-badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 0.95rem;
  padding: var(--space-sm) var(--space-md);
  border-radius: 8px;
  z-index: 2;
}
.sp-expert-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-expert-content p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-xl);
}
.sp-expert-points {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  margin-bottom: var(--space-xl);
}
.sp-expert-point {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.sp-expert-point .num {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 900;
  color: var(--color-accent-dark);
  min-width: 36px;
  line-height: 1;
}
.sp-expert-point div strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 2px;
}
.sp-expert-point div span {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.55;
}

/* ── SERVICE BREAKDOWN / PROCESS ──────────────────────────────────── */
.sp-breakdown {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.sp-breakdown-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.sp-breakdown h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-breakdown p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-xl);
}
.sp-includes-list {
  list-style: none;
  padding: 0;
  margin: 0 0 var(--space-xl);
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-sm);
}
.sp-includes-list li {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-sm);
  color: var(--color-text);
}
.sp-includes-list li svg {
  color: var(--color-accent-dark);
  flex-shrink: 0;
}
/* Vertical process timeline */
.sp-process-timeline {
  display: flex;
  flex-direction: column;
  gap: 0;
  position: relative;
}
.sp-process-timeline::before {
  content: '';
  position: absolute;
  left: 24px;
  top: 48px;
  bottom: 48px;
  width: 2px;
  background: linear-gradient(180deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb), 0.2) 100%);
}
.sp-step {
  display: flex;
  gap: var(--space-lg);
  align-items: flex-start;
  padding: var(--space-lg) 0;
  position: relative;
}
.sp-step-num {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: var(--color-primary);
  border: 3px solid var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 1rem;
  color: var(--color-accent);
  flex-shrink: 0;
  position: relative;
  z-index: 1;
}
.sp-step-body strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 4px;
}
.sp-step-body span {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* ── PROOF SECTION ────────────────────────────────────────────────── */
.sp-proof {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.sp-proof h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-proof p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  max-width: 62ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.75;
  text-align: center;
}
.sp-proof-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-xl);
  margin-bottom: var(--space-3xl);
}
.sp-testimonial {
  background: var(--color-bg);
  border-radius: 14px;
  padding: var(--space-2xl);
  box-shadow: var(--shadow-card);
  position: relative;
}
.sp-testimonial::before {
  content: '\201C';
  position: absolute;
  top: var(--space-md);
  left: var(--space-xl);
  font-family: var(--font-heading);
  font-size: 4rem;
  line-height: 1;
  color: var(--color-accent);
  opacity: 0.4;
}
.sp-testimonial p {
  font-size: var(--fs-sm);
  color: var(--color-text);
  line-height: 1.75;
  margin-bottom: var(--space-lg);
  padding-top: var(--space-xl);
}
.sp-testimonial-meta strong {
  display: block;
  font-weight: 700;
  color: var(--color-primary);
  font-size: var(--fs-sm);
}
.sp-testimonial-meta span {
  font-size: var(--fs-xs);
  color: var(--color-text-light);
}
.sp-testimonial-stars {
  color: var(--color-accent);
  font-size: 0.9rem;
  letter-spacing: 2px;
  margin-bottom: var(--space-sm);
  display: block;
}
.sp-proof-photos {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  gap: var(--space-md);
}
.sp-proof-photos img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-radius: 10px;
  display: block;
}
.sp-proof-photos img:first-child {
  height: 100%;
}

/* ── COMPARISON SECTION ───────────────────────────────────────────── */
.sp-compare {
  padding: var(--space-4xl) 0;
  background: var(--color-primary);
  color: #fff;
}
.sp-compare h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: #fff;
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-compare p.answer-block {
  font-size: var(--fs-body);
  color: rgba(255, 255, 255, 0.75);
  text-align: center;
  max-width: 58ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.75;
}
.sp-compare-table {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-xl);
  max-width: 900px;
  margin: 0 auto;
}
.sp-compare-col {
  border-radius: 14px;
  padding: var(--space-2xl);
}
.sp-compare-col--bad  {
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.12);
}
.sp-compare-col--good {
  background: rgba(var(--color-accent-rgb), 0.12);
  border: 1px solid rgba(var(--color-accent-rgb), 0.30);
}
.sp-compare-col h3 {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  margin-bottom: var(--space-lg);
  color: #fff;
  text-wrap: balance;
}
.sp-compare-col--good h3 {
  color: var(--color-accent);
}
.sp-compare-row {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  padding: var(--space-sm) 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}
.sp-compare-row:last-child {
  border-bottom: none;
}
.sp-compare-row svg {
  flex-shrink: 0;
  margin-top: 2px;
}
.sp-compare-row span {
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.55;
}
.sp-compare-col--good .sp-compare-row span {
  color: rgba(255, 255, 255, 0.90);
}

/* ── FAQ ──────────────────────────────────────────────────────────── */
.sp-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.sp-faq h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-faq p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  text-align: center;
  max-width: 60ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.75;
}
.sp-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.sp-faq-item {
  border: 1px solid var(--color-border);
  border-radius: 10px;
  overflow: hidden;
}
.sp-faq-question {
  width: 100%;
  background: none;
  border: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--color-primary);
  cursor: pointer;
  text-align: left;
}
.sp-faq-question:hover {
  background: var(--color-bg-alt);
}
.sp-faq-question svg {
  flex-shrink: 0;
  transition: transform var(--transition);
  color: var(--color-accent-dark);
}
.sp-faq-item.open .sp-faq-question svg {
  transform: rotate(45deg);
}
.sp-faq-answer {
  display: none;
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--fs-body);
  color: var(--color-text-light);
  line-height: 1.75;
  border-top: 1px solid var(--color-border);
}
.sp-faq-item.open .sp-faq-answer {
  display: block;
}

/* ── FINAL CTA ────────────────────────────────────────────────────── */
.sp-final-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
  text-align: center;
}
.sp-final-cta h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-final-cta p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 60ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.75;
}
.sp-final-cta .cta-row {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ─────────────────────────────────────────────── */
.sp-related {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.sp-related h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h3);
  font-weight: 800;
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}

/* ── SERVICES GRID (RELATED CARDS) ───────────────────────────────── */
.services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-md); }
@media (max-width: 768px) { .services-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 480px) { .services-grid { grid-template-columns: 1fr; } }
.service-card-with-image { border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); flex-shrink: 0; }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.25rem; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid var(--color-border); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: var(--fs-sm); color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: .25rem; }
.service-card__cta { margin-top: auto; padding: var(--space-sm) 0 0; color: var(--color-secondary); font-weight: 700; font-size: var(--fs-sm); border-top: 1px solid var(--color-border); width: 100%; text-align: center; transition: color var(--transition); }
.service-card__cta::after { content: " →"; }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }

/* ── RESPONSIVE ───────────────────────────────────────────────────── */
@media (max-width: 1100px) {
  .sp-hero-layout { grid-template-columns: 1fr; }
  .sp-hero-card { display: none; }
  .sp-expert-grid { grid-template-columns: 1fr; }
  .sp-expert-photo { aspect-ratio: 16 / 9; }
  .sp-breakdown-grid { grid-template-columns: 1fr; }
  .sp-proof-grid { grid-template-columns: 1fr; }
  .sp-compare-table { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .sp-bento { grid-template-columns: 1fr 1fr; }
  .sp-proof-photos { grid-template-columns: 1fr 1fr; }
  .sp-proof-photos img { height: 160px; }
  .sp-proof-photos img:first-child { height: 160px; }
}
@media (max-width: 480px) {
  .sp-bento { grid-template-columns: 1fr; }
  .sp-includes-list { grid-template-columns: 1fr; }
  .sp-proof-photos { grid-template-columns: 1fr; }
  .sp-hero-actions { flex-direction: column; }
}

/* ── REVEALS ──────────────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible, .reveal-left.visible, .reveal-right.visible, .reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: .1s; }
.reveal-delay-2 { transition-delay: .2s; }
.reveal-delay-3 { transition-delay: .3s; }
.reveal-delay-4 { transition-delay: .4s; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Windows and doors hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><i data-lucide="door-open"></i> Windows &amp; Doors</span>
            <h1>Windows &amp; Doors in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Superior Home Builders is a licensed general contractor based in Mount Vernon, Oregon, delivering window replacement and door installation throughout Grant County. We've been upgrading Eastern Oregon homes since 2004 — measuring on-site, specifying glass for the local climate, and trimming out every opening inside and out.</p>
            <div class="sp-hero-trust">
              <span class="sp-hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
              <span class="sp-hero-trust-item"><i data-lucide="calendar"></i> Est. 2004</span>
              <span class="sp-hero-trust-item"><i data-lucide="file-text"></i> Free Written Estimate</span>
            </div>
            <div class="sp-hero-actions">
              <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
              <?php if (!empty($phone)): ?>
              <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><i data-lucide="phone"></i> Call Now</a>
              <?php endif; ?>
            </div>
          </div>
          <div class="sp-hero-card">
            <h3>Why homeowners choose us for windows &amp; doors</h3>
            <ul>
              <li><i data-lucide="check-circle"></i> On-site measurement before ordering</li>
              <li><i data-lucide="check-circle"></i> Interior &amp; exterior trim included</li>
              <li><i data-lucide="check-circle"></i> Low-E argon glass for Eastern OR</li>
              <li><i data-lucide="check-circle"></i> Permits handled when required</li>
              <li><i data-lucide="check-circle"></i> 22+ years serving Grant County</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Consultation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Windows &amp; Doors</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. PROBLEM STATEMENT
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Signs you need new windows or doors">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "A window that leaks air in January doesn't just cost you comfort — it costs you money every month the heating bill is due."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><i data-lucide="wind"></i></div>
          <h3>Drafts and air infiltration</h3>
          <p>If you feel cold air at the sash or frame edge in winter, the weatherstripping or seal has failed. No amount of caulking fixes a window that's past its service life — replacement is the only lasting solution.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><i data-lucide="cloud-fog"></i></div>
          <h3>Condensation between panes</h3>
          <p>Fog or moisture between the glass layers means the insulated glass unit seal has failed. The window is now a single-pane unit thermally — not insulating at all — and needs to be replaced, not resealed.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><i data-lucide="move-horizontal"></i></div>
          <h3>Sticking or difficult operation</h3>
          <p>Windows that stick, slam, or won't lock properly signal warped frames or hardware failure. In Eastern Oregon's freeze-thaw climate, wood frames that aren't properly protected expand and contract until they bind permanently.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><i data-lucide="droplets"></i></div>
          <h3>Visible decay or water damage</h3>
          <p>Rotted wood frames, water staining on sills, or paint that won't stay on the interior trim below a window are all signs of a failed seal or failed flashing. The longer this goes unaddressed, the more wall framing is compromised.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,10 C480,60 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT POSITIONING (photo on RIGHT)
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for windows and doors">
    <div class="container">
      <!-- Content left, photo right -->
      <div class="sp-expert-grid">
        <div class="sp-expert-content reveal-left">
          <h2>Why do Eastern Oregon homeowners trust Superior Home Builders for window and door work?</h2>
          <p class="answer-block">We spec windows for Grant County's climate — not Portland's. Eastern Oregon homes face heating-dominated winters, intense summer UV, and significant temperature swing. The right U-factor and SHGC spec makes a real difference in your heating bills. We've been doing this work in Mount Vernon since 2004, and we trim out every opening inside and out.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Eastern Oregon climate expertise</strong>
                <span>We know what U-factor and SHGC values actually matter for Grant County winters — not what a big-box store recommends for the Willamette Valley. Argon fill, low-E coatings, and proper frame material selection are decisions that compound over the life of the window.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Full trim-out included</strong>
                <span>We don't just pop in the window and hand you a caulk gun. Interior and exterior trim, casing, and paint prep are part of every installation. The finish work is what separates a complete job from a rough replacement.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Combination projects welcome</strong>
                <span>Many Mount Vernon homeowners combine a window replacement with a door upgrade or exterior refresh — one mobilization, one permit process, one crew. It's more cost-effective and less disruptive than splitting the work across contractors.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
        <div class="sp-expert-photo reveal-scale">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604139501-amhjvj-Southside_showing_extra_windows.jpg"
               alt="Newly installed windows on a Mount Vernon Oregon home by Superior Home Builders showing exterior trim and framing detail"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">Grant County Since 2004</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What's included in window and door replacement">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a window and door replacement project include in Mount Vernon, OR?</h2>
          <p class="answer-block">Every window and door project is scoped to your home's specific needs. Here is what a complete window replacement or door installation by Superior Home Builders includes from start to final inspection.</p>
          <ul class="sp-includes-list">
            <li><i data-lucide="check"></i> Old window/door removal</li>
            <li><i data-lucide="check"></i> Frame inspection &amp; repair</li>
            <li><i data-lucide="check"></i> New window installation</li>
            <li><i data-lucide="check"></i> Exterior trim &amp; flashing</li>
            <li><i data-lucide="check"></i> Interior trim &amp; casing</li>
            <li><i data-lucide="check"></i> Weatherstripping &amp; air sealing</li>
            <li><i data-lucide="check"></i> Entry door installation</li>
            <li><i data-lucide="check"></i> Door hardware &amp; lockset</li>
            <li><i data-lucide="check"></i> Sliding patio doors</li>
            <li><i data-lucide="check"></i> Interior/exterior paint prep</li>
            <li><i data-lucide="check"></i> Cleanup &amp; debris removal</li>
            <li><i data-lucide="check"></i> Permit application (when required)</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2 style="font-size:var(--fs-h3)">How does the window replacement process work?</h2>
          <p class="answer-block" style="margin-bottom:var(--space-lg)">Four clear steps from first visit to finished install.</p>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <span class="sp-step-num">1</span>
              <div class="sp-step-body">
                <strong>Measure &amp; product selection</strong>
                <span>We visit your home to measure every rough opening and help you choose the right window style, glass type, and frame material for Grant County's climate. You leave the consultation with a line-item written estimate.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">2</span>
              <div class="sp-step-body">
                <strong>Order &amp; scheduling</strong>
                <span>Windows are ordered to your exact rough opening dimensions. Typical lead time is 2–4 weeks depending on custom sizing. We confirm your install date before the order ships.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">3</span>
              <div class="sp-step-body">
                <strong>Installation day</strong>
                <span>Old units come out, frames are inspected and repaired where needed, new units are set and flashed, then trimmed interior and exterior. Most homes are completed in 1–2 days depending on window count.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">4</span>
              <div class="sp-step-body">
                <strong>Weatherizing &amp; final inspection</strong>
                <span>Air sealing is verified, interior and exterior trim is finished, the site is cleaned, and a permit inspection is scheduled if the work required one. You get a complete, finished result — not a rough replacement.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C720,56 1440,0 1440,0 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews for windows and doors in Mount Vernon OR">
    <div class="container">
      <h2>What do Grant County homeowners say about the window and door work?</h2>
      <p class="answer-block">Real feedback from real customers in Eastern Oregon — from single window replacements to full-house projects combined with deck construction.</p>
      <div class="sp-proof-grid">
        <div class="sp-testimonial reveal-up reveal-delay-1">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"New windows throughout the house made a huge difference in heating bills this winter. The deck they built off the back is solid — I've had three contractors look at it since and every one of them commented on the quality of the construction."</p>
          <div class="sp-testimonial-meta">
            <strong>Linda H.</strong>
            <span>Canyon City, OR — Windows &amp; Deck</span>
          </div>
        </div>
        <div class="sp-testimonial reveal-up reveal-delay-2">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Superior Home Builders turned our empty lot into the home we'd been planning for years. They were upfront about costs, stuck to the schedule, and the framing crew was exceptional. Four years later the house is rock-solid — exactly what we wanted."</p>
          <div class="sp-testimonial-meta">
            <strong>Travis &amp; Kelsey B.</strong>
            <span>John Day, OR — Custom Home Build</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604124347-3q5r39-Finished_windows_Southside.jpg"
             alt="Completed window installation on a Mount Vernon Oregon home showing finished exterior trim and multiple windows"
             width="800" height="500" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157610-hamrrh-image_8_.jpg"
             alt="Window detail showing energy-efficient installation with exterior trim work by Superior Home Builders"
             width="400" height="220" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604158766-8vgar0-image_9_.jpg"
             alt="Interior window trim and casing detail from a window replacement project in Grant County Oregon"
             width="400" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C360,40 1080,0 1440,50 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="Superior Home Builders vs typical contractor for windows">
    <div class="container">
      <h2>Why does the contractor you hire for windows and doors matter?</h2>
      <p class="answer-block">Not all window installations are equal. Here's what separates a complete, lasting job from a window swap that creates problems down the line.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad">
          <h3>Typical contractor</h3>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Windows ordered without measuring the rough opening precisely — shimming fills the gap</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Interior trim is extra or not included — you finish it yourself</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Weatherstripping applied over existing decay rather than repairing the frame</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Installation done in a day regardless of window count — rushed finish work</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Generic glass spec with no consideration for Eastern OR's heating-dominated climate</span>
          </div>
        </div>
        <div class="sp-compare-col sp-compare-col--good">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Rough openings measured on-site before the order is placed — every window fits correctly</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Full interior and exterior trim-out included in every installation</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Frame and sill inspected and repaired before the new window is set</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Timeline based on actual window count and complexity — work is done right, not fast</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Low-E argon glass specified for Eastern Oregon's cold winters and high heating load</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,56 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Window and door FAQ for Mount Vernon OR">
    <div class="container">
      <h2>Frequently asked questions about window and door replacement in Mount Vernon, OR</h2>
      <p class="answer-block">Answers to the questions we hear most often from Grant County homeowners considering a window or door project.</p>
      <div class="sp-faq-list">

        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-wd-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <i data-lucide="plus"></i>
          </button>
          <div class="sp-faq-answer" id="faq-wd-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C720,0 1440,56 1440,56 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       8. FINAL CTA + RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free window replacement estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to replace your windows or doors near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been installing windows and doors in Grant County homes since 2004. We measure on-site, spec the right glass for Eastern Oregon's climate, and trim out every opening inside and out. Get a written estimate — no obligation.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><i data-lucide="phone"></i> Call Us Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="sp-related" aria-label="Other construction services in Mount Vernon OR">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604127216-zp2jli-20240723_114655.jpg"
                 alt="Custom deck construction in Mount Vernon Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="tree-pine"></i></div>
            <h3>Decks</h3>
            <ul>
              <li>Composite &amp; pressure-treated</li>
              <li>Railings, stairs &amp; pergolas</li>
              <li>Built for Eastern OR winters</li>
            </ul>
            <a href="/services/decks/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
                 alt="General remodeling project in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="wrench"></i></div>
            <h3>General Remodeling</h3>
            <ul>
              <li>Single rooms to whole homes</li>
              <li>Additions &amp; conversions</li>
              <li>Interior finish work</li>
            </ul>
            <a href="/services/general-remodeling/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg"
                 alt="Custom home construction in Mount Vernon Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="home"></i></div>
            <h3>Custom Home Building</h3>
            <ul>
              <li>Design-to-completion builds</li>
              <li>Site prep &amp; foundation</li>
              <li>20+ years local expertise</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
          </div>
        </article>
      </div>
    </div>
  </section>

<script>
document.querySelectorAll('.sp-faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.sp-faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.sp-faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.sp-faq-question').setAttribute('aria-expanded', 'false');
    });
    if (!isOpen) {
      item.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
    }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
