<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle       = 'Home Building & Remodeling in John Day, OR | Superior Home Builders';
$pageDescription = 'Superior Home Builders serves John Day, OR with custom home construction, kitchen remodeling, bathroom renovations, decks, and more. Grant County contractor based 20 min away in Mount Vernon. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/john-day/';
$currentPage     = 'service-area';
$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604097152-jcl4h7-20220724_152509.jpg';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',          'url' => $siteUrl . '/'],
  ['name' => 'Service Areas', 'url' => $siteUrl . '/service-area/'],
  ['name' => 'John Day',      'url' => $siteUrl . '/areas/john-day/'],
]);

$localBusiness = [
  '@context' => 'https://schema.org',
  '@type'    => 'HomeAndConstructionBusiness',
  '@id'      => $siteUrl . '/areas/john-day/#local',
  'name'     => $siteName,
  'url'      => $siteUrl . '/',
  'telephone' => $phone,
  'address'  => [
    '@type'           => 'PostalAddress',
    'addressLocality' => 'Mount Vernon',
    'addressRegion'   => 'OR',
    'postalCode'      => '97865',
    'addressCountry'  => 'US',
  ],
  'areaServed' => [
    '@type'         => 'City',
    'name'          => 'John Day',
    'addressRegion' => 'OR',
  ],
  'provider' => ['@id' => $siteUrl . '/#organization'],
];

$schemaMarkup = json_encode(
  ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $localBusiness]],
  JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
);

$faqs = [
  [
    'q' => 'Does Superior Home Builders work in John Day, OR?',
    'a' => 'Yes — John Day is one of Superior Home Builders\' primary service areas. We\'re based in Mount Vernon, roughly 20 minutes away, which means no travel surcharges and a familiar crew. We regularly take kitchen and bathroom remodels, custom home builds, framing projects, deck installations, and window replacements for John Day homeowners and commercial clients.',
  ],
  [
    'q' => 'Are building permits for John Day handled through Grant County?',
    'a' => 'Construction permits in John Day are handled through the City of John Day Building Department for projects within city limits, and the Grant County Building Department for properties just outside the city. Superior Home Builders handles all permit applications and coordinates inspection scheduling so the homeowner doesn\'t need to navigate this process.',
  ],
  [
    'q' => 'What types of homes are most common in John Day, OR?',
    'a' => 'John Day has a mix of mid-century ranch homes (1950s–1970s), older craftsman-style houses from the early 1900s near downtown, and newer construction on the hillside lots north and east of town. Many properties near the John Day River have outbuildings and detached garages that get folded into remodeling scopes. We\'ve worked on all of these home types throughout Grant County.',
  ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   JOHN DAY SERVICE AREA — Superior Home Builders
   Premium page styles | var() tokens only
   Techniques: layered hero (::before gradient + ::after noise), floating
   accent, bento local signals, asymmetric photo/content split, services
   grid, FAQ accordion, SVG dividers, multi-direction reveals
   ════════════════════════════════════════════════════════════════════ */

.area-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImage; ?>');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
  overflow: hidden;
}
.area-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(125deg,
    rgba(var(--color-secondary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.85) 50%,
    rgba(var(--color-secondary-rgb), 0.55) 100%);
  z-index: 1;
}
.area-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  background-size: 180px;
  z-index: 2;
  pointer-events: none;
}
.area-hero-inner {
  position: relative; z-index: 3; width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl); color: #fff;
}
.area-hero-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb),0.15); border: 1px solid rgba(var(--color-accent-rgb),0.35);
  color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase;
  padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md);
}
.area-hero h1 {
  font-family: var(--font-heading); font-size: var(--fs-h1); font-weight: 800;
  line-height: 1.05; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg);
}
.area-hero h1 em { font-style: italic; color: var(--color-accent); }
.area-hero-answer {
  font-size: clamp(1rem,1.25vw,1.15rem); color: rgba(255,255,255,0.85);
  max-width: 62ch; line-height: 1.75; margin-bottom: var(--space-xl);
}
.area-hero-trust { display: flex; gap: var(--space-lg); flex-wrap: wrap; margin-bottom: var(--space-xl); }
.area-hero-trust-item {
  display: flex; align-items: center; gap: var(--space-xs);
  font-size: var(--fs-sm); color: rgba(255,255,255,0.75);
}
.area-hero-trust-item svg { color: var(--color-accent); flex-shrink: 0; }
.area-hero-actions { display: flex; gap: var(--space-md); flex-wrap: wrap; }
.area-breadcrumb {
  margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.45);
}
.area-breadcrumb a { color: rgba(255,255,255,0.60); }
.area-breadcrumb a:hover { color: var(--color-accent); }
.area-breadcrumb .sep { margin: 0 4px; }

