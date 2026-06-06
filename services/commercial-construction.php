<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Commercial Construction in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Commercial construction services in Mount Vernon, OR. Shops, offices, warehouses, and tenant build-outs for Grant County businesses. Licensed contractor since 2004. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/commercial-construction';
$currentPage      = 'services';
$heroImage        = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604101037-ig7pay-20220727_101642.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q' => 'What commercial construction services are available in Mount Vernon, OR?',
   'a' => 'Superior Home Builders handles ground-up commercial construction — shops, warehouses, agricultural structures, and small office buildings — as well as additions and tenant build-outs for existing commercial spaces in Grant County. We serve businesses throughout the region including John Day and Canyon City. One contractor manages the full commercial build process.'],
  ['q' => 'How is commercial construction permitting different from residential in Oregon?',
   'a' => 'Commercial projects require a commercial building permit, which involves plan review by the Oregon Building Codes Division in addition to local building department approval. Commercial electrical and plumbing inspections follow different code paths than residential. Larger commercial buildings may require engineered plans stamped by a licensed Oregon engineer. We have experience navigating both Oregon commercial code and Grant County\'s specific requirements.'],
  ['q' => 'How much does commercial construction cost in Grant County?',
   'a' => 'Commercial builds vary widely by type. A metal post-frame shop building runs $40–$80 per square foot. A stick-framed commercial building with full interior finish runs $120–$220 per square foot. Tenant build-outs run $40–$120 per square foot depending on plumbing, HVAC, and electrical scope. Superior Home Builders provides written estimates after reviewing your specific project requirements on-site.'],
  ['q' => 'How do you minimize disruption to an operating business during construction?',
   'a' => 'For additions and build-outs on occupied properties, we work in a sequence that preserves access to the operating portion of the business. We schedule demolition and noisy phases during off-hours where agreed. Our commercial client Greg O. in Mount Vernon specifically noted that we never held up his operation during a shop addition — scheduling around his business hours was a deliberate part of our plan from day one.'],
  ['q' => 'Can Superior Home Builders handle agricultural construction in Eastern Oregon?',
   'a' => 'Yes — agricultural structures including barns, equipment storage buildings, hay storage, and agricultural processing facilities are within our scope. Eastern Oregon\'s agricultural community is well represented in our project history. These projects often involve engineered post-frame buildings, but the same site work, foundation, and trade coordination principles apply. We\'ve built for Grant County agricultural operations since 2004.'],
  ['q' => 'What is a tenant build-out and does Superior Home Builders handle it?',
   'a' => 'A tenant build-out is the interior construction work that transforms a raw commercial shell into a functional business space — partition walls, lighting, plumbing fixtures, flooring, HVAC distribution, and finishes. We handle the complete tenant build-out scope for commercial tenants throughout Grant County, coordinating with building owners and commercial landlords as needed to meet lease requirements and schedule.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                   'url' => $siteUrl . '/'],
  ['name' => 'Services',               'url' => $siteUrl . '/services'],
  ['name' => 'Commercial Construction','url' => $siteUrl . '/services/commercial-construction'],
]);
$serviceSchema = [
  '@context'  => 'https://schema.org',
  '@type'     => 'Service',
  '@id'       => $siteUrl . '/services/commercial-construction#service',
  'name'      => 'Commercial Construction',
  'url'       => $siteUrl . '/services/commercial-construction',
  'provider'  => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Commercial construction services in Mount Vernon, OR for Grant County businesses — ground-up commercial builds, shop and warehouse additions, agricultural structures, and tenant build-outs. Licensed Oregon general contractor with commercial permit experience since 2004.',
];
$faqSchema   = generateFAQSchema($faqs);
$schemaGraph = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════════
   COMMERCIAL CONSTRUCTION — Superior Home Builders
   Premium page styles | var() tokens only | No hardcoded hex values
   Techniques: layered hero + noise texture, bento problem grid, asymmetric
   expert positioning (photo left), scroll-line process timeline, proof
   mosaic with industrial photos, dark comparison grid, FAQ accordion,
   multi-direction reveals, varied SVG wave dividers, accent badge
   ════════════════════════════════════════════════════════════════════════ */

