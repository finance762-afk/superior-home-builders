<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Storm Damage Repair in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Storm damage, wind damage, and water damage repair in Eastern Oregon. Structural assessment, insurance documentation support, and full restoration. CCB# 147123, serving Grant and Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/storm-damage-repair/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157610-hamrrh-image_8_.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'What should I do immediately after storm damage to my home in Eastern Oregon?', 'a' => 'First priority is stopping additional damage — not restoring the home. If the roof is breached, cover it with tarps before rain or more snow comes in. If water has entered, remove standing water and get air moving through the space as quickly as possible. Document everything with photos before any cleanup begins — your insurance adjuster needs to see the damage. Then call us for an assessment. We do storm damage evaluations throughout Grant and Harney Counties and can tell you what needs immediate attention versus what can wait.'],
  ['q' => 'Does Superior Home Builders work with homeowners\' insurance on storm damage claims?', 'a' => 'Yes. We document scope, provide written estimates formatted for insurance submission, and communicate with adjusters as needed. We don\'t "deal with insurance" in the sense of guaranteeing outcomes or handling your claim — you or your public adjuster do that. But we give you the documentation and cost data you need, and we can be present for the adjuster inspection if helpful. The key is getting the full damage scope documented before any cleanup obscures it.'],
  ['q' => 'What are the most common storm damage types in Grant County, OR?', 'a' => 'In our 25 years serving Grant County, we see four recurring storm damage patterns: (1) Ice dam damage — water backing up under roofing at eaves and soaking ceiling and wall framing. (2) Heavy snow collapse — particularly on older agricultural buildings with undersized roof framing. (3) Wind damage — damaged siding, lifted roofing, and broken windows from high-desert wind events. (4) Rapid snowmelt water intrusion — flooding in crawl spaces and basements when spring runoff overwhelms drainage.'],
  ['q' => 'Can you repair storm-damaged outbuildings and agricultural structures?', 'a' => 'Yes. Barn and outbuilding repair after storm damage is part of what we do. This includes collapsed sections from snow load, wind damage to metal roofing and siding panels, and water damage to interior structures. Agricultural building repairs follow the same process as residential — we assess, document, estimate, and repair. Harney County agricultural structures in the Burns and Hines area are within our service area.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                'url' => $siteUrl . '/'],
  ['name' => 'Services',            'url' => $siteUrl . '/services/'],
  ['name' => 'Storm Damage Repair', 'url' => $siteUrl . '/services/storm-damage-repair/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/storm-damage-repair/#service',
  'name'        => 'Storm Damage Repair',
  'url'         => $siteUrl . '/services/storm-damage-repair/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Storm damage, wind damage, and water damage repair in Eastern Oregon. Structural assessment, insurance documentation support, emergency tarping, and full restoration to pre-loss condition. Serving Grant and Harney Counties since 2001. CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Storm Damage Repair Service Page — page-specific styles ─────────────── */
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
  <section class="sp-hero" aria-label="Storm damage repair in Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('cloud-lightning'); ?> Storm Damage Repair</span>
            <h1>Storm Damage Repair in <em>Eastern Oregon</em></h1>
            <p class="hero-answer">Superior Home Builders responds to storm damage, water damage, and wind damage repair needs across Eastern Oregon. We assess structural damage, help document losses for insurance when needed, and restore your home or building to pre-loss condition. Eastern Oregon's weather is hard on buildings — we've been fixing storm damage in Grant and Harney Counties since 2001.</p>
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
            <h3>Storm damage response</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Storm, wind &amp; water damage repair</li>
              <li><?php echo lucide_icon('check-circle'); ?> Structural assessment after damage</li>
              <li><?php echo lucide_icon('check-circle'); ?> Insurance documentation support</li>
              <li><?php echo lucide_icon('check-circle'); ?> Emergency tarping &amp; water stop</li>
              <li><?php echo lucide_icon('check-circle'); ?> Grant &amp; Harney Counties</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Get a Written Estimate</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Storm Damage Repair</span>
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
  <section aria-label="Storm damage types in Eastern Oregon" style="background:var(--color-bg)">
    <div class="container">
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('cloud-snow'); ?></div>
          <h3>Eastern Oregon storm damage patterns</h3>
          <p>Grant and Harney Counties see four recurring storm damage types: ice dam damage in winter, heavy snowfall collapse on older structures, wind damage from high-desert wind events, and water intrusion during rapid spring snowmelt. Knowing what pattern you're dealing with determines the right repair sequence.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
          <h3>Water damage — act fast</h3>
          <p>Water damage worsens with every hour it's not addressed. Standing water that reaches structural wood, insulation, or drywall sets off a damage cascade that multiplies repair costs. First priority is stopping additional water intrusion and removing standing water — documentation and permanent repairs come after the immediate threat is contained.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('wind'); ?></div>
          <h3>Wind damage — common in high-desert terrain</h3>
          <p>High-desert wind events in Eastern Oregon produce specific damage patterns — lifted metal roofing panels, damaged siding, broken windows, and toppled fencing. Wind damage often creates secondary water intrusion points that aren't visible immediately. We assess the full damage scope, not just the obvious entry points.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('file-text'); ?></div>
          <h3>Working with insurance on storm claims</h3>
          <p>We document damage scope and provide written estimates formatted for insurance submission. We don't manage your claim, but we give you the documentation and cost data your adjuster needs, and we can be present at the adjuster inspection when it's helpful. Complete documentation before any cleanup begins is essential.</p>
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
  <section aria-label="Storm damage repair experience in Eastern Oregon" style="background:var(--color-bg-alt)">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Storm damage repair work in Eastern Oregon by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Storm Repair Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>What types of storm damage does Superior Home Builders repair in Eastern Oregon?</h2>
          <p class="answer-block">Eastern Oregon's weather produces specific damage patterns — ice dam damage to roofs and ceilings in winter, heavy snowfall roof collapses on older agricultural buildings, wind damage from high-desert wind events, and water intrusion during rapid snowmelt. We've repaired all of these across Grant and Harney Counties, and we know how to document damage for insurance purposes and prioritize repairs to prevent further loss.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Eastern Oregon damage patterns are specific</strong>
                <span>Contractors from western Oregon regularly underestimate the damage patterns in Grant and Harney Counties. Ice dam damage, snow load collapse, and high-desert wind damage each require a different assessment and repair sequence. We've seen all of them across 25 years working in this climate.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Insurance documentation — we help before repairs begin</strong>
                <span>Once cleanup starts, the documented damage baseline disappears. We help you document the full scope — photos, measurements, written scope — before any debris is moved or temporary repairs are made. That baseline is what your insurance claim is built on.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>We prioritize stopping further damage</strong>
                <span>Emergency tarping, water removal, and temporary structural shoring happen before permanent repairs are scheduled. Stopping the damage cascade is the first job. Permanent restoration is the second. Getting that sequence wrong turns a $10,000 repair into a $40,000 one.</span>
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
  <section class="sp-section-bg" aria-label="Storm damage repair scope in Eastern Oregon">
    <div class="container" style="max-width:760px">
      <h2>What storm damage repair work does Superior Home Builders handle in Eastern Oregon?</h2>
      <ul class="sp-includes-list reveal-up">
        <li><?php echo lucide_icon('check'); ?> Damage assessment &amp; documentation</li>
        <li><?php echo lucide_icon('check'); ?> Emergency tarping &amp; weather protection</li>
        <li><?php echo lucide_icon('check'); ?> Roof damage repair or replacement</li>
        <li><?php echo lucide_icon('check'); ?> Siding &amp; exterior damage repair</li>
        <li><?php echo lucide_icon('check'); ?> Structural framing repair</li>
        <li><?php echo lucide_icon('check'); ?> Water damage remediation</li>
        <li><?php echo lucide_icon('check'); ?> Insulation replacement (wet insulation removed)</li>
        <li><?php echo lucide_icon('check'); ?> Drywall repair &amp; finishing</li>
        <li><?php echo lucide_icon('check'); ?> Window &amp; door replacement after damage</li>
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
  <section aria-label="Storm damage repair FAQ for Eastern Oregon" style="background:var(--color-bg-alt);padding:var(--space-4xl) 0">
    <div class="container">
      <h2 style="font-family:var(--font-heading);font-size:clamp(1.6rem,2.8vw,2.2rem);font-weight:800;color:var(--color-primary);text-align:center;text-wrap:balance;margin-bottom:var(--space-3xl)">Frequently asked questions about storm damage repair near Mount Vernon, OR</h2>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-sdr-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-sdr-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get storm damage assessment in Eastern Oregon">
    <div class="container">
      <h2>Storm or wind damage to your home in Eastern Oregon?</h2>
      <p>Superior Home Builders assesses and repairs storm damage across Grant and Harney Counties. We document the full scope for insurance, stop additional damage first, and restore your home to pre-loss condition. Call us for an assessment — we've been doing this in Eastern Oregon since 2001.</p>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604305411-iws3zu-467311955_10160913944502734_1381678653232378695_n.jpg"
                 alt="Metal roofing by Superior Home Builders in Grant County Oregon"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('home'); ?></div>
            <h3>Roofing</h3>
            <ul>
              <li>Metal roofing for snow loads</li>
              <li>Mobile home roof-overs</li>
              <li>Permits handled sitewide</li>
            </ul>
            <a href="/services/roofing/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://i.imgur.com/F8nscr8.jpeg"
                 alt="Insulation installation in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('layers'); ?></div>
            <h3>Insulation &amp; Drywall</h3>
            <ul>
              <li>Batt, blown-in &amp; rigid options</li>
              <li>Sheetrock installation &amp; repair</li>
              <li>Eastern OR climate specs</li>
            </ul>
            <a href="/services/insulation/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157333-7yq7b6-image_7_.jpg"
                 alt="General remodeling work in Eastern Oregon by Superior Home Builders"
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
