<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Interior & Exterior Painting in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Professional interior and exterior painting in Mount Vernon, OR. UV-rated exterior coatings for Eastern Oregon\'s high-desert climate. CCB# 147123, serving Grant and Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/painting/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157333-7yq7b6-image_7_.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'How often does exterior paint need to be redone in Eastern Oregon?',
   'a' => 'At elevations above 3,000 feet in Eastern Oregon, exterior paint typically needs repainting every 6–10 years depending on sun exposure, wind abrasion, and paint quality. South-facing and west-facing walls take the most UV and often show wear first. Using a high-quality 100% acrylic exterior paint with UV inhibitors extends that timeline. We inspect the existing paint condition as part of our estimate and can tell you whether you\'re due for a full repaint or just spot touch-ups and caulking.'],
  ['q' => 'Do you paint commercial buildings in Grant and Harney Counties?',
   'a' => 'Yes. Commercial exterior painting — storefronts, warehouses, agricultural buildings, government buildings — is part of what we do. Commercial paint jobs require proper surface prep on larger areas, the right products for different substrates (metal, wood, masonry), and the ability to work around business hours when needed. Contact us for an estimate on your commercial property.'],
  ['q' => 'Can you paint over existing siding or do you need to remove it first?',
   'a' => 'In most cases, existing siding can be painted over if it\'s structurally sound and properly prepped. That means scraping all peeling paint, sanding rough areas, spot-priming bare wood, and caulking any gaps before the topcoat goes on. Skipping prep is the most common cause of premature paint failure. If the siding itself is failing — soft spots, rot, damage — we\'ll tell you and recommend replacement before painting.'],
  ['q' => 'What\'s the process for getting an interior painting estimate?',
   'a' => 'We do an in-person walkthrough to assess room count and condition, ceiling heights, trim type, and any prep work needed. We give you a written quote that itemizes rooms, surfaces included, and the paint products we\'re specifying. No in-person visit, no accurate estimate — painting costs vary too much by condition and scope to quote blind.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',     'url' => $siteUrl . '/'],
  ['name' => 'Services', 'url' => $siteUrl . '/services/'],
  ['name' => 'Interior & Exterior Painting', 'url' => $siteUrl . '/services/painting/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/painting/#service',
  'name'        => 'Interior & Exterior Painting',
  'url'         => $siteUrl . '/services/painting/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Professional interior and exterior painting in Mount Vernon, OR. UV-rated exterior coatings for Eastern Oregon\'s intense UV, high-desert temperature swings, and wind abrasion. Serving Grant and Harney Counties since 2001. CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
.sp-hero{position:relative;min-height:65vh;display:flex;align-items:center;background-image:url('<?php echo $heroImageUrl;?>');background-size:cover;background-position:center 35%;padding-top:var(--nav-height)}
.sp-hero::before{content:'';position:absolute;inset:0;background:linear-gradient(115deg,rgba(var(--color-primary-rgb),0.91) 0%,rgba(var(--color-secondary-rgb),0.75) 52%,rgba(var(--color-primary-rgb),0.50) 100%);z-index:1}
.sp-hero::after{content:'';position:absolute;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");background-size:200px;z-index:2;pointer-events:none}
.sp-hero-inner{position:relative;z-index:3;width:100%;padding:var(--space-4xl) 0 var(--space-3xl)}
.sp-hero-layout{display:grid;grid-template-columns:1fr 380px;gap:var(--space-3xl);align-items:center}
.sp-hero-eyebrow{display:inline-flex;align-items:center;gap:var(--space-xs);background:rgba(var(--color-accent-rgb),0.15);border:1px solid rgba(var(--color-accent-rgb),0.35);color:var(--color-accent);font-size:var(--fs-xs);font-weight:700;letter-spacing:0.12em;text-transform:uppercase;padding:5px var(--space-md);border-radius:100px;margin-bottom:var(--space-md)}
.sp-hero h1{font-family:var(--font-heading);font-size:var(--fs-h1);font-weight:800;line-height:1.05;color:#fff;text-wrap:balance;margin-bottom:var(--space-lg)}
.sp-hero h1 em{font-style:italic;color:var(--color-accent)}
.sp-hero p.hero-answer{font-size:clamp(1rem,1.3vw,1.15rem);color:rgba(255,255,255,0.85);max-width:60ch;line-height:1.75;margin-bottom:var(--space-xl)}
.sp-hero-trust{display:flex;flex-wrap:wrap;gap:var(--space-md);margin-bottom:var(--space-xl)}
.sp-hero-trust-item{display:flex;align-items:center;gap:var(--space-xs);font-size:var(--fs-sm);color:rgba(255,255,255,0.75)}
.sp-hero-actions{display:flex;gap:var(--space-md);flex-wrap:wrap}
.sp-hero-card{background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.15);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border-radius:16px;padding:var(--space-2xl);color:#fff}
.sp-hero-card h3{font-family:var(--font-heading);font-size:1.3rem;margin-bottom:var(--space-md);text-wrap:balance}
.sp-hero-card ul{list-style:none;padding:0;display:flex;flex-direction:column;gap:var(--space-sm);margin-bottom:var(--space-xl)}
.sp-hero-card ul li{display:flex;align-items:center;gap:var(--space-sm);font-size:var(--fs-sm);color:rgba(255,255,255,0.82)}
.sp-hero-card ul li svg{color:var(--color-accent);flex-shrink:0}
.sp-hero-breadcrumb{margin-top:var(--space-2xl);font-size:var(--fs-xs);color:rgba(255,255,255,0.50)}
.sp-hero-breadcrumb a{color:rgba(255,255,255,0.65)}
.sp-divider{display:block;width:100%;overflow:hidden;line-height:0}
.sp-divider svg{display:block;width:100%}
.sp-bento{display:grid;grid-template-columns:repeat(4,1fr);gap:var(--space-md);padding:var(--space-4xl) 0}
.sp-bento-card{border-radius:12px;padding:var(--space-xl) var(--space-lg)}
.sp-bento-card:nth-child(1){background:var(--color-card-tint-1)}
.sp-bento-card:nth-child(2){background:var(--color-card-tint-2)}
.sp-bento-card:nth-child(3){background:var(--color-card-tint-3)}
.sp-bento-card:nth-child(4){background:var(--color-card-tint-neutral)}
.sp-bento-card .icon-wrap{width:44px;height:44px;border-radius:10px;background:var(--color-accent);display:flex;align-items:center;justify-content:center;margin-bottom:var(--space-md);color:var(--color-primary)}
.sp-bento-card h3{font-family:var(--font-heading);font-size:1.05rem;font-weight:700;color:var(--color-primary);margin-bottom:var(--space-sm)}
.sp-bento-card p{font-size:var(--fs-sm);color:var(--color-text-light);line-height:1.6}
.sp-expert-grid{display:grid;grid-template-columns:420px 1fr;gap:var(--space-3xl);align-items:center;padding:var(--space-4xl) 0}
.sp-expert-photo{position:relative;border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:4/5;box-shadow:var(--shadow-lg)}
.sp-expert-photo img{width:100%;height:100%;object-fit:cover;display:block}
.sp-expert-photo::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,transparent 55%,rgba(var(--color-primary-rgb),0.52) 100%)}
.sp-expert-photo-badge{position:absolute;bottom:var(--space-lg);left:var(--space-lg);background:var(--color-accent);color:var(--color-primary);font-family:var(--font-heading);font-weight:800;font-size:0.9rem;padding:var(--space-sm) var(--space-md);border-radius:8px;z-index:2}
.sp-expert-content h2{font-family:var(--font-heading);font-size:var(--fs-h2);font-weight:800;color:var(--color-primary);text-wrap:balance;margin-bottom:var(--space-md)}
.sp-expert-points{display:flex;flex-direction:column;gap:var(--space-lg);margin:var(--space-xl) 0}
.sp-expert-point{display:flex;gap:var(--space-md);align-items:flex-start}
.sp-expert-point .num{font-family:var(--font-heading);font-size:1.5rem;font-weight:900;color:var(--color-accent-dark);min-width:34px;line-height:1}
.sp-expert-point div strong{display:block;font-family:var(--font-heading);font-size:1rem;font-weight:700;color:var(--color-primary);margin-bottom:2px}
.sp-expert-point div span{font-size:var(--fs-sm);color:var(--color-text-light);line-height:1.55}
.sp-includes-list{list-style:none;padding:0;display:flex;flex-direction:column;gap:var(--space-sm);margin:var(--space-lg) 0 var(--space-xl)}
.sp-includes-list li{display:flex;align-items:center;gap:var(--space-sm);font-size:var(--fs-sm);color:var(--color-text)}
.sp-includes-list li svg{color:var(--color-accent-dark);flex-shrink:0}
.sp-faq-list{max-width:800px;margin:0 auto;display:flex;flex-direction:column;gap:var(--space-md)}
.sp-faq-item{border:1px solid var(--color-border);border-radius:10px;overflow:hidden}
.sp-faq-question{width:100%;background:none;border:none;display:flex;align-items:center;justify-content:space-between;gap:var(--space-md);padding:var(--space-lg) var(--space-xl);font-family:var(--font-heading);font-size:1.05rem;font-weight:700;color:var(--color-primary);cursor:pointer;text-align:left}
.sp-faq-question:hover{background:var(--color-bg-alt)}
.sp-faq-question svg{flex-shrink:0;transition:transform var(--transition);color:var(--color-accent-dark)}
.sp-faq-item.open .sp-faq-question svg{transform:rotate(45deg)}
.sp-faq-answer{display:none;padding:0 var(--space-xl) var(--space-lg);font-size:var(--fs-body);color:var(--color-text-light);line-height:1.75;border-top:1px solid var(--color-border)}
.sp-faq-item.open .sp-faq-answer{display:block}
.services-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-md)}
.service-card-with-image{border-radius:var(--radius-md);overflow:hidden;display:flex;flex-direction:column;transition:transform var(--transition),box-shadow var(--transition)}
.service-card-with-image:hover{transform:translateY(-4px);box-shadow:var(--shadow-lg)}
.service-card__image{position:relative;aspect-ratio:5/3;overflow:hidden}
.service-card__image img{width:100%;height:100%;object-fit:cover;display:block}
.service-card__body{padding:var(--space-lg) var(--space-md) var(--space-md);text-align:center;display:flex;flex-direction:column;align-items:center;gap:var(--space-sm);position:relative;flex:1}
.service-card__icon{width:56px;height:56px;border-radius:50%;background:#fff;box-shadow:var(--shadow-md);display:flex;align-items:center;justify-content:center;margin-top:-44px;margin-bottom:var(--space-xs);color:var(--color-accent-dark);flex-shrink:0}
.service-card__icon svg{width:26px;height:26px}
.service-card-with-image h3{font-family:var(--font-heading);color:var(--color-primary);margin:0;font-size:1.2rem}
.service-card-with-image ul{list-style:none;padding:0;margin:var(--space-xs) 0 0;width:100%;text-align:left;display:flex;flex-direction:column;gap:var(--space-xs);border-top:1px solid var(--color-border);padding-top:var(--space-md)}
.service-card-with-image ul li{font-size:var(--fs-sm);color:var(--color-text);padding-left:1.25rem;position:relative}
.service-card-with-image ul li::before{content:"•";color:var(--color-accent-dark);font-weight:700;position:absolute;left:.25rem}
.service-card__cta{margin-top:auto;padding:var(--space-sm) 0 0;color:var(--color-secondary);font-weight:700;font-size:var(--fs-sm);border-top:1px solid var(--color-border);width:100%;text-align:center;transition:color var(--transition)}
.service-card__cta::after{content:" →"}
.service-card__cta:hover{color:var(--color-primary)}
.card-tint-1{background:var(--color-card-tint-1)}.card-tint-2{background:var(--color-card-tint-2)}.card-tint-3{background:var(--color-card-tint-3)}
.reveal-up{opacity:0;transform:translateY(28px);transition:opacity .65s ease,transform .65s ease}
.reveal-left{opacity:0;transform:translateX(-28px);transition:opacity .65s ease,transform .65s ease}
.reveal-right{opacity:0;transform:translateX(28px);transition:opacity .65s ease,transform .65s ease}
.reveal-scale{opacity:0;transform:scale(.93);transition:opacity .65s ease,transform .65s ease}
.reveal-up.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible{opacity:1;transform:none}
.reveal-delay-1{transition-delay:.1s}.reveal-delay-2{transition-delay:.2s}.reveal-delay-3{transition-delay:.3s}.reveal-delay-4{transition-delay:.4s}
@media(max-width:1100px){.sp-hero-layout,.sp-expert-grid{grid-template-columns:1fr}}
@media(max-width:900px){.sp-bento{grid-template-columns:1fr 1fr}.services-grid{grid-template-columns:1fr 1fr}}
@media(max-width:600px){.sp-hero-actions{flex-direction:column}.sp-bento{grid-template-columns:1fr}.services-grid{grid-template-columns:1fr}}
.sp-hero-eyebrow svg{width:14px;height:14px}
.sp-hero-trust-item svg{width:15px;height:15px;color:var(--color-accent);flex-shrink:0}
.sp-hero-breadcrumb .sep{margin:0 var(--space-xs)}
.sp-hero-breadcrumb a:hover{color:var(--color-accent)}
.sp-bento-card .icon-wrap svg{width:22px;height:22px}
.answer-block{font-size:var(--fs-body);color:var(--color-text-light);line-height:1.75;margin-bottom:var(--space-xl)}
.sp-expert-photo-badge{z-index:2}
.sp-includes-list li svg{width:17px;height:17px}
.sp-faq-item:hover{box-shadow:var(--shadow)}
.sp-faq-question svg{width:20px;height:20px}
.sp-faq-item.open .sp-faq-answer{display:block}
.sp-final-cta{padding:var(--space-4xl) 0;background:var(--color-bg);text-align:center}
.sp-final-cta h2{font-family:var(--font-heading);font-size:clamp(1.7rem,3vw,2.5rem);font-weight:800;color:var(--color-primary);text-wrap:balance;margin-bottom:var(--space-md);line-height:1.2}
.sp-final-cta p{font-size:var(--fs-body);color:var(--color-text-light);max-width:58ch;margin:0 auto var(--space-2xl);line-height:1.75}
.cta-row{display:flex;flex-wrap:wrap;gap:var(--space-md);justify-content:center}
.sp-related{padding:var(--space-4xl) 0;background:var(--color-bg-alt)}
.sp-related h2{font-family:var(--font-heading);font-size:clamp(1.5rem,2.5vw,2rem);font-weight:800;color:var(--color-primary);text-align:center;text-wrap:balance;margin-bottom:var(--space-3xl)}
.sp-section-bg{padding:var(--space-4xl) 0;background:var(--color-bg)}
.sp-section-bg h2{font-family:var(--font-heading);font-size:clamp(1.6rem,2.6vw,2.2rem);font-weight:800;color:var(--color-primary);text-wrap:balance;margin-bottom:var(--space-md);line-height:1.2}
@media(max-width:1100px){.sp-hero-card{display:none}}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       1. HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Interior and exterior painting services in Mount Vernon OR">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('paintbrush'); ?> Painting Contractor</span>
            <h1>Interior &amp; Exterior <em>Painting</em> in Eastern Oregon</h1>
            <p class="hero-answer">Superior Home Builders paints homes and commercial buildings inside and out across Grant and Harney Counties. Interior and exterior painting that lasts — using quality paints suited for Eastern Oregon's intense UV, dramatic temperature swings, and dry high-desert air. We've been finishing homes in this climate since 2001.</p>
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
            <h3>Why choose Superior for painting?</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Interior rooms &amp; whole-house painting</li>
              <li><?php echo lucide_icon('check-circle'); ?> Exterior siding &amp; trim</li>
              <li><?php echo lucide_icon('check-circle'); ?> Eastern OR UV-rated exterior coatings</li>
              <li><?php echo lucide_icon('check-circle'); ?> Prep work done right — no shortcuts</li>
              <li><?php echo lucide_icon('check-circle'); ?> Grant &amp; Harney Counties</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule a Painting Estimate</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Interior &amp; Exterior Painting</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- SVG Divider: hero → bento -->
  <div class="sp-divider" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,28 C360,56 1080,0 1440,28 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       2. BENTO
  ═══════════════════════════════════════ -->
  <section style="background:var(--color-bg)" aria-label="Why Eastern Oregon painting requires specialized knowledge">
    <div class="container">
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('sun'); ?></div>
          <h3>UV-rated exterior paint is non-negotiable at altitude</h3>
          <p>At Eastern Oregon elevations, UV degrades exterior paint 30–50% faster than coastal Oregon. Using a standard exterior acrylic without UV inhibitors on a south-facing wall in Grant County means you're repainting in 5–6 years instead of 10. We only spec UV-rated exterior coatings suited for high-desert conditions.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('layers'); ?></div>
          <h3>Proper prep determines paint life</h3>
          <p>No amount of premium paint corrects bad prep. Scraping, sanding, spot-priming bare wood, and caulking all gaps before the topcoat goes on — that's what makes paint adhere and last. Skipping any of those steps is the most common reason exterior paint fails prematurely in Eastern Oregon.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
          <h3>Interior painting — every room type</h3>
          <p>We paint every room type — living areas, bedrooms, kitchens, bathrooms, and stairwells. Interior painting includes walls, ceilings, trim, doors, and cabinets as specified. We mask and protect flooring, fixtures, and adjacent surfaces before starting.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('building-2'); ?></div>
          <h3>Commercial exterior painting</h3>
          <p>Storefronts, warehouses, agricultural buildings, and government structures in Grant and Harney Counties. Commercial painting requires the right products for different substrates — metal, wood, and masonry — and the ability to work around business operations when needed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: bento → expert -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,10 C480,60 960,0 1440,40 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       3. EXPERT SECTION
  ═══════════════════════════════════════ -->
  <section style="background:var(--color-bg-alt)" aria-label="Why painting quality matters more in Eastern Oregon">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Exterior painting work by Superior Home Builders on a Grant County residential property"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Painting Eastern OR Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why does painting quality matter more in Eastern Oregon than in most of the state?</h2>
          <p class="answer-block">Eastern Oregon's UV index is significantly higher than the coast or valley. Exterior paint on a home at 4,000 feet degrades 30–50% faster than the same paint at sea level if the wrong formulation is used. We only specify exterior coatings rated for high-UV and wide temperature range — because the same paint that lasts 10 years in Portland might last 5 here without the right product and prep.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>We prep correctly</strong>
                <span>Scraping, sanding, priming, caulking before any paint goes on. Every surface that will hold paint is cleaned, dried, and properly primed. Prep takes longer than painting in many cases — we don't cut it short because it's where the job's longevity is determined.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Product selection matters</strong>
                <span>We use high-UV rated exterior coatings at altitude. Not every product sold at a paint store is appropriate for Eastern Oregon's UV and temperature swing. We specify products that perform in the actual climate conditions of the project.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>We handle the full scope</strong>
                <span>Walls, trim, ceilings, doors, siding, all of it. No hand-off to a separate crew for different surfaces. The same crew that preps does the finish coat — which means consistent quality and accountability through the whole project.</span>
              </div>
            </div>
          </div>
          <p style="font-size:var(--fs-sm);color:var(--color-text-light);margin-top:var(--space-lg)">Last Updated: <?php echo date('F Y'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SVG Divider: expert → includes -->
  <div class="sp-divider" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,56 1440,20 L1440,56 L0,56 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       4. INCLUDES LIST
  ═══════════════════════════════════════ -->
  <section class="sp-section-bg" aria-label="What is included in a painting project in Mount Vernon OR">
    <div class="container" style="max-width:860px">
      <h2 class="reveal-up">What's included in a painting project in Mount Vernon, OR?</h2>
      <ul class="sp-includes-list">
        <li class="reveal-up reveal-delay-1"><?php echo lucide_icon('check'); ?> Surface prep (scraping, sanding, pressure washing)</li>
        <li class="reveal-up reveal-delay-2"><?php echo lucide_icon('check'); ?> Priming bare or repaired surfaces</li>
        <li class="reveal-up reveal-delay-3"><?php echo lucide_icon('check'); ?> Caulking gaps &amp; penetrations</li>
        <li class="reveal-up reveal-delay-4"><?php echo lucide_icon('check'); ?> Masking &amp; protection of non-painted surfaces</li>
        <li class="reveal-up reveal-delay-1"><?php echo lucide_icon('check'); ?> Interior wall painting (all rooms)</li>
        <li class="reveal-up reveal-delay-2"><?php echo lucide_icon('check'); ?> Interior trim &amp; ceiling</li>
        <li class="reveal-up reveal-delay-3"><?php echo lucide_icon('check'); ?> Exterior siding panels or boards</li>
        <li class="reveal-up reveal-delay-4"><?php echo lucide_icon('check'); ?> Exterior trim, fascia &amp; window surrounds</li>
        <li class="reveal-up reveal-delay-1"><?php echo lucide_icon('check'); ?> Deck &amp; porch floor painting (oil-alkyd)</li>
        <li class="reveal-up reveal-delay-2"><?php echo lucide_icon('check'); ?> Commercial exterior walls</li>
      </ul>
    </div>
  </section>

  <!-- SVG Divider: includes → FAQ -->
  <div class="sp-divider" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 56" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C720,56 1440,0 1440,0 L1440,56 L0,56 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       5. FAQ ACCORDION
  ═══════════════════════════════════════ -->
  <section style="background:var(--color-bg-alt);padding:var(--space-4xl) 0" aria-label="Painting FAQ for Mount Vernon OR">
    <div class="container">
      <h2 style="font-family:var(--font-heading);font-size:clamp(1.6rem,2.8vw,2.3rem);font-weight:800;color:var(--color-primary);text-align:center;text-wrap:balance;margin-bottom:var(--space-md)" class="reveal-up">
        Frequently asked questions about painting near Mount Vernon, OR
      </h2>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-pt-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-pt-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get a free painting estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to paint your home near Mount Vernon, OR?</h2>
      <p>Superior Home Builders has been finishing homes and commercial buildings in Eastern Oregon since 2001. We spec the right products for this climate, prep every surface properly, and stand behind the result. Get a written estimate — no obligation.</p>
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
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=600&q=80"
                 alt="Siding installation by Superior Home Builders in Eastern Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('panels-top-left'); ?></div>
            <h3>Siding</h3>
            <ul>
              <li>Vinyl, metal &amp; wood siding</li>
              <li>Siding repair &amp; replacement</li>
              <li>Eastern OR climate rated</li>
            </ul>
            <a href="/services/siding/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157610-hamrrh-image_8_.jpg"
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
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604111859-dai6kd-20230910_202910.jpg"
                 alt="Fencing installation in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('fence'); ?></div>
            <h3>Fencing</h3>
            <ul>
              <li>Wood, vinyl &amp; metal options</li>
              <li>Ranch &amp; residential fencing</li>
              <li>Grant &amp; Harney Counties</li>
            </ul>
            <a href="/services/fencing/" class="service-card__cta">Learn more</a>
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
