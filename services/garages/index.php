<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Garages & Outbuildings in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Garage construction, garage additions, and tack rooms in Eastern Oregon. Built for snow loads and local permit requirements. CCB# 147123, serving Grant and Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/garages/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'How much does a detached garage cost in Grant County, OR?', 'a' => 'A basic 24x24 detached garage in Grant County typically runs $35,000–$60,000 depending on finish level, roofing choice, and whether it includes electrical and insulation. Larger 30x40 shops run $60,000–$100,000+. RV garages (with 14-foot door height and longer depth) run $50,000–$90,000 for a single-bay. Every project gets a written estimate after a site visit — garage costs vary significantly by site conditions and finish level.'],
  ['q' => 'Can you add a garage to an existing home in Eastern Oregon?', 'a' => 'Yes. Attached garage additions are one of our regular projects throughout the county. We handle foundation work, structural tie-in to the existing house framing, roofline integration, and permits — the full scope. Attached garage additions typically require a more detailed permit submittal than detached structures because of the structural connection to the existing building.'],
  ['q' => 'What is a tack room and can you add one to an existing barn?', 'a' => 'A tack room is a dedicated storage and preparation space for horse equipment — saddles, bridles, blankets, feed — typically located adjacent to or within a horse barn. We build standalone tack rooms as additions to existing barns and as integrated spaces in new pole barn construction. A functional tack room typically runs 10x12 to 12x16, with shelving, rod storage, and good ventilation. We can add one to an existing structure if the framing allows.'],
  ['q' => 'Do you build shop garages in Harney County?', 'a' => 'Yes — shop and garage construction in Burns, Hines, and surrounding Harney County communities is part of our regular service area. Harney County garage projects go through the Harney County Building Department, which we work with on projects requiring county permits.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                 'url' => $siteUrl . '/'],
  ['name' => 'Services',             'url' => $siteUrl . '/services/'],
  ['name' => 'Garages & Outbuildings','url' => $siteUrl . '/services/garages/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/garages/#service',
  'name'        => 'Garages & Outbuildings',
  'url'         => $siteUrl . '/services/garages/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Garage construction, garage additions, and tack rooms in Eastern Oregon. Built for Eastern Oregon snow loads and local permit requirements in Grant and Harney Counties. Serving Mount Vernon, OR and surrounding Eastern Oregon communities since 2001. CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Garages & Outbuildings Service Page — page-specific styles ──────────── */
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
       HERO
  ═══════════════════════════════════════ -->
  <section class="sp-hero" aria-label="Garage construction in Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('building-2'); ?> Garage Builder</span>
            <h1>Garages &amp; Outbuildings in <em>Eastern Oregon</em></h1>
            <p class="hero-answer">Superior Home Builders constructs garages, garage additions, and tack rooms throughout Eastern Oregon. Whether you need a detached garage, an addition to your existing attached garage, or a tack room to serve your equine operation, we build to match your property, your use, and your budget.</p>
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
            <h3>Garages built for Eastern OR</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Detached &amp; attached garage builds</li>
              <li><?php echo lucide_icon('check-circle'); ?> Garage additions &amp; expansions</li>
              <li><?php echo lucide_icon('check-circle'); ?> Tack rooms for equine operations</li>
              <li><?php echo lucide_icon('check-circle'); ?> Concrete floors &amp; overhead doors</li>
              <li><?php echo lucide_icon('check-circle'); ?> Grant &amp; Harney Counties</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Get a Written Estimate</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Garages &amp; Outbuildings</span>
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
       BENTO SECTION
  ═══════════════════════════════════════ -->
  <section aria-label="Garage types and options in Eastern Oregon" style="background:var(--color-bg)">
    <div class="container">
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('ruler'); ?></div>
          <h3>Detached garages — sizing and siting</h3>
          <p>Detached garage size depends on your use — single-car storage runs 12x20, a standard two-car is 24x24, and shop garages that need room to work around a vehicle start at 30x40. We help you think through the siting on your property, setback requirements, and utility connections before committing to a design.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('home'); ?></div>
          <h3>Attached garage additions</h3>
          <p>Attached garage additions require structural tie-in to the existing house framing, roofline integration, and a more detailed permit submittal because of the structural connection to the existing building. We handle foundation work, framing, roofline, siding, and permits — the full scope of the addition.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('layers'); ?></div>
          <h3>Tack rooms for horses</h3>
          <p>A tack room is dedicated storage for horse equipment — saddles, bridles, blankets, and feed — located adjacent to or within a horse barn. We build standalone tack rooms as additions to existing barns and as integrated spaces in new pole barn construction. Standard tack room footprints run 10x12 to 12x16.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('square'); ?></div>
          <h3>Concrete &amp; overhead door work</h3>
          <p>Garage concrete floor pours, overhead door installation, and personnel door framing and hardware are part of our garage scope. We size overhead doors for the application — standard residential, RV height clearance, or wide shop openings. Openers and hardware installed and operational at project completion.</p>
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
       EXPERT SECTION
  ═══════════════════════════════════════ -->
  <section aria-label="Building garages for Eastern Oregon climate" style="background:var(--color-bg-alt)">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Garage construction in Eastern Oregon by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Building in Eastern OR Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>What goes into building a garage that works in Eastern Oregon's climate?</h2>
          <p class="answer-block">Garages in Eastern Oregon need to handle snow loads, stick to permit specs in Grant and Harney Counties, and be built for the temperature range. A standard valley garage spec may pass code but won't perform well at 4,000 feet. We size the roof framing for local snow loads, set the footings below frost depth, and spec the overhead door for the application — whether it's a shop door that needs to handle wind or an RV door with the right height clearance.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Roof framing engineered for local snow loads</strong>
                <span>Grant County's ground snow loads at higher elevations require roof framing designed beyond standard residential specs. We size rafters and collar ties for the actual design snow load at your site elevation — not generic Willamette Valley assumptions that don't apply in Eastern Oregon.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Footings below frost depth</strong>
                <span>Standard frost depth in Eastern Oregon is 24–30 inches depending on location and elevation. Footings set above frost depth heave and crack slabs and foundation walls. We pour footings below frost depth and size them for the structural loads of the garage above.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Overhead door sizing for your use</strong>
                <span>Standard residential overhead doors are 7 feet tall. If you're storing an RV, a pickup with a topper, or farm equipment, you need 10–14 foot doors. We spec the door opening before framing starts — changing it after the fact is expensive. We also spec door width for single, double, and double-wide shop configurations.</span>
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
       INCLUDES LIST SECTION
  ═══════════════════════════════════════ -->
  <section class="sp-section-bg" aria-label="What is included in a garage build in Mount Vernon OR">
    <div class="container" style="max-width:760px">
      <h2>What's included in a garage build in Mount Vernon, OR?</h2>
      <ul class="sp-includes-list reveal-up">
        <li><?php echo lucide_icon('check'); ?> Foundation design &amp; concrete pour</li>
        <li><?php echo lucide_icon('check'); ?> Framing &amp; structural work</li>
        <li><?php echo lucide_icon('check'); ?> Metal roofing or OSB &amp; shingles</li>
        <li><?php echo lucide_icon('check'); ?> Siding installation (metal or T1-11)</li>
        <li><?php echo lucide_icon('check'); ?> Overhead door &amp; opener</li>
        <li><?php echo lucide_icon('check'); ?> Personnel door &amp; hardware</li>
        <li><?php echo lucide_icon('check'); ?> Electrical rough-in &amp; lighting</li>
        <li><?php echo lucide_icon('check'); ?> Concrete floor pour</li>
        <li><?php echo lucide_icon('check'); ?> Insulation option available</li>
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
       FAQ SECTION
  ═══════════════════════════════════════ -->
  <section aria-label="Garage construction FAQ for Eastern Oregon" style="background:var(--color-bg-alt);padding:var(--space-4xl) 0">
    <div class="container">
      <h2 style="font-family:var(--font-heading);font-size:clamp(1.6rem,2.8vw,2.2rem);font-weight:800;color:var(--color-primary);text-align:center;text-wrap:balance;margin-bottom:var(--space-3xl)">Frequently asked questions about garage construction near Mount Vernon, OR</h2>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-gar-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-gar-<?php echo $i; ?>">
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
       FINAL CTA SECTION
  ═══════════════════════════════════════ -->
  <section class="sp-final-cta" aria-label="Get an estimate for a garage in Eastern Oregon">
    <div class="container">
      <h2>Ready to build a garage in Eastern Oregon?</h2>
      <p>Superior Home Builders constructs garages, shop buildings, and tack rooms throughout Grant and Harney Counties. We spec for local snow loads, pull permits with the county, and build structures that work in Eastern Oregon's climate. Get a written estimate for your garage project.</p>
      <div class="cta-row">
        <a href="/contact/" class="btn btn-primary btn-lg">Get a Written Estimate</a>
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
       RELATED SERVICES SECTION
  ═══════════════════════════════════════ -->
  <section class="sp-related" aria-label="Other construction services in Eastern Oregon">
    <div class="container">
      <h2>Other Services You May Need</h2>
      <div class="services-grid">
        <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604089870-onrdei-20220414_073700.jpg"
                 alt="Pole barn construction in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('warehouse'); ?></div>
            <h3>Pole Barns</h3>
            <ul>
              <li>Agricultural &amp; residential</li>
              <li>Steel roofing &amp; siding</li>
              <li>Open or enclosed options</li>
            </ul>
            <a href="/services/pole-barns/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604094227-1d9fl5-20220724_151623.jpg"
                 alt="Residential framing in Eastern Oregon by Superior Home Builders"
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
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg"
                 alt="Custom home building in Grant County Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('home'); ?></div>
            <h3>Custom Home Building</h3>
            <ul>
              <li>Full custom construction</li>
              <li>Design-to-completion</li>
              <li>Eastern OR climate built</li>
            </ul>
            <a href="/services/custom-home-building/" class="service-card__cta">Learn more</a>
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
