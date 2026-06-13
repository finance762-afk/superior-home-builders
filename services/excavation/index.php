<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Excavation & Site Work in Eastern Oregon | Superior Home Builders';
$pageDescription  = 'Excavation, foundation dig-outs & site development across Eastern Oregon. Raw land clearing, grading, driveway cuts & drainage. Licensed CCB# 147123 serving Grant & Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/excavation/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'Do you handle excavation for new custom home foundations in Grant County?',
   'a' => 'Yes — foundation excavation is part of our full custom home construction scope. We coordinate the dig with the foundation contractor and concrete pour so there is no gap in the schedule. Grant County soils vary significantly by location — some areas have shallow bedrock, others have expansive clay soils that require specific bearing preparations. We assess soil conditions as part of every site visit before writing an estimate.'],
  ['q' => 'Can you help develop raw land for a home or agricultural structure in Eastern Oregon?',
   'a' => 'Property development — from raw land to a build-ready site — is part of what we do. That includes access road cuts, utility trench work, clearing, rough grading, and drainage planning. Eastern Oregon raw land development is distinct from valley work: rocky terrain, slope stability concerns, and the need to plan drainage for spring snowmelt are real factors. We approach every raw land project with a site visit before any estimate.'],
  ['q' => 'What are the excavation challenges specific to Grant County and Eastern Oregon?',
   'a' => 'Three common challenges: (1) Basalt and volcanic rock at shallow depth in parts of Grant County — blasting or rock breaking adds cost and time. (2) Expansive clay soils in low-lying areas near the John Day River — these require overexcavation and engineered fill at the foundation. (3) Slope stability on hillside sites, common in the canyon terrain throughout the county. We identify these conditions upfront so your estimate reflects what\'s actually in the ground.'],
  ['q' => 'Do you work in Harney County for excavation and site work?',
   'a' => 'Yes — we serve Burns, Hines, and surrounding Harney County communities for excavation and site work projects. Harney County\'s high-desert alkaline soils and the basin-floor terrain present different conditions from Grant County\'s canyon topography, and we adjust our approach accordingly. Contact us to discuss your project location.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                   'url' => $siteUrl . '/'],
  ['name' => 'Services',               'url' => $siteUrl . '/services/'],
  ['name' => 'Excavation & Site Work', 'url' => $siteUrl . '/services/excavation/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/excavation/#service',
  'name'        => 'Excavation & Site Work',
  'url'         => $siteUrl . '/services/excavation/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Excavation, foundation dig-outs, raw land clearing, grading, and property development across Grant and Harney Counties. Site work coordinated with construction for custom homes and agricultural structures. Licensed CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Excavation & Site Work Service Page ─────────────────────────────────── */
.sp-hero {
  position: relative;
  min-height: 68vh;
  display: flex;
  align-items: center;
  background-image: url('<?php echo $heroImageUrl; ?>');
  background-size: cover;
  background-position: center 45%;
  padding-top: var(--nav-height);
}
.sp-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(125deg, rgba(var(--color-primary-rgb), 0.94) 0%, rgba(var(--color-secondary-rgb), 0.72) 55%, rgba(var(--color-primary-rgb), 0.45) 100%);
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
  <section class="sp-hero" aria-label="Excavation and site work in Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('shovel'); ?> Excavation &amp; Site Work</span>
            <h1>Excavation &amp; Site Work<br><em>Across Eastern Oregon</em></h1>
            <p class="hero-answer">From raw land clearing and grading to foundation excavation for custom homes and agricultural structures. Superior Home Builders handles site work across Grant and Harney Counties with the local knowledge that Eastern Oregon's rocky terrain, variable soils, and spring drainage conditions demand. Licensed CCB# <?php echo htmlspecialchars($licenseNumber); ?>. Free estimates after a site visit.</p>
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
            <h3>Site work capabilities in Grant &amp; Harney Counties</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Foundation dig-outs &amp; rough grading</li>
              <li><?php echo lucide_icon('check-circle'); ?> Raw land clearing &amp; development</li>
              <li><?php echo lucide_icon('check-circle'); ?> Driveway cuts &amp; site access</li>
              <li><?php echo lucide_icon('check-circle'); ?> Drainage &amp; erosion control</li>
              <li><?php echo lucide_icon('check-circle'); ?> Coordinated with foundation pours</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Discuss Your Site</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Excavation &amp; Site Work</span>
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
  <section class="sp-problem" aria-label="Types of excavation and site work in Eastern Oregon">
    <div class="container">
      <blockquote class="sp-problem-pull reveal-up">
        "Eastern Oregon site work isn't valley site work. Shallow basalt, expansive clay near the John Day River, and canyon slope terrain each demand a different approach — and we've seen all of it since 2001."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
          <h3>Foundation excavation for new homes</h3>
          <p>We excavate residential foundations as part of new custom home construction or as a standalone service coordinated with your contractor. Grant County soil conditions vary widely — we assess bearing soil, depth to bedrock, and moisture conditions before any dig so there are no surprises when the foundation goes in.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('map'); ?></div>
          <h3>Raw land development preparation</h3>
          <p>Taking a raw parcel to a build-ready site in Eastern Oregon involves more than clearing and grading. Access road cuts, utility trenching, spring drainage planning, and slope preparation are all part of what we do. We've developed parcels throughout the John Day basin and the high desert for homes and agricultural structures.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('truck'); ?></div>
          <h3>Driveway &amp; access work</h3>
          <p>Driveway cuts in Eastern Oregon terrain — canyon approaches, hillside entries, rocky road cuts — require equipment and judgment appropriate to the terrain. We cut, grade, and base-gravel driveways and site access roads for rural properties throughout Grant and Harney Counties, including gravel pack for all-season access.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
          <h3>Drainage &amp; site grading</h3>
          <p>Spring snowmelt and concentrated rainfall events in Eastern Oregon require intentional drainage design — not just rough grading. We cut swales, build berms, and establish final grades that direct water away from structures and toward safe discharge. Drainage planning is part of every site work estimate we write.</p>
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
  <section class="sp-expert" aria-label="Why Superior Home Builders for excavation in Grant County Oregon">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Construction and site work by Superior Home Builders in Grant County, Eastern Oregon"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Eastern Oregon Site Work Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why choose Superior Home Builders for excavation near me in Eastern Oregon?</h2>
          <p class="answer-block">Site work in Eastern Oregon is not interchangeable with site work in the Willamette Valley or the coast. Basalt at shallow depth, clay soils that expand and contract seasonally, canyon terrain with slope stability concerns, and the high-desert drainage conditions of Harney County are all specific to this region. We've been doing site work here since 2001 — we know what's in the ground before we dig, and we build that into every estimate.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>We own the full construction scope — no subcontractor coordination</strong>
                <span>When site work is part of a larger construction project — a custom home, a pole barn, a garage — we coordinate the excavation with the rest of the build. No scheduling gaps, no miscommunication between subs. One crew, one contract, from site prep through final grade.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Eastern Oregon soil types and rock vary by location</strong>
                <span>Grant County's geology is highly variable — granite and basalt outcrops, volcanic ash deposits, river-bottom clay soils near the John Day. Harney County's high-desert alkaline soils behave differently from canyon terrain. We assess conditions on site before writing any estimate so the scope reflects what's actually there.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Site work is the foundation of every build</strong>
                <span>A poorly graded site creates drainage problems, foundation movement, and access issues that follow a building for its entire life. We take site work seriously as the first phase of every project — not a rushed step to get to the visible construction faster.</span>
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
  <section class="sp-breakdown" aria-label="What is included in excavation and site work in Eastern Oregon">
    <div class="container">
      <div class="sp-includes-two-col">
        <div class="reveal-left">
          <h2>What's included in an excavation or site work project in Eastern Oregon?</h2>
          <p class="answer-block">Every site work project begins with a site visit and assessment. We evaluate terrain, soil conditions, access requirements, and drainage before writing a scope — because site work in Eastern Oregon requires local knowledge, not a generic checklist.</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> Topographic assessment &amp; site visit</li>
            <li><?php echo lucide_icon('check'); ?> Clearing &amp; grubbing</li>
            <li><?php echo lucide_icon('check'); ?> Rough grade &amp; cut/fill balance</li>
            <li><?php echo lucide_icon('check'); ?> Foundation excavation</li>
            <li><?php echo lucide_icon('check'); ?> Utility trench digging</li>
            <li><?php echo lucide_icon('check'); ?> Driveway cut &amp; base gravel</li>
            <li><?php echo lucide_icon('check'); ?> Drainage swales &amp; berms</li>
            <li><?php echo lucide_icon('check'); ?> Final grade prep</li>
          </ul>
        </div>
        <div class="reveal-right">
          <h2>Site work project types we handle in Grant &amp; Harney Counties</h2>
          <p class="answer-block">We handle site work as a standalone service or as the first phase of a larger construction project. Common project types throughout Eastern Oregon:</p>
          <ul class="sp-includes-list">
            <li><?php echo lucide_icon('check'); ?> New custom home site preparation</li>
            <li><?php echo lucide_icon('check'); ?> Foundation excavation (residential &amp; commercial)</li>
            <li><?php echo lucide_icon('check'); ?> Raw land clearing for agricultural structures</li>
            <li><?php echo lucide_icon('check'); ?> Ranch road and driveway cuts</li>
            <li><?php echo lucide_icon('check'); ?> Septic system excavation</li>
            <li><?php echo lucide_icon('check'); ?> Pond and stock water feature excavation</li>
            <li><?php echo lucide_icon('check'); ?> Building demolition and site clearance</li>
            <li><?php echo lucide_icon('check'); ?> Erosion control and slope stabilization</li>
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
  <section class="sp-faq" aria-label="Excavation FAQ for Grant County and Eastern Oregon">
    <div class="container">
      <h2>Frequently asked questions about excavation near Eastern Oregon</h2>
      <p class="answer-block" style="text-align:center;max-width:58ch;margin:0 auto;">What Grant and Harney County property owners ask most about site work and excavation in Eastern Oregon.</p>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-ex-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-ex-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get a free excavation estimate in Eastern Oregon">
    <div class="container">
      <h2>Ready to start your site work near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been preparing building sites across Grant and Harney Counties since 2001. We understand Eastern Oregon's terrain, soils, and drainage conditions. Get a written estimate after a site visit — no obligation, no pressure.</p>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg"
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
              <li>Horse barns &amp; hay sheds</li>
              <li>Barndominiums available</li>
              <li>Grant &amp; Harney County permitted</li>
            </ul>
            <a href="/services/pole-barns/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604096131-uq4fqg-20220724_151821.jpg"
                 alt="Framing construction in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('hammer'); ?></div>
            <h3>Framing</h3>
            <ul>
              <li>New construction &amp; additions</li>
              <li>Engineered lumber options</li>
              <li>Residential &amp; agricultural</li>
            </ul>
            <a href="/services/framing/" class="service-card__cta">Learn more</a>
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
