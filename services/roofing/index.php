<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Roofing in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Metal roofing and mobile home roof-overs in Mount Vernon, OR. Engineered for Eastern Oregon snow loads. Licensed CCB# 147123 serving Grant County since 2001. Free written estimates.';
$canonicalUrl     = $siteUrl . '/services/roofing/';
$currentPage      = 'services';
$heroImageUrl     = 'https://images.unsplash.com/photo-1632759145351-1d592919f522?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'What type of roofing does Superior Home Builders install in Mount Vernon, OR?',
   'a' => 'We specialize in metal roofing — standing seam and exposed-fastener metal panels — and roof-overs for mobile homes throughout Grant County. Metal roofing is the best long-term investment for Eastern Oregon properties because it handles the snow loads that would collapse older asphalt shingles, sheds ice without ice-dam damage, and lasts 40–70 years with virtually no maintenance. We also complete tear-offs and replacements on residential structures when the existing roof system has reached end of life.'],
  ['q' => 'How much does a metal roof cost in Eastern Oregon?',
   'a' => 'A residential metal roof replacement in the Mount Vernon area typically runs $12,000–$35,000 depending on roof size, pitch, panel profile, and whether a tear-off is required. Mobile home roof-overs run $4,500–$10,000 depending on the structure and panel system. Every project gets a written estimate after we measure the roof — square-foot pricing without a site visit is not accurate enough to quote responsibly.'],
  ['q' => 'Why is metal roofing better than asphalt shingles for Grant County?',
   'a' => 'Grant County sits at elevations between 2,800 and 5,000+ feet with ground snow loads that frequently exceed design thresholds for standard architectural shingles. Metal panels distribute snow load differently, shed snow more readily, and do not fail at the granule-loss rate that shingles do under Eastern Oregon UV exposure. A properly installed metal roof also has no vulnerable penetration points that create ice-dam channels — a common and expensive failure mode with asphalt in this climate.'],
  ['q' => 'Can you roof over a mobile home in Grant County?',
   'a' => 'Yes. Mobile home roof-overs are a significant portion of our roofing work in Grant County and Harney County. We install a metal panel system over the existing mobile home roof structure, adding structural framing where needed to carry the panel weight and handle local snow loads. A roof-over extends the life of the home significantly and eliminates the chronic leaking that older mobile home roofs develop at seams and around vents.'],
  ['q' => 'Do you pull permits for roofing projects in Oregon?',
   'a' => 'Yes. Roofing permits are required in Oregon for full replacements and structural roof-overs. Superior Home Builders handles the permit application with Grant County, coordinates required inspections, and provides documentation for your records. Unpermitted roofing work creates issues at resale and voids manufacturer warranties on premium panel systems — we do not skip this step.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',     'url' => $siteUrl . '/'],
  ['name' => 'Services', 'url' => $siteUrl . '/services/'],
  ['name' => 'Roofing',  'url' => $siteUrl . '/services/roofing/'],
]);
$serviceSchema = [
  '@context'   => 'https://schema.org',
  '@type'      => 'Service',
  '@id'        => $siteUrl . '/services/roofing/#service',
  'name'       => 'Roofing',
  'url'        => $siteUrl . '/services/roofing/',
  'provider'   => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed' => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Metal roofing installation and mobile home roof-overs in Mount Vernon, OR. Standing seam and exposed-fastener metal panels engineered for Grant County snow loads, UV exposure, and freeze-thaw conditions. Serving Eastern Oregon since 2001. CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Roofing Service Page — page-specific styles ─────────────────────────── */

/* HERO */
.sp-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImageUrl; ?>');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-secondary-rgb), 0.78) 50%,
    rgba(var(--color-primary-rgb), 0.52) 100%
  );
  z-index: 1;
}
.sp-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.sp-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-3xl) 0 var(--space-2xl);
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
  border: 1px solid rgba(var(--color-accent-rgb), 0.40);
  color: var(--color-accent);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: 5px var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-md);
}
.sp-hero-eyebrow svg { width: 14px; height: 14px; }
.sp-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.4rem);
  font-weight: 800;
  line-height: 1.05;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.sp-hero h1 em { font-style: italic; color: var(--color-accent); }