/* ── HERO ─────────────────────────────────────────────────────────────── */
.sp-hero {
  position: relative;
  min-height: 68vh;
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
    115deg,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-secondary-rgb), 0.82) 50%,
    rgba(var(--color-primary-rgb), 0.58) 100%
  );
  z-index: 1;
}
.sp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
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
  grid-template-columns: 1fr 360px;
  gap: var(--space-3xl);
  align-items: center;
}
.sp-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.14);
  border: 1px solid rgba(var(--color-accent-rgb), 0.32);
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
  margin-bottom: var(--space-lg);
  text-wrap: balance;
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
  font-size: 1.25rem;
  margin-bottom: var(--space-md);
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
  color: rgba(255, 255, 255, 0.80);
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

/* ── DIVIDERS ──────────────────────────────────────────────────────────── */
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

/* ── PROBLEM SECTION ───────────────────────────────────────────────────── */
.sp-problem {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
}
.sp-problem-pull {
  font-family: var(--font-heading);
  font-size: clamp(1.45rem, 2.6vw, 2.25rem);
  font-weight: 700;
  font-style: italic;
  color: var(--color-primary);
  border-left: 4px solid var(--color-accent);
  padding-left: var(--space-xl);
  max-width: 70ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.45;
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
  line-height: 1.65;
}

/* ── EXPERT POSITIONING (photo LEFT) ─────────────────────────────────── */
.sp-expert {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
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
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%);
}
.sp-expert-photo-badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 0.9rem;
  padding: var(--space-sm) var(--space-md);
  border-radius: 8px;
  z-index: 2;
  line-height: 1.35;
}
.sp-expert-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
  text-wrap: balance;
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
  line-height: 1.6;
}

/* ── SERVICE BREAKDOWN ─────────────────────────────────────────────────── */
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
  margin-bottom: var(--space-md);
  text-wrap: balance;
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
  line-height: 1.65;
}

/* ── PROOF SECTION ─────────────────────────────────────────────────────── */
.sp-proof {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.sp-proof h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
  text-align: center;
  text-wrap: balance;
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

/* ── COMPARISON SECTION ────────────────────────────────────────────────── */
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
  margin-bottom: var(--space-md);
  text-wrap: balance;
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

/* ── FAQ ───────────────────────────────────────────────────────────────── */
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
  margin-bottom: var(--space-md);
  text-wrap: balance;
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

/* ── FINAL CTA ─────────────────────────────────────────────────────────── */
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
  margin-bottom: var(--space-md);
  text-wrap: balance;
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

/* ── RELATED SERVICES ──────────────────────────────────────────────────── */
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
  margin-bottom: var(--space-3xl);
  text-wrap: balance;
}

/* ── SERVICE CARDS ─────────────────────────────────────────────────────── */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-md);
}
.service-card-with-image {
  border-radius: var(--radius-md, 12px);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition), box-shadow var(--transition);
}
.service-card-with-image:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}
.service-card__image {
  position: relative;
  aspect-ratio: 5 / 3;
  overflow: hidden;
}
.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.service-card__body {
  padding: var(--space-lg) var(--space-md) var(--space-md);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-sm);
  position: relative;
}
.service-card__icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: #fff;
  box-shadow: var(--shadow-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -44px;
  margin-bottom: var(--space-xs);
  color: var(--color-accent);
}
.service-card__icon i,
.service-card__icon svg {
  width: 26px;
  height: 26px;
}
.service-card-with-image h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  margin: 0;
  font-size: 1.3rem;
  line-height: 1.2;
}
.service-card__desc {
  color: var(--color-text);
  margin: 0;
  font-size: 0.95rem;
  line-height: 1.55;
}
.service-card-with-image ul {
  list-style: none;
  padding: 0;
  margin: var(--space-xs) 0 0;
  width: 100%;
  text-align: left;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
  border-top: 1px solid rgba(0, 0, 0, 0.06);
  padding-top: var(--space-md);
}
.service-card-with-image ul li {
  font-size: 0.9rem;
  color: var(--color-text);
  padding-left: 1.25rem;
  position: relative;
}
.service-card-with-image ul li::before {
  content: "•";
  color: var(--color-accent);
  font-weight: 700;
  position: absolute;
  left: 0.25rem;
  top: 0;
}
.service-card__cta {
  margin-top: auto;
  padding-top: var(--space-sm);
  color: var(--color-accent);
  font-weight: 600;
  text-decoration: none;
  font-size: 0.95rem;
  border-top: 1px solid rgba(0, 0, 0, 0.06);
  width: 100%;
  text-align: center;
  padding: var(--space-sm) 0 0;
  transition: color var(--transition);
}
.service-card__cta::after {
  content: " →";
  display: inline-block;
  transition: transform var(--transition);
}
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }

