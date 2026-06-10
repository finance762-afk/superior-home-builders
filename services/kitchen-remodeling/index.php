<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$pageTitle        = 'Kitchen Remodeling in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Custom kitchen remodeling in Mount Vernon, OR. Cabinets, countertops, layout redesigns, and appliance installation. Licensed contractor serving Grant County since 2004. Free estimates.';
$canonicalUrl     = $siteUrl . '/services/kitchen-remodeling/';
$currentPage      = 'services';
$heroImage        = $siteUrl . '/assets/images/kitchen-remodel-mount-vernon.webp';
$heroImagePreload = $heroImage;
$ogImage          = $heroImage;

$faqs = [
  ['q'=>'How much does a kitchen remodel cost in Mount Vernon, OR?',
   'a'=>'Kitchen remodels in Grant County typically range from $18,000 to $65,000. A cosmetic refresh — new cabinet doors, countertops, and hardware — runs $18,000–$28,000. A mid-range full remodel with new semi-custom cabinets and quartz countertops falls at $30,000–$45,000. A full custom remodel with layout changes and high-end finishes reaches $50,000–$65,000+. We provide written estimates after an on-site visit.'],
  ['q'=>'How long does a kitchen renovation take?',
   'a'=>'Most kitchen remodels take 4–8 weeks from demo to final inspection. The timeline depends on scope: replacing cabinets and countertops in an existing layout runs 4–5 weeks. Adding an island, moving plumbing, or opening a wall to the dining room adds 2–4 weeks. Every project gets a written day-by-day schedule before work begins.'],
  ['q'=>'Can I keep my kitchen functional during the remodel?',
   'a'=>'Partially. Demo and rough-in phases will knock out your kitchen entirely for 1–2 weeks. After cabinets are set, we can often restore temporary access to a sink and the refrigerator. We work with homeowners to minimize disruption and, where possible, schedule the longest downtime phases during warmer months when cooking outdoors is practical.'],
  ['q'=>'Do you build custom cabinets or install stock cabinets?',
   'a'=>'We work with the full range — from stock big-box cabinets to semi-custom and fully custom built cabinetry. Most Grant County homeowners find that semi-custom gives the best balance of quality, uniqueness, and cost. We help you evaluate options based on your goals, timeline, and budget at the consultation.'],
  ['q'=>'Is a permit required for kitchen remodeling in Oregon?',
   'a'=>'Permits are required for plumbing relocation, electrical panel upgrades, structural wall removal, or adding HVAC ventilation. Cosmetic work like cabinet replacement, countertops, and flooring without moving plumbing or electrical does not typically require a permit. Superior Home Builders handles all permit applications as part of every permitted project.'],
  ['q'=>'Can Superior Home Builders open a wall to combine my kitchen and dining room?',
   'a'=>'Yes — wall removal is one of the most common add-ons to kitchen remodels in Grant County. We assess whether the wall is load-bearing, engineer the correct beam size, install the structural support, and handle all finish work. This single change transforms the feel of an older Eastern Oregon rancher or farmhouse more dramatically than any other.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name'=>'Home',              'url'=> $siteUrl . '/'],
  ['name'=>'Services',          'url'=> $siteUrl . '/services'],
  ['name'=>'Kitchen Remodeling','url'=> $siteUrl . '/services/kitchen-remodeling/'],
]);
$serviceSchema = [
  '@context' => 'https://schema.org',
  '@type'    => 'Service',
  '@id'      => $siteUrl . '/services/kitchen-remodeling#service',
  'name'     => 'Kitchen Remodeling',
  'url'      => $siteUrl . '/services/kitchen-remodeling/',
  'provider' => ['@type'=>'HomeAndConstructionBusiness','@id'=> $siteUrl . '/#organization'],
  'areaServed' => ['@type'=>'Place','name'=>'Mount Vernon, OR','addressRegion'=>'OR'],
  'description' => 'Custom kitchen remodeling services in Mount Vernon, OR — cabinetry, countertops, layout redesigns, appliance installation, and structural wall removal for Grant County homeowners.',
];
$faqSchema = generateFAQSchema($faqs);
$schemaGraph = ['@context'=>'https://schema.org','@graph'=>[$breadcrumbs,$serviceSchema,$faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* Page-specific styles only — the shared service page template
   lives in framework.css */
.sp-hero { position: relative; min-height: 65vh; display: flex; align-items: center; background-image: url('<?php echo $heroImage; ?>'); background-size: cover; background-position: center 50%; padding-top: var(--nav-height); }
.sp-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient(115deg, rgba(var(--color-secondary-rgb),0.93) 0%, rgba(var(--color-primary-rgb),0.80) 55%, rgba(var(--color-secondary-rgb),0.50) 100%); z-index: 1; }
.sp-hero-inner { position:relative; z-index:3; width:100%; padding:var(--space-4xl) 0 var(--space-3xl); color:#fff; }
.sp-hero-layout { display:grid; grid-template-columns:1fr 360px; gap:var(--space-3xl); align-items:center; }
.sp-hero-eyebrow { display:inline-flex; align-items:center; gap:var(--space-xs); background:rgba(var(--color-accent-rgb),0.15); border:1px solid rgba(var(--color-accent-rgb),0.35); color:var(--color-accent); font-size:var(--fs-xs); font-weight:700; letter-spacing:0.12em; text-transform:uppercase; padding:5px var(--space-md); border-radius:100px; margin-bottom:var(--space-md); }
.sp-hero h1 { font-family:var(--font-heading); font-size:var(--fs-h1); font-weight:800; line-height:1.05; color:#fff; margin-bottom:var(--space-lg); }
.sp-hero h1 em { font-style:italic; color:var(--color-accent); }
.sp-hero p.hero-answer { font-size:clamp(1rem,1.3vw,1.15rem); color:rgba(255,255,255,0.85); max-width:60ch; line-height:1.75; margin-bottom:var(--space-xl); }
.sp-hero-trust { display:flex; gap:var(--space-lg); flex-wrap:wrap; margin-bottom:var(--space-xl); }
.sp-hero-trust-item { display:flex; align-items:center; gap:var(--space-xs); font-size:var(--fs-sm); color:rgba(255,255,255,0.75); }
.sp-hero-trust-item svg { color:var(--color-accent); flex-shrink:0; }
.sp-hero-actions { display:flex; gap:var(--space-md); flex-wrap:wrap; }
.sp-hero-card { background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.15); backdrop-filter:blur(12px); -webkit-backdrop-filter:blur(12px); border-radius:16px; padding:var(--space-2xl); color:#fff; }
.sp-hero-card h3 { font-family:var(--font-heading); font-size:1.3rem; margin-bottom:var(--space-md); }
.sp-hero-card ul { list-style:none; padding:0; margin:0 0 var(--space-xl); display:flex; flex-direction:column; gap:var(--space-sm); }
.sp-hero-card ul li { display:flex; align-items:center; gap:var(--space-sm); font-size:var(--fs-sm); color:rgba(255,255,255,0.80); }
.sp-hero-card ul li svg { color:var(--color-accent); flex-shrink:0; }
.sp-hero-breadcrumb { margin-top:var(--space-2xl); font-size:var(--fs-xs); color:rgba(255,255,255,0.50); }
.sp-hero-breadcrumb a { color:rgba(255,255,255,0.65); }
.sp-hero-breadcrumb a:hover { color:var(--color-accent); }
.sp-hero-breadcrumb .sep { margin:0 4px; }
.sp-divider { display:block; width:100%; overflow:hidden; line-height:0; }
.sp-divider svg { display:block; width:100%; }
.sp-problem { padding:var(--space-4xl) 0; background:var(--color-bg); position:relative; overflow:hidden; }
.sp-problem-floating { position:absolute; top:var(--space-2xl); right:-60px; width:260px; height:260px; border-radius:50%; background:rgba(var(--color-accent-rgb),0.05); pointer-events:none; }
.sp-problem-pull { font-family:var(--font-heading); font-size:clamp(1.5rem,2.8vw,2.4rem); font-weight:700; font-style:italic; color:var(--color-primary); border-left:4px solid var(--color-accent); padding-left:var(--space-xl); max-width:70ch; margin:0 auto var(--space-3xl); line-height:1.4; }
.sp-bento { display:grid; grid-template-columns:repeat(4,1fr); gap:var(--space-md); }
.sp-bento-card { padding:var(--space-xl) var(--space-lg); border-radius:12px; position:relative; overflow:hidden; }
.sp-bento-card:nth-child(1) { background:var(--color-card-tint-1); }
.sp-bento-card:nth-child(2) { background:var(--color-card-tint-2); }
.sp-bento-card:nth-child(3) { background:var(--color-card-tint-3); }
.sp-bento-card:nth-child(4) { background:var(--color-card-tint-neutral); }
.sp-bento-card .icon-wrap { width:48px; height:48px; border-radius:10px; background:var(--color-accent); display:flex; align-items:center; justify-content:center; margin-bottom:var(--space-md); color:var(--color-primary); }
.sp-bento-card h3 { font-family:var(--font-heading); font-size:1.1rem; font-weight:700; color:var(--color-primary); margin-bottom:var(--space-sm); }
.sp-bento-card p { font-size:var(--fs-sm); color:var(--color-text-light); line-height:1.6; }
.sp-expert { padding:var(--space-4xl) 0; background:var(--color-bg-alt); }
.sp-expert-grid { display:grid; grid-template-columns:1fr 420px; gap:var(--space-3xl); align-items:center; }
.sp-expert-content h2 { font-family:var(--font-heading); font-size:var(--fs-h2); font-weight:800; color:var(--color-primary); margin-bottom:var(--space-md); }
.sp-expert-content p.answer-block { font-size:var(--fs-body); color:var(--color-text); line-height:1.75; max-width:65ch; margin-bottom:var(--space-xl); }
.sp-expert-points { display:flex; flex-direction:column; gap:var(--space-md); margin-bottom:var(--space-xl); }
.sp-expert-point { display:flex; gap:var(--space-md); align-items:flex-start; }
.sp-expert-point .num { font-family:var(--font-heading); font-size:1.5rem; font-weight:900; color:var(--color-accent-dark); min-width:36px; line-height:1; }
.sp-expert-point div strong { display:block; font-family:var(--font-heading); font-size:1rem; font-weight:700; color:var(--color-primary); margin-bottom:2px; }
.sp-expert-point div span { font-size:var(--fs-sm); color:var(--color-text-light); line-height:1.55; }
.sp-expert-photo { position:relative; border-radius:16px; overflow:hidden; aspect-ratio:4/5; }
.sp-expert-photo img { width:100%; height:100%; object-fit:cover; display:block; }
.sp-expert-photo::after { content:''; position:absolute; inset:0; background:linear-gradient(180deg,transparent 60%,rgba(var(--color-primary-rgb),0.5) 100%); }
.sp-expert-photo-badge { position:absolute; bottom:var(--space-lg); right:var(--space-lg); background:var(--color-accent); color:var(--color-primary); font-family:var(--font-heading); font-weight:800; font-size:0.9rem; padding:var(--space-sm) var(--space-md); border-radius:8px; z-index:2; }
.sp-breakdown { padding:var(--space-4xl) 0; background:var(--color-bg); }
.sp-breakdown-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-3xl); align-items:start; }
.sp-breakdown h2 { font-family:var(--font-heading); font-size:var(--fs-h2); font-weight:800; color:var(--color-primary); margin-bottom:var(--space-md); }
.sp-breakdown p.answer-block { font-size:var(--fs-body); color:var(--color-text); line-height:1.75; max-width:65ch; margin-bottom:var(--space-xl); }
.sp-includes-list { list-style:none; padding:0; margin:0 0 var(--space-xl); display:grid; grid-template-columns:1fr 1fr; gap:var(--space-sm); }
.sp-includes-list li { display:flex; align-items:center; gap:var(--space-sm); font-size:var(--fs-sm); color:var(--color-text); }
.sp-includes-list li svg { color:var(--color-accent-dark); flex-shrink:0; }
.sp-process-timeline { display:flex; flex-direction:column; gap:0; position:relative; }
.sp-process-timeline::before { content:''; position:absolute; left:24px; top:48px; bottom:48px; width:2px; background:linear-gradient(180deg,var(--color-accent) 0%,rgba(var(--color-accent-rgb),0.2) 100%); }
.sp-step { display:flex; gap:var(--space-lg); align-items:flex-start; padding:var(--space-lg) 0; position:relative; }
.sp-step-num { width:48px; height:48px; border-radius:50%; background:var(--color-primary); border:3px solid var(--color-accent); display:flex; align-items:center; justify-content:center; font-family:var(--font-heading); font-weight:800; font-size:1rem; color:var(--color-accent); flex-shrink:0; position:relative; z-index:1; }
.sp-step-body strong { display:block; font-family:var(--font-heading); font-size:1.05rem; font-weight:700; color:var(--color-primary); margin-bottom:4px; }
.sp-step-body span { font-size:var(--fs-sm); color:var(--color-text-light); line-height:1.6; }
.sp-proof { padding:var(--space-4xl) 0; background:var(--color-bg-alt); }
.sp-proof h2 { font-family:var(--font-heading); font-size:var(--fs-h2); font-weight:800; color:var(--color-primary); margin-bottom:var(--space-md); text-align:center; }
.sp-proof p.answer-block { font-size:var(--fs-body); color:var(--color-text); max-width:62ch; margin:0 auto var(--space-3xl); line-height:1.75; text-align:center; }
.sp-proof-grid { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-xl); margin-bottom:var(--space-3xl); }
.sp-testimonial { background:var(--color-bg); border-radius:14px; padding:var(--space-2xl); box-shadow:var(--shadow-card); position:relative; }
.sp-testimonial::before { content:'\201C'; position:absolute; top:var(--space-md); left:var(--space-xl); font-family:var(--font-heading); font-size:4rem; line-height:1; color:var(--color-accent); opacity:0.4; }
.sp-testimonial p { font-size:var(--fs-sm); color:var(--color-text); line-height:1.75; margin-bottom:var(--space-lg); padding-top:var(--space-xl); }
.sp-testimonial-meta strong { display:block; font-weight:700; color:var(--color-primary); font-size:var(--fs-sm); }
.sp-testimonial-meta span { font-size:var(--fs-xs); color:var(--color-text-light); }
.sp-testimonial-stars { color:var(--color-accent); font-size:0.9rem; letter-spacing:2px; margin-bottom:var(--space-sm); display:block; }
.sp-proof-photos { display:grid; grid-template-columns:1fr 1fr 1fr; gap:var(--space-md); }
.sp-proof-photos img { width:100%; height:220px; object-fit:cover; border-radius:10px; display:block; }
.sp-compare { padding:var(--space-4xl) 0; background:var(--color-primary); color:#fff; }
.sp-compare h2 { font-family:var(--font-heading); font-size:var(--fs-h2); font-weight:800; color:#fff; text-align:center; margin-bottom:var(--space-md); }
.sp-compare p.answer-block { font-size:var(--fs-body); color:rgba(255,255,255,0.75); text-align:center; max-width:58ch; margin:0 auto var(--space-3xl); line-height:1.75; }
.sp-compare-table { display:grid; grid-template-columns:1fr 1fr; gap:var(--space-xl); max-width:900px; margin:0 auto; }
.sp-compare-col { border-radius:14px; padding:var(--space-2xl); }
.sp-compare-col--bad { background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.12); }
.sp-compare-col--good { background:rgba(var(--color-accent-rgb),0.12); border:1px solid rgba(var(--color-accent-rgb),0.30); }
.sp-compare-col h3 { font-family:var(--font-heading); font-size:1.1rem; margin-bottom:var(--space-lg); color:#fff; }
.sp-compare-col--good h3 { color:var(--color-accent); }
.sp-compare-row { display:flex; align-items:flex-start; gap:var(--space-sm); padding:var(--space-sm) 0; border-bottom:1px solid rgba(255,255,255,0.07); }
.sp-compare-row:last-child { border-bottom:none; }
.sp-compare-row svg { flex-shrink:0; margin-top:2px; }
.sp-compare-row span { font-size:var(--fs-sm); color:rgba(255,255,255,0.75); line-height:1.55; }
.sp-compare-col--good .sp-compare-row span { color:rgba(255,255,255,0.90); }
.sp-faq { padding:var(--space-4xl) 0; background:var(--color-bg); }
.sp-faq h2 { font-family:var(--font-heading); font-size:var(--fs-h2); font-weight:800; color:var(--color-primary); text-align:center; margin-bottom:var(--space-md); }
.sp-faq p.answer-block { font-size:var(--fs-body); color:var(--color-text); text-align:center; max-width:60ch; margin:0 auto var(--space-3xl); line-height:1.75; }
.sp-faq-list { max-width:800px; margin:0 auto; display:flex; flex-direction:column; gap:var(--space-md); }
.sp-faq-item { border:1px solid var(--color-border); border-radius:10px; overflow:hidden; }
.sp-faq-question { width:100%; background:none; border:none; display:flex; align-items:center; justify-content:space-between; gap:var(--space-md); padding:var(--space-lg) var(--space-xl); font-family:var(--font-heading); font-size:1.05rem; font-weight:700; color:var(--color-primary); cursor:pointer; text-align:left; }
.sp-faq-question:hover { background:var(--color-bg-alt); }
.sp-faq-question svg { flex-shrink:0; transition:transform var(--transition); color:var(--color-accent-dark); }
.sp-faq-item.open .sp-faq-question svg { transform:rotate(45deg); }
.sp-faq-answer { display:none; padding:0 var(--space-xl) var(--space-lg); font-size:var(--fs-body); color:var(--color-text-light); line-height:1.75; border-top:1px solid var(--color-border); }
.sp-faq-item.open .sp-faq-answer { display:block; }
.sp-final-cta { padding:var(--space-4xl) 0; background:var(--color-bg-alt); text-align:center; }
.sp-final-cta h2 { font-family:var(--font-heading); font-size:var(--fs-h2); font-weight:800; color:var(--color-primary); margin-bottom:var(--space-md); }
.sp-final-cta p { font-size:var(--fs-body); color:var(--color-text-light); max-width:60ch; margin:0 auto var(--space-2xl); line-height:1.75; }
.sp-final-cta .cta-row { display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap; }
.sp-related { padding:var(--space-4xl) 0; background:var(--color-bg); }
.sp-related h2 { font-family:var(--font-heading); font-size:var(--fs-h3); font-weight:800; color:var(--color-primary); text-align:center; margin-bottom:var(--space-3xl); }
.services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:var(--space-md); }
@media (max-width:768px) {
  .services-grid { grid-template-columns:1fr 1fr; }
}
@media (max-width:480px) {
  .services-grid { grid-template-columns:1fr; }
}
.service-card-with-image { border-radius:12px; overflow:hidden; display:flex; flex-direction:column; transition:transform var(--transition),box-shadow var(--transition); }
.service-card-with-image:hover { transform:translateY(-4px); box-shadow:var(--shadow-lg); }
.service-card__image { position:relative; aspect-ratio:5/3; overflow:hidden; }
.service-card__image img { width:100%; height:100%; object-fit:cover; display:block; transition:transform .5s ease; }
.service-card-with-image:hover .service-card__image img { transform:scale(1.04); }
.service-card__body { padding:var(--space-lg) var(--space-md) var(--space-md); text-align:center; display:flex; flex-direction:column; align-items:center; gap:var(--space-sm); position:relative; flex:1; }
.service-card__icon { width:56px; height:56px; border-radius:50%; background:#fff; box-shadow:var(--shadow-md); display:flex; align-items:center; justify-content:center; margin-top:-44px; margin-bottom:var(--space-xs); color:var(--color-accent-dark); flex-shrink:0; }
.service-card__icon svg { width:26px; height:26px; }
.service-card-with-image h3 { font-family:var(--font-heading); color:var(--color-primary); margin:0; font-size:1.25rem; line-height:1.2; }
.service-card-with-image ul { list-style:none; padding:0; margin:var(--space-xs) 0 0; width:100%; text-align:left; display:flex; flex-direction:column; gap:var(--space-xs); border-top:1px solid var(--color-border); padding-top:var(--space-md); }
.service-card-with-image ul li { font-size:var(--fs-sm); color:var(--color-text); padding-left:1.25rem; position:relative; }
.service-card-with-image ul li::before { content:"•"; color:var(--color-accent-dark); font-weight:700; position:absolute; left:.25rem; top:0; }
.service-card__cta { margin-top:auto; padding:var(--space-sm) 0 0; color:var(--color-secondary); font-weight:700; font-size:var(--fs-sm); border-top:1px solid var(--color-border); width:100%; text-align:center; transition:color var(--transition); }
.service-card__cta::after { content:" →"; display:inline-block; transition:transform var(--transition); }
.service-card__cta:hover { color:var(--color-primary); }
.service-card__cta:hover::after { transform:translateX(3px); }
.card-tint-1 { background:var(--color-card-tint-1); }
.card-tint-2 { background:var(--color-card-tint-2); }
.card-tint-3 { background:var(--color-card-tint-3); }
@media (max-width:1100px) {
  .sp-hero-layout,.sp-expert-grid,.sp-breakdown-grid,.sp-proof-grid,.sp-compare-table { grid-template-columns:1fr; }
  .sp-hero-card { display:none; }
  .sp-expert-photo { aspect-ratio:16/9; }
  .sp-expert-grid { direction:ltr; }
}
@media (max-width:768px) {
  .sp-bento { grid-template-columns:1fr 1fr; }
  .sp-proof-photos { grid-template-columns:1fr 1fr; }
}
@media (max-width:480px) {
  .sp-bento,.sp-includes-list,.sp-proof-photos { grid-template-columns:1fr; }
  .sp-hero-actions { flex-direction:column; }
}
.reveal-up { opacity:0; transform:translateY(28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-left { opacity:0; transform:translateX(-28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-right { opacity:0; transform:translateX(28px); transition:opacity .65s ease,transform .65s ease; }
.reveal-scale { opacity:0; transform:scale(.93); transition:opacity .65s ease,transform .65s ease; }
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible { opacity:1; transform:none; }
.reveal-delay-1 { transition-delay:.1s }
.reveal-delay-2 { transition-delay:.2s }
.reveal-delay-3 { transition-delay:.3s }
.reveal-delay-4 { transition-delay:.4s }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <section class="sp-hero" aria-label="Kitchen remodeling hero">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><i data-lucide="utensils"></i> Kitchen Remodeling</span>
            <h1>Kitchen Remodeling in<br><em>Mount Vernon, OR</em></h1>
            <p class="hero-answer">Kitchen remodeling in Mount Vernon demands more than standard design—it requires understanding our region's unique climate challenges and building codes. At Superior Home Builders, we pair personalized design consultation with sustainable, energy-efficient solutions specifically engineered for Mount Vernon homes. Whether you're investing in essential updates or a complete high-end transformation, our transparent pricing and detailed timelines ensure you know exactly what to expect. We back every remodel with comprehensive warranty coverage and dedicated post-build support—because your kitchen should serve your family for decades to come.</p>
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
            <h3>Kitchen remodel fast facts</h3>
            <ul>
              <li><i data-lucide="clock"></i> Typical timeline: 4–8 weeks</li>
              <li><i data-lucide="dollar-sign"></i> Range: $18K – $65K+</li>
              <li><i data-lucide="layers"></i> Custom, semi-custom, or stock cabinets</li>
              <li><i data-lucide="check-circle"></i> Permits handled for you</li>
              <li><i data-lucide="users"></i> One crew — no sub-coordinator chaos</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Consultation</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Kitchen Remodeling</span>
        </nav>
      </div>
    </div>
  </section>

  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <section class="sp-problem" aria-label="Signs you need a kitchen remodel">
    <div class="container">
      <div class="sp-problem-floating"></div>
      <blockquote class="sp-problem-pull reveal-up">
        "A kitchen that doesn't fit your life isn't a minor inconvenience — it costs you time every single day."
      </blockquote>
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><i data-lucide="layout-dashboard"></i></div>
          <h3>Layout that fights you</h3>
          <p>The classic "work triangle" between sink, stove, and fridge matters. Too much distance, a door that interrupts the flow, or a peninsula that blocks traffic makes cooking frustrating — and layout changes are the most valuable kitchen investment you can make.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><i data-lucide="package-open"></i></div>
          <h3>Storage that falls short</h3>
          <p>Shallow upper cabinets that don't reach the ceiling, base cabinets with no pull-outs, and zero pantry space are hallmarks of kitchens built before storage was a priority. A modern kitchen layout captures every inch.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><i data-lucide="alert-triangle"></i></div>
          <h3>Surfaces past their life</h3>
          <p>Laminate countertops that have delaminated, tile grout that won't stay clean, and cabinet boxes with swollen sides from years of steam aren't cosmetic problems — they're hygiene and structural issues that a surface update won't fix.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><i data-lucide="zap"></i></div>
          <h3>Electrical not up to code</h3>
          <p>Modern kitchens require GFCI protection at every outlet near the sink, dedicated circuits for large appliances, and often an updated panel. Eastern Oregon homes from the 1970s–90s frequently don't meet current code — and buyers and appraisers notice.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,10 C480,60 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <section class="sp-expert" aria-label="Why choose Superior Home Builders for kitchen remodeling">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-content reveal-left">
          <h2>Why do Grant County homeowners trust Superior Home Builders with their kitchen renovation?</h2>
          <p class="answer-block">Kitchen remodels involve more trades in a tighter sequence than any other room in the house — demo, rough plumbing, rough electrical, cabinet delivery and install, countertop template and fabrication, appliance installation, and finish work. When these don't coordinate, timelines collapse. We've been running these sequences in Eastern Oregon homes for over two decades.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>We handle the entire sequence</strong>
                <span>From demo through appliance hookup, Superior Home Builders coordinates every trade. Cabinet fabricators, countertop fabricators, and appliance delivery all schedule around our project timeline — not the other way around.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Experience opening walls in Grant County homes</strong>
                <span>Many of our clients want to open the kitchen to the dining or living room. We've done this dozens of times in Eastern Oregon ranchers and farmhouses — we know what headers those walls need and how to do it cleanly.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>No change-order surprises</strong>
                <span>We inspect the space before writing the estimate. Hidden conditions still happen — but because we've built in Grant County for 20+ years, we know what to look for and price for it upfront.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
        <div class="sp-expert-photo reveal-scale">
          <img src="/assets/images/kitchen-remodel-in-progress.webp"
               alt="Kitchen remodeling project in progress in Mount Vernon Oregon by Superior Home Builders"
               width="420" height="520" loading="lazy">
          <div class="sp-expert-photo-badge">Grant County's Kitchen Specialists</div>
        </div>
      </div>
    </div>
  </section>

  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <section class="sp-breakdown" aria-label="What's included in a kitchen remodel">
    <div class="container">
      <div class="sp-breakdown-grid">
        <div class="reveal-left">
          <h2>What does a full kitchen remodel from Superior Home Builders include?</h2>
          <p class="answer-block">Every project is scoped to your goals. Here's what's covered in a standard mid-range to full kitchen renovation in Mount Vernon, OR — your estimate will specify exactly which items apply.</p>
          <ul class="sp-includes-list">
            <li><i data-lucide="check"></i> Demo &amp; debris removal</li>
            <li><i data-lucide="check"></i> Subfloor inspection &amp; prep</li>
            <li><i data-lucide="check"></i> Rough plumbing &amp; relocation</li>
            <li><i data-lucide="check"></i> Rough electrical &amp; GFCI</li>
            <li><i data-lucide="check"></i> Cabinet installation</li>
            <li><i data-lucide="check"></i> Countertop template &amp; install</li>
            <li><i data-lucide="check"></i> Tile backsplash</li>
            <li><i data-lucide="check"></i> Appliance hookup</li>
            <li><i data-lucide="check"></i> Sink &amp; faucet installation</li>
            <li><i data-lucide="check"></i> Flooring replacement</li>
            <li><i data-lucide="check"></i> Lighting &amp; ventilation hood</li>
            <li><i data-lucide="check"></i> Permits &amp; inspections</li>
          </ul>
          <a href="/contact/" class="btn btn-primary">Request a Free Estimate</a>
        </div>
        <div class="reveal-right">
          <div style="margin-bottom:var(--space-lg)">
            <h3 style="font-family:var(--font-heading);font-size:1.4rem;color:var(--color-primary);margin-bottom:var(--space-md)">How does the kitchen remodel process work?</h3>
          </div>
          <div class="sp-process-timeline">
            <div class="sp-step">
              <div class="sp-step-num">1</div>
              <div class="sp-step-body">
                <strong>On-site consultation &amp; written estimate</strong>
                <span>We measure, assess, and listen. You'll receive a written estimate covering every line item — cabinets, countertops, labor, permits — so you know the total cost before committing.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">2</div>
              <div class="sp-step-body">
                <strong>Demo, rough plumbing &amp; electrical</strong>
                <span>Old cabinets and surfaces come out. Plumbing and electrical are roughed in for the new layout. We inspect the subfloor and fix anything that needs repair before new materials go down.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">3</div>
              <div class="sp-step-body">
                <strong>Cabinets, countertops &amp; tile</strong>
                <span>Cabinets are set and leveled. Countertop template is taken for fabrication. Flooring and backsplash tile are installed. This phase determines the look — and we take the time to get it right.</span>
              </div>
            </div>
            <div class="sp-step">
              <div class="sp-step-num">4</div>
              <div class="sp-step-body">
                <strong>Appliances, fixtures &amp; final inspection</strong>
                <span>Countertops are set. Appliances, sink, faucet, and lighting are installed. We schedule permit inspections, walk through the finished kitchen with you, and leave the site clean.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C720,60 720,0 1440,30 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <section class="sp-proof" aria-label="Customer reviews and project photos">
    <div class="container">
      <h2>What do Mount Vernon homeowners say about their kitchen remodel?</h2>
      <p class="answer-block">Verified projects from Grant County, John Day, and Prairie City homeowners who worked with Superior Home Builders on kitchen renovations.</p>
      <div class="sp-proof-grid reveal-up">
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"We had both the kitchen and master bath redone at the same time. The crew kept the mess contained and finished ahead of schedule. The new cabinet layout opened up the whole room — wish we'd done this years ago."</p>
          <div class="sp-testimonial-meta">
            <strong>Mike R.</strong>
            <span>Mount Vernon, OR — Kitchen &amp; Bathroom Remodel</span>
          </div>
        </div>
        <div class="sp-testimonial">
          <span class="sp-testimonial-stars">★★★★★</span>
          <p>"Dan and Carol hired Superior for a whole-house renovation. The kitchen was the heart of it — they opened the wall to the dining room and installed custom cabinets throughout. The crew found hidden issues and handled them without surprise charges."</p>
          <div class="sp-testimonial-meta">
            <strong>Dan &amp; Carol F.</strong>
            <span>Prairie City, OR — General Remodeling</span>
          </div>
        </div>
      </div>
      <div class="sp-proof-photos reveal-scale">
        <img src="/assets/images/kitchen-remodel-mount-vernon.webp"
             alt="Completed kitchen remodel in Mount Vernon Oregon by Superior Home Builders" width="400" height="220" loading="lazy">
        <img src="/assets/images/kitchen-remodel-in-progress.webp"
             alt="Kitchen cabinet installation by Superior Home Builders in Grant County Oregon" width="400" height="220" loading="lazy">
        <img src="/assets/images/kitchen-countertop-backsplash.webp"
             alt="Kitchen countertop and backsplash tile in a Mount Vernon home" width="400" height="220" loading="lazy">
      </div>
    </div>
  </section>

  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,30 C480,0 960,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <section class="sp-compare" aria-label="Why choose Superior Home Builders for kitchen remodeling">
    <div class="container">
      <h2 class="reveal-up">How does Superior Home Builders compare to other kitchen contractors near Mount Vernon?</h2>
      <p class="answer-block reveal-up reveal-delay-1">Kitchen remodels fail most often due to scheduling gaps between sub-contractors. Here's how we're different in Grant County.</p>
      <div class="sp-compare-table">
        <div class="sp-compare-col sp-compare-col--bad reveal-left">
          <h3>Typical contractor</h3>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Cabinet delivery and counter template aren't coordinated</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Appliance hookup is "not my job"</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Wall removal not quoted upfront</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Verbal estimates that shift at invoice time</span></div>
          <div class="sp-compare-row"><i data-lucide="x-circle" style="color:#f87171;width:18px;height:18px"></i><span>Don't know local building codes</span></div>
        </div>
        <div class="sp-compare-col sp-compare-col--good reveal-right">
          <h3>Superior Home Builders</h3>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Delivery, template, and install sequenced on one schedule</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Full scope — appliances, faucets, and lighting included</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Structural changes assessed and priced in the estimate</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>Written, itemized estimate — scope is locked</span></div>
          <div class="sp-compare-row"><i data-lucide="check-circle" style="color:var(--color-accent);width:18px;height:18px"></i><span>20+ years building to Oregon code in Grant County</span></div>
        </div>
      </div>
    </div>
  </section>

  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,10 1080,56 1440,15 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <section class="sp-faq" aria-label="Kitchen remodeling FAQ">
    <div class="container">
      <h2 class="reveal-up">Frequently asked questions about kitchen remodeling in Mount Vernon, OR</h2>
      <p class="answer-block reveal-up reveal-delay-1">Straightforward answers for Grant County homeowners planning a kitchen renovation near me in Eastern Oregon.</p>
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

  <section class="sp-final-cta" aria-label="Get a free kitchen remodel estimate">
    <div class="container reveal-up">
      <h2>Ready to upgrade your kitchen in Mount Vernon?</h2>
      <p>Get a free, written kitchen remodel estimate from Eastern Oregon's experienced general contractor. On-site visit, written scope, and honest numbers — no pressure, no obligation.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-secondary btn-lg"><i data-lucide="phone"></i> Call Now</a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="sp-related" aria-label="Other services you may need">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <?php
        $relatedItems = [
          ['slug'=>'bathroom-remodeling','icon'=>'bath','photo'=>$siteUrl . '/assets/images/bathroom-remodel-tile.webp','bullets'=>['Tile, fixtures &amp; plumbing','Custom walk-in showers','Full vanity &amp; lighting']],
          ['slug'=>'general-remodeling', 'icon'=>'wrench','photo'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg','bullets'=>['Single rooms to whole homes','Additions &amp; conversions','Interior finish work']],
          ['slug'=>'windows-and-doors',  'icon'=>'door-open','photo'=>$siteUrl . '/assets/images/window-installation-mount-vernon.webp','bullets'=>['Energy-efficient replacements','Vinyl, wood &amp; fiberglass','Entry doors &amp; sliders']],
        ];
        $svcBySlug = [];
        foreach ($services as $s) $svcBySlug[$s['slug']] = $s;
        $tints2 = ['card-tint-1','card-tint-2','card-tint-3'];
        foreach ($relatedItems as $ri => $r):
          $rs = $svcBySlug[$r['slug']] ?? ['name'=>$r['slug'],'slug'=>$r['slug']];
        ?>
        <article class="service-card-with-image <?php echo $tints2[$ri % 3]; ?> reveal-up reveal-delay-<?php echo ($ri+1); ?>">
          <div class="service-card__image">
            <img src="<?php echo htmlspecialchars($r['photo']); ?>"
                 alt="<?php echo htmlspecialchars($rs['name']); ?> in Mount Vernon OR"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><i data-lucide="<?php echo $r['icon']; ?>"></i></div>
            <h3><?php echo htmlspecialchars($rs['name']); ?></h3>
            <ul><?php foreach ($r['bullets'] as $b): ?><li><?php echo $b; ?></li><?php endforeach; ?></ul>
            <a href="/services/<?php echo htmlspecialchars($rs['slug']); ?>/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <?php endforeach; ?>
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