p.hero-answer {
  font-size: clamp(1rem, 1.25vw, 1.1rem);
  color: rgba(255, 255, 255, 0.84);
  max-width: 58ch;
  line-height: 1.75;
  margin-bottom: var(--space-xl);
}
.sp-hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  margin-bottom: var(--space-xl);
}
.sp-hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--fs-sm);
  color: rgba(255, 255, 255, 0.72);
}
.sp-hero-trust-item svg { width: 15px; height: 15px; color: var(--color-accent); flex-shrink: 0; }
.sp-hero-actions { display: flex; flex-wrap: wrap; gap: var(--space-md); }
.sp-hero-card {
  background: rgba(255, 255, 255, 0.07);
  border: 1px solid rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border-radius: 16px;
  padding: var(--space-2xl);
  color: #fff;
}
.sp-hero-card h3 {
  font-family: var(--font-heading);
  font-size: 1.25rem;
  margin-bottom: var(--space-lg);
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
.sp-hero-card ul li svg { color: var(--color-accent); width: 16px; height: 16px; flex-shrink: 0; }
.sp-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255, 255, 255, 0.48);
}
.sp-hero-breadcrumb a { color: rgba(255, 255, 255, 0.62); }
.sp-hero-breadcrumb a:hover { color: var(--color-accent); }
.sp-hero-breadcrumb .sep { margin: 0 var(--space-xs); }

/* SVG DIVIDERS */
.sp-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.sp-divider svg { display: block; width: 100%; }

/* PROBLEM BENTO */
.sp-problem { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sp-problem-pull {
  font-family: var(--font-heading);
  font-size: clamp(1.45rem, 2.6vw, 2.3rem);
  font-weight: 700;
  font-style: italic;
  color: var(--color-primary);
  border-left: 4px solid var(--color-accent);
  padding-left: var(--space-xl);
  max-width: 70ch;
  margin: 0 auto var(--space-3xl);
  line-height: 1.45;
  text-wrap: balance;
}
.sp-bento {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
.sp-bento-card {
  background: var(--color-bg-alt);
  border: 1px solid var(--color-border);
  border-radius: 14px;
  padding: var(--space-xl) var(--space-lg);
  transition: transform var(--transition), box-shadow var(--transition);
}
.sp-bento-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.sp-bento-card .icon-wrap {
  width: 48px;
  height: 48px;
  border-radius: 10px;
  background: rgba(var(--color-accent-rgb), 0.12);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-md);
  color: var(--color-accent-dark);
}
.sp-bento-card .icon-wrap svg { width: 22px; height: 22px; }
.sp-bento-card h3 {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }

/* EXPERT SECTION */
.sp-expert { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
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
  box-shadow: var(--shadow-lg);
}
.sp-expert-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  aspect-ratio: 4 / 5;
}
.sp-expert-photo::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%);
  pointer-events: none;
}
.sp-expert-photo-badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 0.92rem;
  padding: var(--space-sm) var(--space-md);
  border-radius: 8px;
  z-index: 2;
  letter-spacing: 0.01em;
}
.sp-expert-content h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 2.8vw, 2.3rem);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
  line-height: 1.2;
}
.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  line-height: 1.75;
  margin-bottom: var(--space-xl);
}
.sp-expert-points {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
}
.sp-expert-point { display: flex; gap: var(--space-lg); align-items: flex-start; }
.sp-expert-point .num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  min-width: 2.5rem;
  opacity: 0.7;
}
.sp-expert-point div strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 4px;
}
.sp-expert-point div span {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* BREAKDOWN */
.sp-breakdown { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sp-breakdown-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: start;
}
.sp-breakdown h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 2.6vw, 2.2rem);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
  line-height: 1.2;
}
.sp-breakdown h2.sp-sub {
  font-size: clamp(1.3rem, 2vw, 1.7rem);
  margin-bottom: var(--space-sm);
}
.sp-includes-list {
  list-style: none;
  padding: 0;
  margin: var(--space-lg) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.sp-includes-list li {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-size: var(--fs-sm);
  color: var(--color-text);
  line-height: 1.5;
}
.sp-includes-list li svg { color: var(--color-accent-dark); width: 17px; height: 17px; flex-shrink: 0; }

/* PROCESS TIMELINE */
.sp-process-timeline {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: var(--space-xl);
  margin-top: var(--space-lg);
  padding-left: var(--space-xl);
}
.sp-process-timeline::before {
  content: '';
  position: absolute;
  left: 24px;
  top: 48px;
  bottom: 48px;
  width: 2px;
  background: linear-gradient(180deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb), 0.15) 100%);
}
.sp-step { display: flex; gap: var(--space-lg); align-items: flex-start; position: relative; }
.sp-step-num {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  box-shadow: var(--shadow-md);
  position: relative;
  z-index: 1;
}
.sp-step-body strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: 4px;
}
.sp-step-body span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }

/* FAQ */
.sp-faq { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 2.8vw, 2.3rem);
  font-weight: 800;
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.sp-faq-list {
  max-width: 760px;
  margin: var(--space-2xl) auto 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.sp-faq-item {
  background: var(--color-bg);
  border: 1px solid var(--color-border);
  border-radius: 12px;
  overflow: hidden;
  transition: box-shadow var(--transition);
}
.sp-faq-item:hover { box-shadow: var(--shadow); }
.sp-faq-question {
  width: 100%;
  background: none;
  border: none;
  cursor: pointer;
  padding: var(--space-lg) var(--space-xl);
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-md);
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--color-primary);
  text-align: left;
  line-height: 1.4;
}
.sp-faq-question svg {
  width: 20px;
  height: 20px;
  flex-shrink: 0;
  color: var(--color-accent-dark);
  transition: transform var(--transition);
}
.sp-faq-item.open .sp-faq-question svg { transform: rotate(45deg); }
.sp-faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.38s ease, padding 0.25s ease;
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.75;
  padding: 0 var(--space-xl);
}
.sp-faq-item.open .sp-faq-answer {
  max-height: 500px;
  padding: 0 var(--space-xl) var(--space-lg);
}

/* FINAL CTA */
.sp-final-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.sp-final-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.7rem, 3vw, 2.5rem);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
  line-height: 1.2;
}
.sp-final-cta p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 58ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.75;
}
.cta-row {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  justify-content: center;
}

/* RELATED SERVICES */
.sp-related { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-related h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 800;
  color: var(--color-primary);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3xl);
}

/* SERVICE CARDS */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-md);
}
.service-card-with-image {
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition), box-shadow var(--transition);
}
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.45s ease;
}
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body {
  padding: var(--space-lg) var(--space-md) var(--space-md);
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-sm);
  position: relative;
  flex: 1;
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
  color: var(--color-accent-dark);
  flex-shrink: 0;
}
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  margin: 0;
  font-size: 1.25rem;
  line-height: 1.2;
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
  border-top: 1px solid var(--color-border);
  padding-top: var(--space-md);
}
.service-card-with-image ul li {
  font-size: var(--fs-sm);
  color: var(--color-text);
  padding-left: 1.25rem;
  position: relative;
}
.service-card-with-image ul li::before {
  content: "•";
  color: var(--color-accent-dark);
  font-weight: 700;
  position: absolute;
  left: 0.25rem;
}
.service-card__cta {
  margin-top: auto;
  padding: var(--space-sm) 0 0;
  color: var(--color-secondary);
  font-weight: 700;
  font-size: var(--fs-sm);
  border-top: 1px solid var(--color-border);
  width: 100%;
  text-align: center;
  transition: color var(--transition);
}
.service-card__cta::after { content: " →"; }
.service-card__cta:hover { color: var(--color-primary); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }

/* REVEAL ANIMATIONS */
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