/* ── DIVIDERS ───────────────────────────────────────────────── */
.area-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.area-divider svg { display: block; width: 100%; }

/* ── ANSWER INTRO ───────────────────────────────────────────── */
.area-intro { padding: var(--space-4xl) 0; background: var(--color-bg); position: relative; overflow: hidden; }
.area-intro-floating {
  position: absolute; top: -40px; right: -60px; width: 280px; height: 280px;
  border-radius: 50%; background: rgba(var(--color-accent-rgb),0.05); pointer-events: none;
}
.area-intro-grid { display: grid; grid-template-columns: 1fr 380px; gap: var(--space-4xl); align-items: center; }
.area-intro-content h2 {
  font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800;
  color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md);
}
.area-intro-content p.answer-block {
  font-size: var(--fs-body); color: var(--color-text); line-height: 1.75;
  max-width: 65ch; margin-bottom: var(--space-lg);
}
.area-intro-content p.area-identity {
  font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.7;
  padding: var(--space-md) var(--space-lg);
  border-left: 3px solid var(--color-accent);
  background: var(--color-card-tint-1);
  border-radius: 0 var(--radius) var(--radius) 0;
  margin-bottom: var(--space-xl);
}
.area-stats-card {
  background: var(--color-primary); border-radius: var(--radius-lg);
  padding: var(--space-2xl); color: #fff;
  position: relative; overflow: hidden;
}
.area-stats-card::before {
  content: ''; position: absolute; inset: 0;
  background: radial-gradient(circle at 80% 20%, rgba(var(--color-accent-rgb),0.12) 0%, transparent 65%);
}
.area-stats-card h3 {
  font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700;
  color: #fff; margin-bottom: var(--space-xl); position: relative;
}
.area-stats-rows { display: flex; flex-direction: column; gap: var(--space-lg); position: relative; }
.area-stat-row { display: flex; align-items: center; gap: var(--space-md); }
.area-stat-row .stat-num {
  font-family: var(--font-heading); font-size: 2rem; font-weight: 900;
  color: var(--color-accent); min-width: 60px; line-height: 1;
}
.area-stat-row div strong { display: block; font-size: var(--fs-sm); color: #fff; margin-bottom: 1px; }
.area-stat-row div span { font-size: var(--fs-xs); color: rgba(255,255,255,0.60); }

/* ── BENTO LOCAL SIGNALS ────────────────────────────────────── */
.area-locals { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.area-locals-header { text-align: center; margin-bottom: var(--space-3xl); }
.area-locals-header h2 {
  font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800;
  color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-sm);
}
.area-locals-header p {
  font-size: var(--fs-body); color: var(--color-text-light);
  max-width: 60ch; margin: 0 auto; line-height: 1.7;
}
.area-bento { display: grid; grid-template-columns: repeat(4,1fr); gap: var(--space-md); }
.area-bento-card {
  border-radius: 12px; padding: var(--space-xl) var(--space-lg); position: relative; overflow: hidden;
}
.area-bento-card:nth-child(1) { background: var(--color-card-tint-1); }
.area-bento-card:nth-child(2) { background: var(--color-card-tint-2); }
.area-bento-card:nth-child(3) { background: var(--color-card-tint-3); }
.area-bento-card:nth-child(4) { background: var(--color-card-tint-neutral); }
.area-bento-card .icon-wrap {
  width: 44px; height: 44px; border-radius: 10px; background: var(--color-accent);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-md); color: var(--color-primary);
}
.area-bento-card h3 { font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-sm); }
.area-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }

/* ── SERVICES GRID ──────────────────────────────────────────── */
.area-services { padding: var(--space-4xl) 0; background: var(--color-bg); }
.area-services h2 {
  font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800;
  color: var(--color-primary); text-wrap: balance; text-align: center; margin-bottom: var(--space-3xl);
}
.services-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: var(--space-md); }
@media (max-width: 900px) { .services-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 480px) { .services-grid { grid-template-columns: 1fr; } }
.service-card-with-image { border-radius: var(--radius-md); overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); flex-shrink: 0; }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.2rem; line-height: 1.2; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid var(--color-border); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: 0.875rem; color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: .25rem; top: 0; }
.service-card__cta { margin-top: auto; padding: var(--space-sm) 0 0; color: var(--color-secondary); font-weight: 700; font-size: var(--fs-sm); border-top: 1px solid var(--color-border); width: 100%; text-align: center; transition: color var(--transition); }
.service-card__cta::after { content: " →"; display: inline-block; transition: transform var(--transition); }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }

/* ── WHY US ─────────────────────────────────────────────────── */
.area-why { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.area-why-grid { display: grid; grid-template-columns: 1fr 420px; gap: var(--space-4xl); align-items: center; }
.area-why-content h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-lg); }
.area-why-content p.answer-block { font-size: var(--fs-body); color: var(--color-text); line-height: 1.75; max-width: 65ch; margin-bottom: var(--space-xl); }
.area-why-points { display: flex; flex-direction: column; gap: var(--space-lg); margin-bottom: var(--space-xl); }
.area-why-point { display: flex; gap: var(--space-md); align-items: flex-start; }
.area-why-point .num { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: var(--color-accent-dark); min-width: 34px; line-height: 1; }
.area-why-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 2px; }
.area-why-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.area-why-photo { position: relative; border-radius: var(--radius-lg); overflow: hidden; aspect-ratio: 4/5; box-shadow: var(--shadow-lg); }
.area-why-photo img { width: 100%; height: 100%; object-fit: cover; display: block; }
.area-why-photo::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 60%, rgba(var(--color-primary-rgb),0.55) 100%); }
.area-why-badge { position: absolute; bottom: var(--space-lg); left: var(--space-lg); right: var(--space-lg); background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading); font-size: 0.9rem; font-weight: 800; padding: var(--space-sm) var(--space-md); border-radius: var(--radius); z-index: 2; text-align: center; }

/* ── FAQ ────────────────────────────────────────────────────── */
.area-faq { padding: var(--space-4xl) 0; background: var(--color-bg); }
.area-faq h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.area-faq p.answer-block { font-size: var(--fs-body); color: var(--color-text-light); text-align: center; max-width: 60ch; margin: 0 auto var(--space-3xl); line-height: 1.75; }
.area-faq-list { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: var(--space-md); }
.area-faq-item { border: 1px solid var(--color-border); border-radius: 10px; overflow: hidden; }
.area-faq-question { width: 100%; background: none; border: none; display: flex; align-items: center; justify-content: space-between; gap: var(--space-md); padding: var(--space-lg) var(--space-xl); font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--color-primary); cursor: pointer; text-align: left; }
.area-faq-question:hover { background: var(--color-bg-alt); }
.area-faq-question svg { flex-shrink: 0; transition: transform var(--transition); color: var(--color-accent-dark); }
.area-faq-item.open .area-faq-question svg { transform: rotate(45deg); }
.area-faq-answer { display: none; padding: 0 var(--space-xl) var(--space-lg); font-size: var(--fs-body); color: var(--color-text-light); line-height: 1.75; border-top: 1px solid var(--color-border); }
.area-faq-item.open .area-faq-answer { display: block; }

