<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Cedar Fencing in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Cedar fencing installation across Eastern Oregon — shadow box, privacy & good neighbor styles. Posts set below frost depth. Licensed CCB# 147123 serving Grant & Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/fencing/';
$currentPage      = 'services';
$heroImageUrl     = 'https://i.imgur.com/cPZwJbk.jpeg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'Why is cedar a good choice for fencing in Eastern Oregon?',
   'a' => 'Cedar\'s natural oils make it resistant to moisture, rot, and insect damage — and it holds up well in Eastern Oregon\'s high-UV environment without the degradation that cheaper pine undergoes. A cedar fence in the John Day River valley or Grant County high desert will last 15–25 years with minimal maintenance (occasional staining extends life further). It\'s the right wood for this climate and it looks appropriate on rural and residential Eastern Oregon properties.'],
  ['q' => 'What\'s the difference between shadow box, privacy, and good neighbor fence styles?',
   'a' => 'Shadow box fencing alternates pickets on each side of the rails, creating a fence that looks good from both sides and allows airflow through the gaps — good for lots with wind concerns. Privacy fencing places all pickets on the same side, flush, with no gaps — maximum visual screening. Good neighbor fencing is similar to shadow box but with rails centered and visible from both sides — often required by HOAs or ordinances that mandate equal appearance on both sides of a property line. We help you choose based on your property, neighbor considerations, and any local requirements.'],
  ['q' => 'How deep do fence posts need to be set in Eastern Oregon?',
   'a' => 'Grant County\'s frost depth reaches 24 inches in most areas and deeper at higher elevations like Seneca. Post holes need to be set below the frost line to prevent heaving — we typically dig to 30–36 inches for fence posts in this region. Post diameter and concrete collar design also matter for long-term stability. A fence installed with shallow posts will lean and shift within 2–3 winters in Eastern Oregon.'],
  ['q' => 'Do you build fencing in Harney County as well as Grant County?',
   'a' => 'Yes — we build cedar fencing in Burns, Hines, and surrounding Harney County properties as part of our regular service area. Harney County\'s alkali soils in lower areas can affect post longevity over time, and we use treated post materials or alternative post options in those conditions. Contact us to discuss your project location and soil conditions.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',     'url' => $siteUrl . '/'],
  ['name' => 'Services', 'url' => $siteUrl . '/services/'],
  ['name' => 'Fencing',  'url' => $siteUrl . '/services/fencing/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/fencing/#service',
  'name'        => 'Cedar Fencing',
  'url'         => $siteUrl . '/services/fencing/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Cedar fencing installation across Grant and Harney Counties — shadow box, privacy, and good neighbor styles. Posts set below Eastern Oregon frost depth. Residential and property boundary fencing. Licensed CCB# 147123, serving Eastern Oregon since 2001.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Fencing Service Page ────────────────────────────────────────────────── */
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
  background: linear-gradient(118deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-secondary-rgb), 0.75) 52%, rgba(var(--color-primary-rgb), 0.48) 100%);
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
.sp-hero-inner { position: relative; z-index: 3; width: 100%; padding: var(--space-3xl) 0 var(--space-2xl); }
.sp-hero-layout { display: grid; grid-template-columns: 1fr 380px; gap: var(--space-3xl); align-items: center; }
.sp-hero-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-xs);
  background: rgba(var(--color-accent-rgb), 0.15); border: 1px solid rgba(var(--color-accent-rgb), 0.40);
  color: var(--color-accent); font-size: var(--fs-xs); font-weight: 700;
  letter-spacing: 0.12em; text-transform: uppercase; padding: 5px var(--space-md); border-radius: 100px; margin-bottom: var(--space-md);
}
.sp-hero-eyebrow svg { width: 14px; height: 14px; }
.sp-hero h1 { font-family: var(--font-heading); font-size: clamp(2.1rem, 4.8vw, 3.4rem); font-weight: 800; line-height: 1.05; color: #fff; text-wrap: balance; margin-bottom: var(--space-lg); }
.sp-hero h1 em { font-style: italic; color: var(--color-accent); }
p.hero-answer { font-size: clamp(1rem, 1.25vw, 1.1rem); color: rgba(255,255,255,0.84); max-width: 58ch; line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-hero-trust { display: flex; flex-wrap: wrap; gap: var(--space-md); margin-bottom: var(--space-xl); }
.sp-hero-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--fs-sm); color: rgba(255,255,255,0.72); }
.sp-hero-trust-item svg { width: 15px; height: 15px; color: var(--color-accent); flex-shrink: 0; }
.sp-hero-actions { display: flex; flex-wrap: wrap; gap: var(--space-md); }
.sp-hero-card {
  background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.15);
  backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border-radius: 16px; padding: var(--space-2xl); color: #fff;
}
.sp-hero-card h3 { font-family: var(--font-heading); font-size: 1.25rem; margin-bottom: var(--space-lg); text-wrap: balance; }
.sp-hero-card ul { list-style: none; padding: 0; margin: 0 0 var(--space-xl); display: flex; flex-direction: column; gap: var(--space-sm); }
.sp-hero-card ul li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: rgba(255,255,255,0.82); }
.sp-hero-card ul li svg { color: var(--color-accent); width: 16px; height: 16px; flex-shrink: 0; }
.sp-hero-breadcrumb { margin-top: var(--space-2xl); font-size: var(--fs-xs); color: rgba(255,255,255,0.48); }
.sp-hero-breadcrumb a { color: rgba(255,255,255,0.62); }
.sp-hero-breadcrumb a:hover { color: var(--color-accent); }
.sp-hero-breadcrumb .sep { margin: 0 var(--space-xs); }
.sp-divider { display: block; width: 100%; overflow: hidden; line-height: 0; }
.sp-divider svg { display: block; width: 100%; }
.sp-problem { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sp-problem-pull {
  font-family: var(--font-heading); font-size: clamp(1.4rem, 2.5vw, 2.2rem); font-weight: 700; font-style: italic;
  color: var(--color-primary); border-left: 4px solid var(--color-accent); padding-left: var(--space-xl);
  max-width: 70ch; margin: 0 auto var(--space-3xl); line-height: 1.45; text-wrap: balance;
}
.sp-bento { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-md); }
.sp-bento-card {
  background: var(--color-bg-alt); border: 1px solid var(--color-border); border-radius: 14px;
  padding: var(--space-xl) var(--space-lg); transition: transform var(--transition), box-shadow var(--transition);
}
.sp-bento-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.sp-bento-card .icon-wrap {
  width: 48px; height: 48px; border-radius: 10px; background: rgba(var(--color-accent-rgb), 0.12);
  display: flex; align-items: center; justify-content: center; margin-bottom: var(--space-md); color: var(--color-accent-dark);
}
.sp-bento-card .icon-wrap svg { width: 22px; height: 22px; }
.sp-bento-card h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-sm); text-wrap: balance; }
.sp-bento-card p { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.65; }
.sp-expert { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-expert-grid { display: grid; grid-template-columns: 420px 1fr; gap: var(--space-3xl); align-items: center; }
.sp-expert-photo { position: relative; border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-lg); }
.sp-expert-photo img { width: 100%; height: 100%; object-fit: cover; display: block; aspect-ratio: 4/5; }
.sp-expert-photo::after {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(180deg, transparent 55%, rgba(var(--color-primary-rgb), 0.55) 100%); pointer-events: none;
}
.sp-expert-photo-badge {
  position: absolute; bottom: var(--space-lg); left: var(--space-lg);
  background: var(--color-accent); color: var(--color-primary); font-family: var(--font-heading);
  font-weight: 800; font-size: 0.92rem; padding: var(--space-sm) var(--space-md); border-radius: 8px; z-index: 2;
}
.sp-expert-content h2 { font-family: var(--font-heading); font-size: clamp(1.6rem, 2.8vw, 2.3rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); line-height: 1.2; }
.answer-block { font-size: var(--fs-body); color: var(--color-text-light); line-height: 1.75; margin-bottom: var(--space-xl); }
.sp-expert-points { display: flex; flex-direction: column; gap: var(--space-lg); margin-top: var(--space-xl); }
.sp-expert-point { display: flex; gap: var(--space-lg); align-items: flex-start; }
.sp-expert-point .num { font-family: var(--font-heading); font-size: 2rem; font-weight: 900; color: var(--color-accent); line-height: 1; min-width: 2.5rem; opacity: 0.7; }
.sp-expert-point div strong { display: block; font-family: var(--font-heading); font-size: 1rem; font-weight: 700; color: var(--color-primary); margin-bottom: 4px; }
.sp-expert-point div span { font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.6; }
.sp-breakdown { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sp-breakdown h2 { font-family: var(--font-heading); font-size: clamp(1.6rem, 2.6vw, 2.2rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); line-height: 1.2; }
.sp-includes-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: start; }
.sp-includes-list { list-style: none; padding: 0; margin: var(--space-lg) 0 0; display: flex; flex-direction: column; gap: var(--space-sm); }
.sp-includes-list li { display: flex; align-items: center; gap: var(--space-sm); font-size: var(--fs-sm); color: var(--color-text); line-height: 1.5; }
.sp-includes-list li svg { color: var(--color-accent-dark); width: 17px; height: 17px; flex-shrink: 0; }
.sp-faq { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-faq h2 { font-family: var(--font-heading); font-size: clamp(1.6rem, 2.8vw, 2.3rem); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-md); }
.sp-faq-list { max-width: 760px; margin: var(--space-2xl) auto 0; display: flex; flex-direction: column; gap: var(--space-sm); }
.sp-faq-item { background: var(--color-bg); border: 1px solid var(--color-border); border-radius: 12px; overflow: hidden; transition: box-shadow var(--transition); }
.sp-faq-item:hover { box-shadow: var(--shadow); }
.sp-faq-question {
  width: 100%; background: none; border: none; cursor: pointer; padding: var(--space-lg) var(--space-xl);
  display: flex; justify-content: space-between; align-items: center; gap: var(--space-md);
  font-family: var(--font-heading); font-size: 1.05rem; font-weight: 700; color: var(--color-primary); text-align: left; line-height: 1.4;
}
.sp-faq-question svg { width: 20px; height: 20px; flex-shrink: 0; color: var(--color-accent-dark); transition: transform var(--transition); }
.sp-faq-item.open .sp-faq-question svg { transform: rotate(45deg); }
.sp-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.38s ease, padding 0.25s ease; font-size: var(--fs-sm); color: var(--color-text-light); line-height: 1.75; padding: 0 var(--space-xl); }
.sp-faq-item.open .sp-faq-answer { max-height: 500px; padding: 0 var(--space-xl) var(--space-lg); }
.sp-final-cta { padding: var(--space-4xl) 0; background: var(--color-bg); text-align: center; }
.sp-final-cta h2 { font-family: var(--font-heading); font-size: clamp(1.7rem, 3vw, 2.5rem); font-weight: 800; color: var(--color-primary); text-wrap: balance; margin-bottom: var(--space-md); line-height: 1.2; }
.sp-final-cta p { font-size: var(--fs-body); color: var(--color-text-light); max-width: 58ch; margin: 0 auto var(--space-2xl); line-height: 1.75; }
.cta-row { display: flex; flex-wrap: wrap; gap: var(--space-md); justify-content: center; }
.sp-related { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sp-related h2 { font-family: var(--font-heading); font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 800; color: var(--color-primary); text-align: center; text-wrap: balance; margin-bottom: var(--space-3xl); }
.services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-md); }
.service-card-with-image { border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; transition: transform var(--transition), box-shadow var(--transition); }
.service-card-with-image:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.service-card__image { position: relative; aspect-ratio: 5/3; overflow: hidden; }
.service-card__image img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.45s ease; }
.service-card-with-image:hover .service-card__image img { transform: scale(1.04); }
.service-card__body { padding: var(--space-lg) var(--space-md) var(--space-md); text-align: center; display: flex; flex-direction: column; align-items: center; gap: var(--space-sm); position: relative; flex: 1; }
.service-card__icon { width: 56px; height: 56px; border-radius: 50%; background: #fff; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin-top: -44px; margin-bottom: var(--space-xs); color: var(--color-accent-dark); flex-shrink: 0; }
.service-card__icon svg { width: 26px; height: 26px; }
.service-card-with-image h3 { font-family: var(--font-heading); color: var(--color-primary); margin: 0; font-size: 1.25rem; line-height: 1.2; }
.service-card-with-image ul { list-style: none; padding: 0; margin: var(--space-xs) 0 0; width: 100%; text-align: left; display: flex; flex-direction: column; gap: var(--space-xs); border-top: 1px solid var(--color-border); padding-top: var(--space-md); }
.service-card-with-image ul li { font-size: var(--fs-sm); color: var(--color-text); padding-left: 1.25rem; position: relative; }
.service-card-with-image ul li::before { content: "•"; color: var(--color-accent-dark); font-weight: 700; position: absolute; left: 0.25rem; }
.service-card__cta { margin-top: auto; padding: var(--space-sm) 0 0; color: var(--color-secondary); font-weight: 700; font-size: var(--fs-sm); border-top: 1px solid var(--color-border); width: 100%; text-align: center; transition: color var(--transition); }
.service-card__cta::after { content: " →"; }
.service-card__cta:hover { color: var(--color-primary); }
.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity .65s ease, transform .65s ease; }
.reveal-scale { opacity: 0; transform: scale(.93); transition: opacity .65s ease, transform .65s ease; }
.reveal-up.visible, .reveal-left.visible, .reveal-right.visible, .reveal-scale.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: .1s; }
.reveal-delay-2 { transition-delay: .2s; }
.reveal-delay-3 { transition-delay: .3s; }
.reveal-delay-4 { transition-delay: .4s; }
@media (max-width: 1100px) {
  .sp-hero-layout { grid-template-columns: 1fr; }
  .sp-hero-card { display: none; }
  .sp-expert-grid { grid-template-columns: 1fr; }
  .sp-expert-photo { max-width: 480px; margin: 0 auto; }
  .sp-includes-two-col { grid-template-columns: 1fr; }
  .sp-bento { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .sp-bento { grid-template-columns: 1fr; }
  .services-grid { grid-template-columns: 1fr 1fr; }
  .sp-hero-actions { flex-direction: column; }
}
@media (max-width: 480px) { .services-grid { grid-template-columns: 1fr; } }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Cedar fencing installation in Mount Vernon and Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('fence'); ?> Fencing Contractor</span>
            <h1>Cedar Fencing<br><em>in Mount Vernon, OR</em></h1>
            <p class="hero-answer">Cedar fencing installation across Eastern Oregon — shadow box, privacy, and good neighbor styles built to last in Grant County's climate. Cedar performs well in Eastern Oregon's high-UV, freeze-thaw environment and looks right on residential and rural properties throughout the John Day basin. Posts set below frost depth, concrete set, and built to stay put through Eastern Oregon winters. Licensed CCB# <?php echo htmlspecialchars($licenseNumber); ?>. Free estimates across Grant and Harney Counties.</p>
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
            <h3>Cedar fencing across Grant &amp; Harney Counties</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Shadow box cedar fencing</li>
              <li><?php echo lucide_icon('check-circle'); ?> Privacy &amp; good neighbor styles</li>
              <li><?php echo lucide_icon('check-circle'); ?> Post setting in Eastern OR soil types</li>
              <li><?php echo lucide_icon('check-circle'); ?> Residential &amp; property boundary fencing</li>
              <li><?php echo lucide_icon('check-circle'); ?> Free estimates — Grant &amp; Harney Counties</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Get a Fencing Estimate</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Fencing</span>
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
       2. BENTO
  ═══════════════════════════════════════ -->
  <section class="sp-problem" aria-label="Cedar fencing considerations for Eastern Oregon climate">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "A cedar fence with posts set at 18 inches is not going to survive Eastern Oregon's frost depth. It's leaning by the third winter. Post depth and concrete collar design are the difference between a fence that lasts 20 years and one that needs replacement in five."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('tree-pine'); ?></div>
          <h3>Why cedar is right for Eastern Oregon</h3>
          <p>Cedar's natural oils resist rot and insect damage without chemical treatment, and the wood holds up in Eastern Oregon's high-UV environment better than cheaper pine or treated lumber alternatives. A well-installed cedar fence in the John Day River valley lasts 15–25 years with periodic staining — it's the appropriate material for this climate and this landscape.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('layout'); ?></div>
          <h3>Shadow box vs privacy vs good neighbor styles</h3>
          <p>Shadow box alternates pickets on each side of the rail — airflow through gaps, looks good from both sides. Privacy has all pickets on one side, flush, no gaps — maximum visual screening for yards, patios, and pools. Good neighbor has centered, visible rails on both sides — required in some HOA situations. We explain the tradeoffs before any estimate so you choose the right style for your situation.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('arrow-down-to-line'); ?></div>
          <h3>Post depth matters at Eastern OR frost depth</h3>
          <p>Grant County's frost depth reaches 24 inches or more depending on elevation and microclimate — higher in Seneca, shallower in the lower John Day valley. We dig to 30–36 inches on fence posts and concrete-collar every post. A fence built with shallow posts in Eastern Oregon will heave, lean, and require replacement within a few winters. Post depth is not where to cut budget.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('map-pin'); ?></div>
          <h3>Residential &amp; rural property fencing</h3>
          <p>We build cedar fencing on residential lots in Mount Vernon, John Day, Burns, and surrounding communities throughout Grant and Harney Counties. Whether you're fencing a backyard in town or a property boundary on rural acreage, the same post depth and material standards apply. We provide free estimates and a written scope before any work begins.</p>
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
       3. EXPERT SECTION
  ═══════════════════════════════════════ -->
  <section class="sp-expert" aria-label="Why Superior Home Builders for cedar fencing in Grant County">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Cedar fence installation in Eastern Oregon by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Building Grant County Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Mount Vernon homeowners choose Superior Home Builders for cedar fencing near me in Eastern Oregon?</h2>
          <p class="answer-block">Cedar fencing in Eastern Oregon fails for predictable reasons — posts too shallow for frost depth, no concrete collar, incorrect post spacing for the wind exposure on open lots, or green lumber that warps after installation. We've been building fences throughout Grant and Harney Counties since 2001 and we install them to last in the conditions here, not to look good on the day of completion and fail by the third winter.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Cedar is the right wood choice here</strong>
                <span>In Eastern Oregon's high-UV, freeze-thaw environment, cedar outlasts treated pine and cheaper alternatives because of its natural rot resistance — not because it's fashionable. We use properly dried cedar and seal all cut ends at installation. A cedar fence installed correctly in Grant County is a 20-year investment, not a 5-year project.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Post setting depth is critical in Eastern OR freeze-thaw</strong>
                <span>Frost heave is the leading cause of premature fence failure in Eastern Oregon. We dig below the frost line — 30 to 36 inches depending on elevation — and pour a concrete collar that keeps each post anchored through repeated freeze-thaw cycles. This is not optional; it's the engineering requirement for fencing in this climate.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>We handle the full scope — posts, panels, caps, gates</strong>
                <span>Post layout and marking, hole digging, post setting and concrete, rails, pickets or panels, post caps, gate installation and hardware, and bottom rail grade adjustment are all included in our fence scope. One contractor, one estimate, complete installation from property line marking to gate latch adjustment.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light);margin-top:var(--space-lg)">Last Updated: <?php echo date('F Y'); ?></p>
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
       4. INCLUDES LIST
  ═══════════════════════════════════════ -->
  <section class="sp-breakdown" aria-label="What is included in cedar fencing installation in Eastern Oregon">
    <div class="container">
      <div class="sp-includes-two-col">
        <div class="reveal-left">
          <h2>What's included in a cedar fence project in Eastern Oregon?</h2>
          <p class="answer-block">Every cedar fence installation by Superior Home Builders covers the complete scope from layout to final gate adjustment. No partial installations, no components left for you to finish.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Post layout &amp; property line marking</li>
            <li><?php echo lucide_icon('check'); ?> Post hole digging (below frost depth)</li>
            <li><?php echo lucide_icon('check'); ?> Post setting &amp; concrete collar</li>
            <li><?php echo lucide_icon('check'); ?> Rails installation</li>
            <li><?php echo lucide_icon('check'); ?> Cedar picket or panel installation</li>
            <li><?php echo lucide_icon('check'); ?> Post caps</li>
            <li><?php echo lucide_icon('check'); ?> Gate installation &amp; hardware</li>
            <li><?php echo lucide_icon('check'); ?> Grade adjustment at bottom rail</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2>Fence styles and options we build across Grant &amp; Harney Counties</h2>
          <p class="answer-block">We build cedar fences in the styles appropriate to your property, neighborhood requirements, and intended use:</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Shadow box cedar (6-foot standard and custom heights)</li>
            <li><?php echo lucide_icon('check'); ?> Privacy cedar (single-side picket)</li>
            <li><?php echo lucide_icon('check'); ?> Good neighbor cedar (centered rails, both-side appearance)</li>
            <li><?php echo lucide_icon('check'); ?> Dog-ear and flat-top picket profiles</li>
            <li><?php echo lucide_icon('check'); ?> Single and double swing gates</li>
            <li><?php echo lucide_icon('check'); ?> Drive-through double gates (for vehicle access)</li>
            <li><?php echo lucide_icon('check'); ?> Staining and sealing (add-on option)</li>
            <li><?php echo lucide_icon('check'); ?> Fence repair and post replacement on existing fences</li>
          </ul>
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
       5. FAQ
  ═══════════════════════════════════════ -->
  <section class="sp-faq" aria-label="Cedar fencing FAQ for Grant County and Eastern Oregon">
    <div class="container">
      <h2>Frequently asked questions about cedar fencing near Mount Vernon, OR</h2>
      <p class="answer-block" style="text-align:center;max-width:58ch;margin:0 auto;">What Grant and Harney County homeowners ask most about cedar fence installation and longevity in Eastern Oregon.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-fn-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-fn-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C720,0 1440,56 1440,56 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       6. FINAL CTA
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get a free cedar fencing estimate in Eastern Oregon">
    <div class="container">
      <h2>Ready to install cedar fencing near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been building cedar fences across Grant and Harney Counties since 2001. We set posts below frost depth, install with concrete, and build fences that stay plumb through Eastern Oregon winters. Free estimates — no obligation, no pressure.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><?php echo lucide_icon('phone'); ?> Call Us Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- SVG Divider -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C360,56 1080,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       7. RELATED SERVICES
  ═══════════════════════════════════════ -->
  <section class="sp-related" aria-label="Other construction services in Eastern Oregon">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604099376-0r19op-20220724_154635.jpg"
                 alt="Deck construction in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('square'); ?></div>
            <h3>Decks</h3>
            <ul>
              <li>Custom deck design &amp; build</li>
              <li>Composite &amp; pressure-treated</li>
              <li>Railing &amp; staircase included</li>
            </ul>
            <a href="/services/decks/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg"
                 alt="Pole barn construction in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('warehouse'); ?></div>
            <h3>Pole Barns</h3>
            <ul>
              <li>Horse barns &amp; hay storage</li>
              <li>Barndominiums available</li>
              <li>Grant &amp; Harney County permitted</li>
            </ul>
            <a href="/services/pole-barns/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157333-7yq7b6-image_7_.jpg"
                 alt="Exterior painting in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('paintbrush'); ?></div>
            <h3>Painting</h3>
            <ul>
              <li>Exterior &amp; interior painting</li>
              <li>Fence staining &amp; sealing</li>
              <li>Residential &amp; commercial</li>
            </ul>
            <a href="/services/painting/" class="service-card__cta">Learn more</a>
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