/* ── RESPONSIVE ────────────────────────────────────────────────────────── */
@media (max-width: 1100px) {
  .sp-hero-layout { grid-template-columns: 1fr; }
  .sp-hero-card { display: none; }
  .sp-expert-grid { grid-template-columns: 1fr; }
  .sp-expert-photo { aspect-ratio: 16 / 9; }
  .sp-breakdown-grid { grid-template-columns: 1fr; }
  .sp-proof-grid { grid-template-columns: 1fr; }
  .sp-compare-table { grid-template-columns: 1fr; }
  .services-grid { grid-template-columns: 1fr 1fr; }
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
  .services-grid { grid-template-columns: 1fr; }
}

/* ── REVEALS ───────────────────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible,
.reveal-left.visible,
.reveal-right.visible,
.reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: .1s; }
.reveal-delay-2 { transition-delay: .2s; }
.reveal-delay-3 { transition-delay: .3s; }
.reveal-delay-4 { transition-delay: .4s; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Commercial construction hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><i data-lucide="building-2"></i> Commercial Construction</span>
            <h1>Commercial Construction in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Superior Home Builders delivers commercial construction for Grant County businesses — from shop buildings and warehouse additions to office build-outs and tenant improvements. As a licensed Oregon general contractor based in Mount Vernon, we manage the full commercial build process including commercial permits, inspections, and trade coordination.</p>
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
            <h3>What Grant County businesses get</h3>
            <ul>
              <li><i data-lucide="check-circle"></i> Commercial permits applied and managed</li>
              <li><i data-lucide="check-circle"></i> Scheduling around your business hours</li>
              <li><i data-lucide="check-circle"></i> Commercial code inspection experience</li>
              <li><i data-lucide="check-circle"></i> Written scope before work begins</li>
              <li><i data-lucide="check-circle"></i> 20+ years of local builds</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Discuss Your Project</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Commercial Construction</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider: wave slides left -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,36 C360,0 1080,56 1440,18 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. PROBLEM STATEMENT
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Commercial construction needs in Grant County">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Grant County businesses that build their own space stop paying rent into someone else's equity — and they get a facility built for how they actually work."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><i data-lucide="expand"></i></div>
          <h3>Business has outgrown its current space</h3>
          <p>Adding a shop bay, warehouse addition, or separate structure is often faster and cheaper than relocating. We build additions that tie into existing structures properly — no patchwork.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><i data-lucide="tractor"></i></div>
          <h3>Agricultural or industrial facilities need updating</h3>
          <p>Post-frame buildings, equipment storage, and processing facilities in Eastern Oregon age and eventually need structural reinforcement, re-roofing, or full replacement before they become a liability.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><i data-lucide="landmark"></i></div>
          <h3>New business needs a permanent location</h3>
          <p>A professionally constructed commercial building in Grant County is a long-term asset. Rent payments don't build equity. A well-built commercial structure does — and gives you control over your space.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><i data-lucide="layout-panel-left"></i></div>
          <h3>Tenant improvement for new business space</h3>
          <p>Raw commercial shells require substantial build-out before they're functional. Superior Home Builders manages the complete tenant improvement scope so business owners can focus on opening, not managing contractors.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: deep S-curve -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,50 C480,0 960,56 1440,10 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT POSITIONING
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why choose Superior Home Builders for commercial construction">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604272736-wpmbnz-468453996_10161079313307734_5962081137845027174_n.jpg"
               alt="Commercial construction project by Superior Home Builders for a Grant County business"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">Commercial Builds<br>Grant County</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Grant County businesses choose Superior Home Builders for commercial construction?</h2>
          <p class="answer-block">We've been building for Eastern Oregon businesses since 2004 — shops, additions, tenant improvements, and agricultural structures throughout Grant County. Local business owners choose us because we understand commercial permit requirements, work around operating schedules, and manage the entire project scope under one contract so they can focus on running their business.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Commercial permit and code experience</strong>
                <span>Commercial construction in Oregon requires different code paths than residential. We've navigated commercial plan review, ODEQ requirements for commercial plumbing, and commercial electrical inspections in Grant County.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Business-hours aware scheduling</strong>
                <span>We understand that disrupting an operating business has real costs. We schedule work phases around your operations, not ours. Greg O. in Mount Vernon noted that we never held up his operation during a shop addition.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Full scope from site work to finish</strong>
                <span>We don't just frame commercial shells and leave. We manage the complete project including site work coordination, utilities, and all interior finish trades through a single contract with one point of contact.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: opposing sweep -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,6 C480,60 960,0 1440,46 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What's included in commercial construction">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a commercial construction project with Superior Home Builders include?</h2>
          <p class="answer-block">Every commercial project is scoped in writing before work begins. Here's what a full-scope commercial build in Mount Vernon, OR covers — from site assessment through certificate of occupancy.</p>
          <ul class="sp-includes-list">
            <li><i data-lucide="check"></i> Site assessment &amp; layout</li>
            <li><i data-lucide="check"></i> Commercial permit application</li>
            <li><i data-lucide="check"></i> Site clearing &amp; grading</li>
            <li><i data-lucide="check"></i> Foundation (slab, piers, grade beam)</li>
            <li><i data-lucide="check"></i> Framing (wood or metal)</li>
            <li><i data-lucide="check"></i> Exterior envelope (roofing, siding, windows)</li>
            <li><i data-lucide="check"></i> Electrical rough-in (commercial)</li>
            <li><i data-lucide="check"></i> Plumbing rough-in (commercial)</li>
            <li><i data-lucide="check"></i> HVAC coordination</li>
            <li><i data-lucide="check"></i> Insulation &amp; fire-rated assemblies</li>
            <li><i data-lucide="check"></i> Interior finish (drywall, flooring, ceiling)</li>
            <li><i data-lucide="check"></i> Final inspections &amp; certificate of occupancy</li>
          </ul>
          <a href="/contact/" class="btn btn-primary">Request a Commercial Estimate</a>
        </div>
        <div class="reveal-right">
          <div style="margin-bottom:var(--space-lg)">
            <h3 style="font-family:var(--font-heading);font-size:1.4rem;color:var(--color-primary);margin-bottom:var(--space-md)">How does the commercial build process work?</h3>
          </div>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <div class="sp-step-num">1</div>
              <div class="sp-step-body">
                <strong>Site visit &amp; commercial assessment</strong>
                <span>We evaluate your site, review your business requirements and budget, and provide a written estimate covering the full commercial scope — before you commit to anything.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Commercial permit &amp; design coordination</strong>
                <span>Commercial plans are prepared by a licensed designer where required, permit is submitted, and material orders are placed with lead times confirmed before scheduling begins.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Site work, foundation &amp; framing</strong>
                <span>Site is prepared, foundation poured, and structure framed. Commercial framing follows different sequences than residential with fire-rated assemblies and commercial-grade structural requirements.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Mechanical, finish &amp; certificate of occupancy</strong>
                <span>Electrical, plumbing, and HVAC systems installed. Interior finishes applied. All commercial inspections completed. Certificate of occupancy obtained so your business can open on schedule.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: gentle right roll -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,16 C720,60 720,0 1440,36 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. PROOF / REVIEWS
  ═══════════════════════════════════════ -->
  <section class="sp-proof" aria-label="Customer reviews and commercial project photos">
    <div class="container">
      <h2>What do Grant County businesses say about working with Superior Home Builders?</h2>
      <p class="answer-block">Real commercial projects in Eastern Oregon — from shop additions in Mount Vernon to custom home builds in John Day. Every review reflects an actual Superior Home Builders project completed in Grant County.</p>
      <div class="sp-proof-grid reveal-up">
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Used them to build out an addition on our shop. They worked around our business hours, never held us up, and delivered exactly what was drawn. Will use them again."</p>
          <div class="sp-testimonial-meta">
            <strong>Greg O.</strong>
            <span>Mount Vernon, OR — Commercial Shop Addition</span>
          </div>
        </div>
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Superior Home Builders turned our empty lot into the home we'd been planning for years. They were upfront about costs, stuck to the schedule, and the framing crew was exceptional. Four years later the house is rock-solid."</p>
          <div class="sp-testimonial-meta">
            <strong>Travis &amp; Kelsey B.</strong>
            <span>John Day, OR — Custom Home Build</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604101037-ig7pay-20220727_101642.jpg"
             alt="Commercial construction site in Mount Vernon Oregon — Superior Home Builders crew at work" width="600" height="440" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604273137-ksvcbn-518240531_10161958113367734_8953895085965006897_n.jpg"
             alt="Commercial building work by Superior Home Builders serving Grant County Oregon" width="300" height="220" loading="lazy">
        <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg"
             alt="Structural framing work by Superior Home Builders on a commercial project in Grant County" width="300" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <!-- SVG Divider: asymmetric swell -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,32 C360,56 1080,0 1440,24 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. COMPARISON
  ═══════════════════════════════════════ -->
  <section class="sp-compare" aria-label="How Superior Home Builders compares for commercial construction">
    <div class="container">
      <h2 class="reveal-up">How does Superior Home Builders approach commercial construction differently?</h2>
      <p class="answer-block reveal-up reveal-delay-1">The gap between a smooth commercial build and a costly, delayed one usually comes down to licensing, process, and respect for the operating business. Here's the difference in Mount Vernon and Grant County.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Residential contractor doing commercial work</h3>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>No commercial licensing — risk to the building owner</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Commercial permits not pulled or mishandled</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Work disrupts business operations without advance notice</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>No experience with commercial code inspections</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Verbal scope — billing surprises at project end</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Licensed Oregon GC with commercial project experience</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>All commercial permits applied for and managed</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Scheduling coordinated around your business operations</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Commercial code inspections navigated from experience</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Written scope and estimate before any work begins</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: wide flat reverse -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,48 C480,10 960,56 1440,8 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Commercial construction FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about commercial construction in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Direct answers to the questions Grant County business owners ask before starting a commercial build or tenant improvement project near me in Mount Vernon.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up" id="faq-<?php echo $i; ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-ans-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <i data-lucide="plus-circle"></i>
          </button>
          <div class="sp-faq-answer" id="faq-ans-<?php echo $i; ?>" role="region">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       8. FINAL CTA
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free commercial construction estimate">
    <div class="container reveal-up">
      <h2>Ready to build or expand your business facility in Grant County?</h2>
      <p>Get a free, written estimate for your commercial construction project in Mount Vernon, OR. We visit your site, review your requirements and budget, and give you real numbers — no obligation, no pressure, no guessing.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><i data-lucide="phone"></i> Call Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-related" aria-label="Other services you may need">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">

        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg"
                 alt="Framing services by Superior Home Builders in Grant County Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="hammer"></i></div>
            <h3>Framing</h3>
            <p class="service-card__desc">Residential and commercial framing for new builds, additions, and renovations throughout Eastern Oregon.</p>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304191-9h3673-466678023_10160894523422734_2342757114398857707_n.jpg"
                 alt="Custom home building by Superior Home Builders in Mount Vernon OR"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="home"></i></div>
            <h3>Custom Home Building</h3>
            <p class="service-card__desc">Design-to-completion custom home construction throughout Grant County since 2004.</p>
            <ul>
              <li>Design-to-completion builds</li>
              <li>Site prep &amp; foundation</li>
              <li>20+ years local expertise</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
          </div>
        </article>

        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
                 alt="General remodeling by Superior Home Builders in Eastern Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="wrench"></i></div>
            <h3>General Remodeling</h3>
            <p class="service-card__desc">Home remodeling from single room updates to whole-house renovations across Grant County.</p>
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
      i.querySelector('.sp-faq-question').setAttribute('aria-expanded','false');
    });
    if (!isOpen) { item.classList.add('open'); btn.setAttribute('aria-expanded','true'); }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