/* ── FINAL CTA ──────────────────────────────────────────────── */
.area-final-cta { padding: var(--space-4xl) 0; background: var(--color-primary); text-align: center; }
.area-final-cta h2 { font-family: var(--font-heading); font-size: var(--fs-h2); font-weight: 800; color: #fff; text-wrap: balance; margin-bottom: var(--space-md); }
.area-final-cta p { font-size: var(--fs-body); color: rgba(255,255,255,0.75); max-width: 58ch; margin: 0 auto var(--space-2xl); line-height: 1.75; }
.area-final-cta .cta-row { display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap; }

/* ── REVEALS ────────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1{transition-delay:.1s}.reveal-delay-2{transition-delay:.2s}
.reveal-delay-3{transition-delay:.3s}.reveal-delay-4{transition-delay:.4s}

/* ── RESPONSIVE ─────────────────────────────────────────────── */
@media (max-width:1100px) {
  .area-intro-grid,.area-why-grid { grid-template-columns: 1fr; }
  .area-why-photo { aspect-ratio: 16/9; }
}
@media (max-width:768px) {
  .area-bento { grid-template-columns: 1fr 1fr; }
  .area-hero-actions { flex-direction: column; }
}
@media (max-width:480px) { .area-bento { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<section class="area-hero" aria-label="John Day service area">
  <div class="area-hero-inner">
    <div class="container">
      <span class="area-hero-eyebrow"><?php echo lucide_icon('map-pin'); ?> John Day, OR · Grant County Seat</span>
      <h1>Home Building &amp; Remodeling in<br><em>John Day, OR</em></h1>
      <p class="area-hero-answer">Superior Home Builders serves John Day homeowners and business owners with custom home construction, kitchen and bathroom remodeling, decks, framing, and commercial builds. Based in Mount Vernon just 20 minutes away, we bring 25+ years of Grant County construction experience to every project near the John Day River valley — no travel fees, no strangers to the area.</p>
      <div class="area-hero-trust">
        <span class="area-hero-trust-item"><?php echo lucide_icon('map-pin'); ?> 20 min from Mount Vernon</span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('shield-check'); ?> Oregon Licensed &middot; CCB# <?php echo htmlspecialchars($licenseNumber); ?></span>
        <span class="area-hero-trust-item"><?php echo lucide_icon('file-text'); ?> Free Written Estimate</span>
      </div>
      <div class="area-hero-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate in John Day</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
        <?php endif; ?>
      </div>
      <nav class="area-breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span class="sep">›</span>
        <a href="/service-area/">Service Areas</a><span class="sep">›</span>
        <span aria-current="page">John Day</span>
      </nav>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-primary)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- INTRO + STATS -->
<section class="area-intro" aria-label="Superior Home Builders in John Day">
  <div class="area-intro-floating" aria-hidden="true"></div>
  <div class="container">
    <div class="area-intro-grid">
      <div class="reveal-left">
        <h2>What construction services are available near me in John Day, OR?</h2>
        <p class="answer-block">Superior Home Builders covers the full range of residential and commercial construction in John Day — from custom new-home builds on Starr Ridge and the hillside lots above the valley floor, to kitchen overhauls in mid-century homes near downtown, to deck additions overlooking the John Day River. As Grant County's licensed general contractor, we pull permits through both the City of John Day and the county office and handle every phase of your project in-house.</p>
        <p class="area-identity">Superior Home Builders is a licensed Oregon general contractor (CCB# 147123) based in Mount Vernon, OR, serving John Day and all of Grant County with custom home building, remodeling, and commercial construction since 2001.</p>
        <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
      </div>
      <div class="area-stats-card reveal-scale">
        <h3><?php echo lucide_icon('bar-chart-2', '', 'width:18px;height:18px;vertical-align:middle;margin-right:6px'); ?> Why hire local?</h3>
        <div class="area-stats-rows">
          <div class="area-stat-row">
            <span class="stat-num">20+</span>
            <div><strong>Years of Grant County projects</strong><span>We know John Day's permit office, suppliers, and housing stock cold.</span></div>
          </div>
          <div class="area-stat-row">
            <span class="stat-num">20<small style="font-size:1rem">mi</small></span>
            <div><strong>From Mount Vernon to John Day</strong><span>No travel surcharge. We're practically neighbors.</span></div>
          </div>
          <div class="area-stat-row">
            <span class="stat-num">8</span>
            <div><strong>Services available here</strong><span>From custom homes to commercial builds — all under one contractor.</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,15 C360,56 1080,0 1440,35 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- LOCAL SIGNALS BENTO -->
<section class="area-locals" aria-label="What makes John Day unique for construction">
  <div class="container">
    <div class="area-locals-header reveal-up">
      <h2>What should John Day homeowners know before starting a construction project?</h2>
      <p>John Day is the Grant County seat and the largest community in the region — with distinct permit processes, a diverse housing stock, and construction conditions shaped by the Aldrich Mountains and the John Day River valley.</p>
    </div>
    <div class="area-bento">
      <div class="area-bento-card reveal-up reveal-delay-1">
        <div class="icon-wrap"><?php echo lucide_icon('landmark'); ?></div>
        <h3>City and county permits</h3>
        <p>Projects within John Day city limits go through the City of John Day Building Department. Properties just outside city limits use Grant County's department in Canyon City. We're familiar with both processes and handle all applications and inspections so your project doesn't stall on paperwork.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-2">
        <div class="icon-wrap"><?php echo lucide_icon('layers'); ?></div>
        <h3>Diverse housing stock</h3>
        <p>John Day homes range from early 1900s craftsman and bungalow styles near the Kam Wah Chung area and downtown, to mid-century ranchers throughout the valley, to newer hillside construction north of the river. Each era presents different remodeling challenges — we've worked on all of them.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-3">
        <div class="icon-wrap"><?php echo lucide_icon('mountain'); ?></div>
        <h3>Aldrich Mountain climate</h3>
        <p>John Day sits at 3,100 feet and gets meaningful snow. Rooflines, decks, and exterior additions need to be engineered for snowload. Framing that doesn't account for Eastern Oregon winters creates structural problems within 5–10 years — we spec our work for this environment from day one.</p>
      </div>
      <div class="area-bento-card reveal-up reveal-delay-4">
        <div class="icon-wrap"><?php echo lucide_icon('compass'); ?></div>
        <h3>Growing seasonal activity</h3>
        <p>John Day draws increasing tourism traffic via the John Day Fossil Beds National Monument corridor and the Kam Wah Chung State Heritage Site. Some homeowners are expanding or converting properties for seasonal rental or hospitality use — we've framed additions and built ADUs for that market too.</p>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C720,0 720,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- SERVICES -->
<section class="area-services" aria-label="Services in John Day OR">
  <div class="container">
    <h2 class="reveal-up">What construction services does <span class="text-accent">Superior Home Builders</span> offer in John Day?</h2>
    <div class="services-grid">
      <?php
      $serviceData = [
        ['slug'=>'kitchen-remodeling','icon'=>'utensils','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604145059-2lrm2s-image_1_.jpg','bullets'=>['Cabinets, countertops &amp; layout','Full plumbing &amp; electrical','Permits handled']],
        ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg','bullets'=>['Custom tile &amp; walk-in showers','Vanity &amp; fixture upgrades','Plumbing rough-in included']],
        ['slug'=>'custom-home-building','icon'=>'home','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270979-4l74wp-468299739_10161024404097734_2434409497451082464_n.jpg','bullets'=>['Full design-to-build','Eastern OR climate specs','Site prep &amp; permits']],
        ['slug'=>'decks','icon'=>'tree-pine','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg','bullets'=>['Valley-view deck designs','Snowload-engineered','Composite &amp; treated wood']],
        ['slug'=>'framing','icon'=>'hammer','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg','bullets'=>['New builds &amp; additions','Residential &amp; commercial','Structural repair']],
        ['slug'=>'general-remodeling','icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Any room or whole home','ADU conversions','Finish carpentry &amp; trim']],
      ];
      $tints = ['card-tint-1','card-tint-2','card-tint-3'];
      $svcBySlug = [];
      foreach ($services as $s) $svcBySlug[$s['slug']] = $s;
      foreach ($serviceData as $si => $sd):
        $svc = $svcBySlug[$sd['slug']] ?? ['name' => $sd['slug'], 'slug' => $sd['slug']];
      ?>
      <article class="service-card-with-image <?php echo $tints[$si % 3]; ?> reveal-up reveal-delay-<?php echo ($si % 4) + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($sd['photo']); ?>"
               alt="<?php echo htmlspecialchars($svc['name']); ?> in John Day, OR"
               width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo lucide_icon($sd['icon']); ?></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <ul><?php foreach ($sd['bullets'] as $b): ?><li><?php echo $b; ?></li><?php endforeach; ?></ul>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,20 C480,56 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- WHY SUPERIOR IN JOHN DAY -->
<section class="area-why" aria-label="Why choose Superior Home Builders for John Day projects">
  <div class="container">
    <div class="area-why-grid">
      <div class="reveal-left">
        <h2>Why do John Day homeowners hire Superior Home Builders instead of a contractor from Bend or Portland?</h2>
        <p class="answer-block">Hiring a contractor unfamiliar with Grant County means you're paying for their education. They won't know the local building department, they'll miss the regional construction details that matter here, and they'll charge for every mile. We've been building within 20 miles of John Day for over 25 years — this is our backyard, not a remote job.</p>
        <div class="area-why-points">
          <div class="area-why-point">
            <span class="num">01</span>
            <div>
              <strong>We know the City and County building departments</strong>
              <span>Projects in John Day touch both city and county jurisdiction depending on the parcel. We navigate both, file the right applications, and don't lose time figuring out which office to call.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">02</span>
            <div>
              <strong>Eastern Oregon structural specs — by default</strong>
              <span>Snow loads on the Aldrich Mountains side, freeze-thaw foundation issues, and the temperature range of the John Day valley all demand construction details that a Bend or Portland contractor defaults to skipping. We build them in from the start.</span>
            </div>
          </div>
          <div class="area-why-point">
            <span class="num">03</span>
            <div>
              <strong>20 minutes away — not 2 hours</strong>
              <span>When a crew needs to get on-site fast, check an inspection issue, or respond to a scheduling change, being based in Mount Vernon means we're there. A Bend contractor at a 2-hour drive adds delays at every project touchpoint.</span>
            </div>
          </div>
        </div>
        <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
      </div>
      <div class="reveal-scale">
        <div class="area-why-photo">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604304797-ovpay8-466679242_10160894523457734_3638487413345304516_n.jpg"
               alt="Construction project near John Day Oregon by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="area-why-badge">Serving John Day Since 2001</div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="area-divider" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,35 C360,0 1080,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- FAQ -->
<section class="area-faq" aria-label="John Day OR construction FAQ">
  <div class="container">
    <h2 class="reveal-up">Frequently asked questions about construction near me in John Day, OR</h2>
    <p class="answer-block reveal-up reveal-delay-1">Direct answers for Grant County homeowners planning builds or remodels in and around John Day.</p>
    <div class="area-faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="area-faq-item reveal-up" id="faq-<?php echo $i; ?>">
        <button class="area-faq-question" aria-expanded="false" aria-controls="faq-ans-<?php echo $i; ?>">
          <?php echo htmlspecialchars($faq['q']); ?>
          <?php echo lucide_icon('plus-circle'); ?>
        </button>
        <div class="area-faq-answer" id="faq-ans-<?php echo $i; ?>" role="region">
          <?php echo htmlspecialchars($faq['a']); ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="area-final-cta" aria-label="Get a free estimate in John Day">
  <div class="container reveal-up">
    <h2>Ready to build or remodel in John Day, OR?</h2>
    <p>Superior Home Builders is your local contractor for John Day and all of Grant County. On-site visit, written estimate, honest timeline — no obligation. We're 20 minutes away and ready to start.</p>
    <div class="cta-row">
      <a href="/contact/" class="btn btn-secondary btn-lg">Request a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg"><?php echo lucide_icon('phone'); ?> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
document.querySelectorAll('.area-faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.area-faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.area-faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.area-faq-question').setAttribute('aria-expanded','false');
    });
    if (!isOpen) { item.classList.add('open'); btn.setAttribute('aria-expanded','true'); }
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
