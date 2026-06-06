<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Deck Building in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Custom deck construction in Mount Vernon, OR. Composite and pressure-treated decks built for Eastern Oregon snow loads and freeze-thaw conditions. Licensed contractor serving Grant County since 2004. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/decks';
$currentPage      = 'services';
$heroImage        = 'https://i.imgur.com/hZ7oAdF.jpeg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q' => 'How much does a deck cost in Mount Vernon, OR?',
   'a' => 'A pressure-treated lumber deck in the Mount Vernon area typically runs $12,000–$25,000 depending on size and features. Composite decking adds to that range at $20,000–$45,000. Multi-level decks with pergolas or built-in features run $35,000–$60,000 or more. Every project gets a written estimate after a site visit — deck costs vary too much by size and site conditions to quote without seeing the property.'],
  ['q' => 'Composite vs pressure-treated — which is better for Eastern Oregon?',
   'a' => 'Eastern Oregon\'s climate involves significant UV exposure, wide temperature swings, and meaningful snow loads — composite holds up better long-term with no annual staining or sealing required. Pressure-treated costs less upfront but requires ongoing maintenance to prevent checking and graying. We walk through the trade-offs based on your budget and how hands-off you want the maintenance to be.'],
  ['q' => 'How long does deck construction take in Grant County?',
   'a' => 'Most residential decks in the Mount Vernon area run 2–4 weeks from permit approval to final inspection. Larger decks with multi-level structures, pergolas, or covered sections run 4–6 weeks. Permit application typically adds 1–2 weeks to the start date, so plan for 3–6 weeks total from contract signing to finished deck.'],
  ['q' => 'Do I need a permit to build a deck in Oregon?',
   'a' => 'Yes. Any attached deck more than 30 inches above grade requires a building permit in Oregon. Superior Home Builders handles the permit application, prepares structural drawings if required by Grant County, and schedules all required inspections. You do not have to deal with the building department — we manage the entire process.'],
  ['q' => 'How do you handle snow loads for deck design in Grant County?',
   'a' => 'Grant County falls in a moderate-to-high snow load zone per Oregon Structural Specialty Code. Our deck designs account for the local ground snow load, which affects beam and joist sizing, post spacing, and ledger attachment design. An undersized deck framed for Willamette Valley conditions will not perform correctly in Eastern Oregon — we design to the local load.'],
  ['q' => 'Can you build a deck with a pergola or covered roof section?',
   'a' => 'Yes. We build deck structures with pergolas, louvered covers, solid patio covers, and outdoor kitchen areas as part of the same project. A covered section requires its own structural design and is included in the permit application. We handle everything as a complete scope rather than handing you off to a different contractor for the covered portion.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',     'url' => $siteUrl . '/'],
  ['name' => 'Services', 'url' => $siteUrl . '/services'],
  ['name' => 'Decks',    'url' => $siteUrl . '/services/decks'],
]);
$serviceSchema = [
  '@context'   => 'https://schema.org',
  '@type'      => 'Service',
  '@id'        => $siteUrl . '/services/decks#service',
  'name'       => 'Decks',
  'url'        => $siteUrl . '/services/decks',
  'provider'   => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed' => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Custom deck construction in Mount Vernon, OR. Composite and pressure-treated decks designed for Grant County\'s snow loads, freeze-thaw conditions, and UV exposure. Pergolas, railings, and covered structures included. Serving Eastern Oregon since 2004.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   DECKS — Superior Home Builders
   Premium page styles | var() tokens only | No hardcoded values
   Techniques: layered hero + noise, bento problem section, asymmetric
   expert positioning (photo LEFT), scroll process timeline, proof
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
  background-position: center 35%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    115deg,
    rgba(var(--color-primary-rgb), 0.91) 0%,
    rgba(var(--color-secondary-rgb), 0.75) 52%,
    rgba(var(--color-primary-rgb), 0.50) 100%
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

/* ── EXPERT POSITIONING (photo LEFT for decks page) ───────────────── */
.sp-expert {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
/* Photo left, content right */
.sp-expert-grid {
  display: grid;
  grid-template-columns: 420px 1fr;
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
.sp-compare-col--bad {
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
  <section class="sp-hero" aria-label="Deck building hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><i data-lucide="tree-pine"></i> Deck Construction</span>
            <h1>Deck Building in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Mount Vernon's Willamette Valley climate demands more than a standard deck—it demands local expertise. We build custom decks designed specifically for our region's moisture patterns, drainage challenges, and building codes to ensure longevity through Oregon's wet seasons. Every project starts with a detailed site consultation and transparent pricing tailored to your home's unique conditions, with sustainable material options and our warranty backing every build. That's the superior-home-builders difference.</p>
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
            <h3>Why homeowners choose us for decks</h3>
            <ul>
              <li><i data-lucide="check-circle"></i> Designed for Eastern OR snow loads</li>
              <li><i data-lucide="check-circle"></i> Permit pulled and inspections handled</li>
              <li><i data-lucide="check-circle"></i> Composite &amp; pressure-treated options</li>
              <li><i data-lucide="check-circle"></i> Pergolas and covered structures</li>
              <li><i data-lucide="check-circle"></i> 22+ years in Grant County</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Consultation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Decks</span>
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
  <section class="sp-problem" aria-label="Signs you need a new deck or deck repair">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Grant County summers give you some of the best outdoor weather in Oregon — most Eastern Oregon homes aren't set up to use it."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><i data-lucide="alert-triangle"></i></div>
          <h3>Soft or rotted boards</h3>
          <p>Soft spots underfoot are a warning sign. What feels like a surface problem often means the decking boards above have failed and moisture has reached the joists below. Surface replacement without inspecting the framing misses the actual damage.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><i data-lucide="move"></i></div>
          <h3>Unstable railings</h3>
          <p>Railing movement is a structural safety failure, not a cosmetic issue. Post bases on older pressure-treated decks rot from the bottom up — the post looks sound until you push it. Failed railings are a liability and a code violation.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><i data-lucide="sun"></i></div>
          <h3>No outdoor living space</h3>
          <p>Grant County summers are ideal for outdoor use — warm days, low humidity, spectacular views in most of the county. Most Eastern Oregon homes underutilize the backyard because the outdoor structure was never built. That's the fix.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><i data-lucide="anchor"></i></div>
          <h3>Foundation concerns</h3>
          <p>Ledger pull-away from the house framing is the most common structural failure on older decks. If the ledger attachment is failing, the entire deck load is at risk. This is not a repair — it is a rebuild from the ledger out.</p>
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
       3. EXPERT POSITIONING (photo on LEFT)
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for deck construction">
    <div class="container">
      <!-- Photo left, content right -->
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="https://i.imgur.com/Qaz7coi.jpeg"
               alt="Deck framing and construction detail on a Grant County Oregon home built by Superior Home Builders"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">Built for Eastern OR</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Grant County homeowners choose Superior Home Builders for deck construction?</h2>
          <p class="answer-block">We design decks for where they actually live — not for the Willamette Valley. Grant County's freeze-thaw cycle, moderate-to-high snow loads, and UV intensity all affect how a deck is engineered, what materials hold up, and how fasteners need to be specified. We've been building in Eastern Oregon since 2004, and we know what Grant County requires for deck permits.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Built for Eastern Oregon climate</strong>
                <span>We spec materials and fasteners for Grant County's conditions — freeze-thaw cycles, UV exposure, and snow loads that don't apply in Portland. The right material choice at the start determines whether you're staining every year or leaving it alone for a decade.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Structural permit knowledge</strong>
                <span>We know what Grant County requires for deck permits and have experience working with the building department to get projects through efficiently. Ledger flashing, post embedment depth, and railing load specs are not afterthoughts — they're in the design from day one.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Full outdoor living scope</strong>
                <span>Pergolas, stairs, built-in planters, outdoor lighting rough-in — we integrate all of it on one project. One permit, one crew, one schedule. You don't coordinate between a deck builder and a separate pergola contractor.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
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
  <section class="sp-breakdown" aria-label="What's included in a deck build in Mount Vernon OR">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What's included in a deck construction project in Mount Vernon, OR?</h2>
          <p class="answer-block">From footings to final inspection, here is the complete scope of a deck build by Superior Home Builders in Grant County. Every item listed is handled by our crew — no hand-offs.</p>
          <ul class="sp-includes-list">
            <li><i data-lucide="check"></i> Site assessment &amp; layout</li>
            <li><i data-lucide="check"></i> Permit application &amp; drawings</li>
            <li><i data-lucide="check"></i> Footing excavation &amp; concrete</li>
            <li><i data-lucide="check"></i> Post installation &amp; anchoring</li>
            <li><i data-lucide="check"></i> Beam &amp; joist framing</li>
            <li><i data-lucide="check"></i> Composite or lumber decking</li>
            <li><i data-lucide="check"></i> Railing system (post, rail, balusters)</li>
            <li><i data-lucide="check"></i> Stair construction</li>
            <li><i data-lucide="check"></i> Ledger attachment &amp; flashing</li>
            <li><i data-lucide="check"></i> Fascia &amp; trim boards</li>
            <li><i data-lucide="check"></i> Permit inspection coordination</li>
            <li><i data-lucide="check"></i> Site cleanup &amp; debris removal</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2 style="font-size:var(--fs-h3)">How does the deck construction process work?</h2>
          <p class="answer-block" style="margin-bottom:var(--space-lg)">Four clear phases from site visit to final inspection walkthrough.</p>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <span class="sp-step-num">1</span>
              <div class="sp-step-body">
                <strong>Site assessment &amp; design</strong>
                <span>We visit your property to assess slope, drainage, access, and ledger attachment options. We discuss size, decking material, railing style, and additional features. You leave with a written estimate and a clear picture of what you're getting.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">2</span>
              <div class="sp-step-body">
                <strong>Permit &amp; material order</strong>
                <span>Structural drawings are prepared if required by Grant County. The permit application is submitted, materials are ordered for delivery, and your construction start date is confirmed once the permit is approved.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">3</span>
              <div class="sp-step-body">
                <strong>Foundation &amp; framing</strong>
                <span>Footings are excavated and poured, posts set and anchored, beams and joists framed to engineering specifications. This is the phase that determines how the deck performs in 10, 20, and 30 years.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">4</span>
              <div class="sp-step-body">
                <strong>Decking, railing &amp; finish</strong>
                <span>Deck boards are set and fastened, the railing system is installed, stairs are built, and trim boards are applied. Permit inspection is scheduled and we walk the completed deck with you before calling the project done.</span>
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
  <section class="sp-proof" aria-label="Customer reviews for deck construction in Mount Vernon OR">
    <div class="container">
      <h2>What do Eastern Oregon homeowners say about decks built by Superior Home Builders?</h2>
      <p class="answer-block">Real feedback from Grant County and surrounding area clients — including a homeowner who had three other contractors examine the finished work.</p>
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
        <img src="https://i.imgur.com/SICcEOp.jpeg"
             alt="Completed custom deck construction in Mount Vernon Oregon by Superior Home Builders showing composite decking and railing"
             width="800" height="500" loading="lazy">
        <img src="https://i.imgur.com/jSCbbkZ.jpeg"
             alt="Deck framing detail showing joist and beam construction by Superior Home Builders in Grant County Oregon"
             width="400" height="220" loading="lazy">
        <img src="https://i.imgur.com/QjTFS3c.jpeg"
             alt="Finished deck railing and stair construction by Superior Home Builders in Eastern Oregon"
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
  <section class="sp-compare" aria-label="Superior Home Builders vs typical contractor for deck construction">
    <div class="container">
      <h2>Why does engineering and local knowledge matter for Eastern Oregon deck projects?</h2>
      <p class="answer-block">Deck construction in Grant County is not the same as building a deck in the Willamette Valley. Here is what separates a deck built for this climate from one that won't last.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad">
          <h3>Typical contractor</h3>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Post holes dug to minimum depth regardless of frost line — heaving in Eastern OR winters</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Generic railing design that fails load-testing during inspection</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Ledger attached without proper flashing — moisture infiltration into the house framing</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>No permit — inspection risk falls on the homeowner at resale</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="x-circle" style="color:rgba(255,80,80,0.75);width:20px;height:20px;flex-shrink:0"></i>
            <span>Decking material chosen for price, not for Eastern OR UV and moisture conditions</span>
          </div>
        </div>
        <div class="sp-compare-col sp-compare-col--good">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Post holes excavated to Grant County frost depth (24+ inches) — no heave movement</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Railing system engineered to IRC code load requirements — passes inspection first visit</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Ledger flashing installed per IRC waterproofing specification — house framing protected</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Permit pulled and all inspections scheduled — clean permit record at resale</span>
          </div>
          <div class="sp-compare-row">
            <i data-lucide="check-circle" style="color:var(--color-accent);width:20px;height:20px;flex-shrink:0"></i>
            <span>Material selected for Grant County climate conditions, not just upfront cost</span>
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
  <section class="sp-faq" aria-label="Deck building FAQ for Mount Vernon OR">
    <div class="container">
      <h2>Frequently asked questions about deck construction near Mount Vernon, OR</h2>
      <p class="answer-block">Answers to the questions we hear most often from Grant County homeowners planning a new deck or deck replacement.</p>
      <div class="sp-faq-list">

        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-dk-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <i data-lucide="plus"></i>
          </button>
          <div class="sp-faq-answer" id="faq-dk-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get a free deck estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to build a deck near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been constructing outdoor living spaces in Grant County since 2004. We design for Eastern Oregon's climate, pull every permit, and build structures that hold up. Get a written estimate — no obligation, no pressure.</p>
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
            <img src="https://i.imgur.com/P5mpaVS.jpeg"
                 alt="Residential framing construction in Mount Vernon Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="hammer"></i></div>
            <h3>Framing</h3>
            <ul>
              <li>Residential &amp; commercial</li>
              <li>New builds &amp; additions</li>
              <li>Engineered lumber &amp; steel</li>
            </ul>
            <a href="/services/framing/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://i.imgur.com/WX1olC4.jpeg"
                 alt="Window installation in Mount Vernon Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="door-open"></i></div>
            <h3>Windows and Doors</h3>
            <ul>
              <li>Energy-efficient replacements</li>
              <li>Vinyl, wood &amp; fiberglass</li>
              <li>Entry doors &amp; sliders</li>
            </ul>
            <a href="/services/windows-and-doors/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
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
