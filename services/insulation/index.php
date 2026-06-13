<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Insulation & Drywall in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Insulation installation and drywall services in Mount Vernon, OR. Batt, blown-in, and rigid insulation spec\'d for Eastern Oregon\'s climate. CCB# 147123, serving Grant and Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/insulation/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604097152-jcl4h7-20220724_152509.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'How much insulation do homes in Eastern Oregon need?',
   'a' => 'Current Oregon Energy Code requires R-21 in 2x6 walls, R-38–49 in ceilings, and R-19–30 in floors over unconditioned spaces for this climate zone. Many older homes in Grant and Harney Counties have R-11 (or less) in walls and minimal attic insulation. Bringing an older home up to current standards makes a significant difference in heating costs — especially relevant when propane is the fuel source and winter temperatures reach -10°F to -20°F in some Grant County communities.'],
  ['q' => 'What type of insulation is best for Eastern Oregon homes?',
   'a' => 'For attic spaces on existing homes, blown-in fiberglass or cellulose is the most practical option since it fills around existing framing and penetrations. For new wall framing, faced fiberglass batts are the most common. For crawl spaces, a combination of rigid foam on the stem walls and a vapor barrier on the ground is standard in this climate zone. We assess each project and recommend the approach that fits the structure and budget.'],
  ['q' => 'Do you do sheetrock work as part of remodeling projects?',
   'a' => 'Yes. Drywall installation and repair is part of our remodeling scope — we don\'t subcontract it out on general remodeling projects. Sheetrock repair for patched walls after electrical or plumbing work, new board and tape in additions, and full interior finishes in new construction are all part of what we do. We finish to a level appropriate for the final painting or wallpaper application.'],
  ['q' => 'Can you insulate a mobile home or manufactured home?',
   'a' => 'Yes. Mobile homes present some unique insulation challenges — belly boards that have softened or torn, skirting that isn\'t creating a thermal break, and walls that may have original factory insulation that has settled or degraded. We assess the specific conditions and recommend the most practical improvements. Belly insulation, skirting installation, and window replacement are often the highest-impact improvements on an older mobile home.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                'url' => $siteUrl . '/'],
  ['name' => 'Services',            'url' => $siteUrl . '/services/'],
  ['name' => 'Insulation & Drywall','url' => $siteUrl . '/services/insulation/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/insulation/#service',
  'name'        => 'Insulation & Drywall',
  'url'         => $siteUrl . '/services/insulation/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Mount Vernon, OR', 'addressRegion' => 'OR'],
  'description' => 'Insulation installation and drywall services in Mount Vernon, OR. Batt, blown-in, and rigid insulation spec\'d for Eastern Oregon\'s climate zone. Sheetrock installation and repair for new construction and remodeling. Serving Grant and Harney Counties since 2001. CCB# 147123.',
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
  <section class="sp-hero" aria-label="Insulation and drywall services in Mount Vernon OR">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('layers'); ?> Insulation &amp; Drywall</span>
            <h1>Insulation &amp; Drywall in <em>Eastern Oregon</em></h1>
            <p class="hero-answer">Superior Home Builders installs insulation and handles drywall (sheetrock) installation and repair for new construction and remodeling projects across Eastern Oregon. Proper insulation at Grant County elevations isn't optional — it's what makes homes livable through Eastern Oregon winters and summers. We spec for local conditions on every project.</p>
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
            <h3>Why invest in proper insulation?</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Batt, blown-in &amp; rigid insulation options</li>
              <li><?php echo lucide_icon('check-circle'); ?> Sheetrock installation &amp; repair</li>
              <li><?php echo lucide_icon('check-circle'); ?> New construction &amp; retrofit upgrades</li>
              <li><?php echo lucide_icon('check-circle'); ?> Eastern OR climate specs</li>
              <li><?php echo lucide_icon('check-circle'); ?> CCB# <?php echo htmlspecialchars($licenseNumber); ?></li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Schedule an Insulation Estimate</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Insulation &amp; Drywall</span>
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
  <section style="background:var(--color-bg)" aria-label="Why Eastern Oregon homes need proper insulation">
    <div class="container">
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('thermometer'); ?></div>
          <h3>Why Eastern Oregon homes are often under-insulated</h3>
          <p>Most of Eastern Oregon's housing stock was built before modern energy codes. A home with R-11 walls and an uninsulated crawl space loses a significant portion of its heating cost through the envelope — which matters when propane is your fuel and winter lows hit single digits in Grant County.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('layers'); ?></div>
          <h3>Batt vs blown-in — which is right for your project</h3>
          <p>For attic spaces on existing homes, blown-in insulation fills around existing framing and penetrations more completely than batts. For new wall framing, faced fiberglass batts are standard. For crawl spaces, rigid foam on stem walls plus a vapor barrier is the right approach for Eastern Oregon's climate zone.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('hammer'); ?></div>
          <h3>Sheetrock installation for new construction</h3>
          <p>Drywall boarding, taping, mudding, and texture for new builds and additions. We handle the full drywall scope on construction projects — no subcontractors for this work. Finished to the level required for your final paint or wallpaper application.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('wrench'); ?></div>
          <h3>Sheetrock repair &amp; additions</h3>
          <p>Drywall patching after electrical or plumbing rough-in, new board and tape in room additions, and repair of damaged walls or ceilings. We match existing texture where needed and finish to a level ready for painting.</p>
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
  <section style="background:var(--color-bg-alt)" aria-label="Why Grant County homes need more insulation than most Oregon homes">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Insulation installation work at a Grant County construction project by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Insulating Eastern OR Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do homes in Grant County and Harney County need more insulation than most Oregon homes?</h2>
          <p class="answer-block">Most of Eastern Oregon's existing housing stock was built before modern energy codes and is dramatically under-insulated by current standards. A home in Mount Vernon with R-11 wall insulation and an uninsulated crawl space is losing a significant portion of its heating cost through the envelope — which matters a lot when propane is your fuel and winter lows hit single digits. Properly specifying and installing insulation is one of the highest-ROI improvements you can make to an Eastern Oregon home.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>We assess existing insulation before recommending</strong>
                <span>Before recommending improvements, we identify existing R-values in walls, attic, and crawl space. That tells us where the biggest energy losses are happening and what improvements will have the most impact on your heating and cooling costs.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>New construction insulation spec'd for local heating degree days</strong>
                <span>Grant and Harney Counties have one of the highest heating degree day counts in Oregon. We spec insulation for local climate conditions — not generic Oregon code minimums that may be adequate in the valley but fall short at Eastern Oregon elevations.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>We handle drywall boarding and finishing as part of complete remodel scope</strong>
                <span>On general remodeling projects, insulation and drywall are coordinated together — not handled by separate trades you have to schedule independently. We install insulation, then board and finish the walls as part of a unified project.</span>
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
  <section class="sp-section-bg" aria-label="What is included in insulation and drywall work in Eastern Oregon">
    <div class="container" style="max-width:860px">
      <h2 class="reveal-up">What's included in insulation and drywall work in Eastern Oregon?</h2>
      <ul class="sp-includes-list">
        <li class="reveal-up reveal-delay-1"><?php echo lucide_icon('check'); ?> Insulation assessment of existing home</li>
        <li class="reveal-up reveal-delay-2"><?php echo lucide_icon('check'); ?> Batt insulation (walls, floors, attic)</li>
        <li class="reveal-up reveal-delay-3"><?php echo lucide_icon('check'); ?> Blown-in insulation (attic &amp; existing walls)</li>
        <li class="reveal-up reveal-delay-4"><?php echo lucide_icon('check'); ?> Rigid foam insulation (crawl space, slab edge)</li>
        <li class="reveal-up reveal-delay-1"><?php echo lucide_icon('check'); ?> Vapor barrier installation</li>
        <li class="reveal-up reveal-delay-2"><?php echo lucide_icon('check'); ?> Sheetrock hanging (new construction &amp; additions)</li>
        <li class="reveal-up reveal-delay-3"><?php echo lucide_icon('check'); ?> Sheetrock taping &amp; mudding</li>
        <li class="reveal-up reveal-delay-4"><?php echo lucide_icon('check'); ?> Texture application</li>
        <li class="reveal-up reveal-delay-1"><?php echo lucide_icon('check'); ?> Prep for painting</li>
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
  <section style="background:var(--color-bg-alt);padding:var(--space-4xl) 0" aria-label="Insulation FAQ for Mount Vernon OR">
    <div class="container">
      <h2 style="font-family:var(--font-heading);font-size:clamp(1.6rem,2.8vw,2.3rem);font-weight:800;color:var(--color-primary);text-align:center;text-wrap:balance;margin-bottom:var(--space-md)" class="reveal-up">
        Frequently asked questions about insulation &amp; drywall near Mount Vernon, OR
      </h2>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-ins-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-ins-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get a free insulation estimate in Mount Vernon OR">
    <div class="container">
      <h2>Ready to improve insulation in your Eastern Oregon home?</h2>
      <p>Superior Home Builders has been spec'ing and installing insulation for Eastern Oregon's climate since 2001. We assess what you have, recommend what will actually make a difference, and install it correctly. Get a written estimate for your insulation or drywall project.</p>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604157610-hamrrh-image_8_.jpg"
                 alt="General remodeling project in Grant County Oregon"
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604124347-3q5r39-Finished_windows_Southside.jpg"
                 alt="Window installation in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('square'); ?></div>
            <h3>Windows &amp; Doors</h3>
            <ul>
              <li>Energy-efficient window upgrades</li>
              <li>Exterior door replacement</li>
              <li>Eastern OR climate rated</li>
            </ul>
            <a href="/services/windows-and-doors/" class="service-card__cta">Learn more</a>
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