/* RESPONSIVE */
@media (max-width: 1100px) {
  .sp-hero-layout { grid-template-columns: 1fr; }
  .sp-hero-card { display: none; }
  .sp-expert-grid { grid-template-columns: 1fr; }
  .sp-expert-photo { max-width: 480px; margin: 0 auto; }
  .sp-breakdown-grid { grid-template-columns: 1fr; }
  .sp-bento { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .sp-bento { grid-template-columns: 1fr; }
  .services-grid { grid-template-columns: 1fr 1fr; }
  .sp-hero-actions { flex-direction: column; }
}
@media (max-width: 480px) {
  .services-grid { grid-template-columns: 1fr; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Roofing services in Mount Vernon OR">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('home'); ?> Roofing Contractor</span>
            <h1>Roofing in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Metal roofing engineered for Eastern Oregon — not an afterthought. Superior Home Builders installs metal roof systems and mobile home roof-overs across Grant County, built to handle the snow loads, UV intensity, and freeze-thaw cycles that standard shingles don't survive long-term. We've been roofing in this climate since 2001 and we spec every project for local conditions. Free written estimate after a roof measure — no guessing, no pressure.</p>
            <div class="sp-hero-trust">
              <span class="sp-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Licensed &amp; Insured &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
              <span class="sp-hero-trust-item"><?php echo lucide_icon('calendar'); ?> Est. <?php echo (int)$yearEstablished; ?></span>
              <span class="sp-hero-trust-item"><?php echo lucide_icon('file-text'); ?> Free Written Estimate</span>
            </div>
            <div class="sp-hero-actions">
              <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
              <?php if (!empty($phone)): ?>
              <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
              <?php endif; ?>
            </div>
          </div>
          <div class="sp-hero-card">
            <h3>Why Grant County homeowners choose us for roofing</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Metal roofing for Eastern OR snow loads</li>
              <li><?php echo lucide_icon('check-circle'); ?> Mobile home roof-overs available</li>
              <li><?php echo lucide_icon('check-circle'); ?> Permits pulled and inspections handled</li>
              <li><?php echo lucide_icon('check-circle'); ?> Standing seam &amp; exposed-fastener panels</li>
              <li><?php echo lucide_icon('check-circle'); ?> <?php echo (int)$yearsInBusiness; ?>+ years in Grant &amp; Harney Counties</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Roof Assessment</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Roofing</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider: hero → problem -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. PROBLEM STATEMENT BENTO
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Signs your roof needs attention in Eastern Oregon">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Most Eastern Oregon roofs fail for the same reason — they were built for the Willamette Valley, not for Grant County's snow loads and high-desert UV."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('cloud-snow'); ?></div>
          <h3>Snow load failures</h3>
          <p>Standard architectural shingles are not engineered for Grant County's ground snow loads. Over-accumulation buckles decking and splits shingles at seams. Metal panels shed snow by design — the load never builds the way it does on a granule roof system.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
          <h3>Ice dam penetration</h3>
          <p>When snowmelt refreezes at the eave line, water backs up under shingles and enters the structure. Eastern Oregon's temperature swings make this a near-annual event on asphalt roofs. Metal roofing eliminates the vulnerable shingle laps where ice dams penetrate.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('sun'); ?></div>
          <h3>High-desert UV degradation</h3>
          <p>High-desert UV at Eastern Oregon elevations degrades asphalt shingles 30–40% faster than coastal climates. A shingle roof that would last 25 years in Portland may last 14–18 years in Grant County. Granule loss exposes the fiberglass mat directly to UV, accelerating failure.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
          <h3>Mobile home roof seam failure</h3>
          <p>Original mobile home roof systems fail at every penetration — vents, stacks, and seams. Once water reaches the interior structure it spreads quickly. A metal roof-over is the definitive fix, not a repeated patch-and-seal cycle that buys another season.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: problem → expert -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,10 C480,60 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT SECTION (photo left, content right)
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why Superior Home Builders for roofing in Grant County">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Metal roofing work by Superior Home Builders on a residential property in Grant County, Eastern Oregon"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Roofing Eastern OR Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Grant County homeowners trust Superior Home Builders for roofing near me in Mount Vernon?</h2>
          <p class="answer-block">We roof in Eastern Oregon's specific climate — not the Willamette Valley's. Grant County's snow loads, freeze-thaw cycles, and high-desert UV create roofing failure modes that contractors from western Oregon regularly underestimate. We've been installing metal roofing and completing mobile home roof-overs here since 2001. We know the load requirements, the panel profiles that perform, and what the Grant County building department requires on permitted roof work.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Climate-specific material selection</strong>
                <span>Not every metal panel performs the same in Eastern Oregon. We specify panel profiles, fastener types, and underlayment systems for Grant County's conditions — not generic Pacific Northwest specs. The difference shows up 10 years after installation, not on the day of completion.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Mobile home roof-over expertise</strong>
                <span>Mobile home roof-overs require structural assessment before installation — the existing roof framing has to carry the new panel system, and load paths matter at Eastern Oregon elevations. We assess the structure, add framing where needed, and install a system built to outlast the original roof by decades.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Permit and inspection management</strong>
                <span>We handle the permit application, prepare documentation for the Grant County building department, and coordinate required inspections. A clean permit record protects you at resale and ensures manufacturer warranties aren't voided by unpermitted installation.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light);margin-top:var(--space-lg)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: expert → breakdown -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. SERVICE BREAKDOWN
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What is included in roofing services in Mount Vernon OR">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What's included in a roofing project in Mount Vernon, OR?</h2>
          <p class="answer-block">From initial assessment to final inspection, every roofing project by Superior Home Builders in Grant County includes the full scope below. No hand-offs, no subcontracted unknowns.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Roof measurement &amp; written estimate</li>
            <li><?php echo lucide_icon('check'); ?> Structural assessment for load capacity</li>
            <li><?php echo lucide_icon('check'); ?> Permit application &amp; engineering if required</li>
            <li><?php echo lucide_icon('check'); ?> Tear-off &amp; decking inspection (replacements)</li>
            <li><?php echo lucide_icon('check'); ?> Framing reinforcement where required</li>
            <li><?php echo lucide_icon('check'); ?> Ice-and-water shield at eaves &amp; valleys</li>
            <li><?php echo lucide_icon('check'); ?> Synthetic underlayment installation</li>
            <li><?php echo lucide_icon('check'); ?> Metal panel installation (standing seam or exposed-fastener)</li>
            <li><?php echo lucide_icon('check'); ?> Ridge cap, hip trim, &amp; rake edge flashing</li>
            <li><?php echo lucide_icon('check'); ?> Pipe jack &amp; vent penetration flashing</li>
            <li><?php echo lucide_icon('check'); ?> Valley flashing &amp; wall transitions</li>
            <li><?php echo lucide_icon('check'); ?> Permit inspection coordination</li>
            <li><?php echo lucide_icon('check'); ?> Debris removal &amp; site cleanup</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2 class="sp-sub">How does the roofing process work in Eastern Oregon?</h2>
          <p class="answer-block" style="margin-bottom:var(--space-lg)">Four phases from site visit to completed, permitted roof — managed by our crew from start to final sign-off.</p>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <span class="sp-step-num">1</span>
              <div class="sp-step-body">
                <strong>Roof assessment &amp; estimate</strong>
                <span>We measure the roof, assess the existing deck and framing condition, and evaluate structural capacity for the proposed panel system. You receive a written scope and line-item estimate before any work is authorized.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">2</span>
              <div class="sp-step-body">
                <strong>Permit &amp; material order</strong>
                <span>Permit application is submitted to Grant County. Metal panels, underlayment, and trim components are ordered and staged. Your installation date is confirmed once the permit is approved and materials arrive on site.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">3</span>
              <div class="sp-step-body">
                <strong>Tear-off, deck repair &amp; underlayment</strong>
                <span>Existing roofing is removed (on replacements) and the deck inspected for soft spots or rot. Damaged decking is replaced. Ice-and-water shield and synthetic underlayment are installed before any panel is set.</span>
              </div>
            </div>
            <div class="sp-step">
              <span class="sp-step-num">4</span>
              <div class="sp-step-body">
                <strong>Panel installation &amp; final inspection</strong>
                <span>Metal panels are installed with proper flashing at all penetrations, valleys, ridges, and wall transitions. Permit inspection is scheduled and completed. We walk the finished roof with you before closing out the project.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: breakdown → FAQ -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C720,56 1440,0 1440,0 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. FAQ ACCORDION
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Roofing FAQ for Mount Vernon OR">
    <div class="container">
      <h2>Frequently asked questions about roofing near Mount Vernon, OR</h2>
      <p class="answer-block" style="text-align:center;max-width:58ch;margin:0 auto;">Answers to the questions Grant County homeowners ask most about metal roofing and roof replacement in Eastern Oregon.</p>
      <div class="sp-faq-list">

        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-rf-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-rf-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <!-- SVG Divider: FAQ → final CTA -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C720,0 1440,56 1440,56 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. FINAL CTA
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free roofing estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to replace your roof near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been roofing in Eastern Oregon since 2001. We install metal roofing systems built for Grant County's climate, pull every permit, and stand behind every project. Get a written estimate — no obligation, no pressure.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><?php echo lucide_icon('phone'); ?> Call Us Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- SVG Divider: final CTA → related services -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C360,56 1080,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-related" aria-label="Other construction services in Mount Vernon OR">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg"
                 alt="Residential framing construction in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('hammer'); ?></div>
            <h3>Framing</h3>
            <ul>
              <li>Residential &amp; commercial</li>
              <li>New builds &amp; additions</li>
              <li>Engineered lumber options</li>
            </ul>
            <a href="/services/framing/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604306051-1cn5ph-467748149_10161026648862734_1486565757297760050_n.jpg"
                 alt="Custom home building in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('building-2'); ?></div>
            <h3>Custom Home Building</h3>
            <ul>
              <li>Full custom construction</li>
              <li>Design-to-completion</li>
              <li>Eastern OR climate built</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg"
                 alt="General remodeling project in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('wrench'); ?></div>
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
document.querySelectorAll('.sp-faq-question').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var item = btn.closest('.sp-faq-item');
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.sp-faq-item.open').forEach(function(i) {
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
