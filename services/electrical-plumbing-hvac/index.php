<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Electrical, Plumbing & HVAC in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Electrical, plumbing, and HVAC services including mini-split AC installation in Eastern Oregon. One contractor for all three trades. CCB# 147123, serving Grant and Harney Counties since 2001.';
$canonicalUrl     = $siteUrl . '/services/electrical-plumbing-hvac/';
$currentPage      = 'services';
$heroImageUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604098293-gywzxu-20220724_152529.jpg';
$heroImagePreload = $heroImageUrl;
$ogImage          = $heroImageUrl;

$faqs = [
  ['q' => 'Do you install mini-split AC and heat pump systems in Eastern Oregon?', 'a' => 'Yes. Ductless mini-split systems are the most practical heating and cooling upgrade for Eastern Oregon homes that don\'t have existing ductwork — which describes most older homes in Grant and Harney Counties. A properly sized mini-split delivers both heating and cooling efficiently, handles Eastern Oregon\'s temperature range, and doesn\'t require a duct system. We install, wire, and commission the system as a complete project.'],
  ['q' => 'Can you upgrade an electrical panel in an older Eastern Oregon home?', 'a' => 'Yes. Many older homes in Grant County still have 100-amp or 60-amp service panels that don\'t support modern loads — particularly if you\'re adding a mini-split system, an EV charger, or any significant kitchen or shop upgrades. Panel upgrades require coordination with Pacific Power (the utility serving most of Eastern Oregon) and the county building department, and we handle both. We size the new service for your current and future loads.'],
  ['q' => 'Do you handle plumbing rough-in for bathroom and kitchen remodels?', 'a' => 'Yes. Plumbing rough-in — supply lines, drain lines, vent stacks, and fixture connections — is part of our bathroom and kitchen remodeling scope. We don\'t separate the trades on remodeling projects. The plumbing coordination happens alongside the framing, insulation, and electrical work as part of a unified project schedule, which is how it gets done efficiently in rural Eastern Oregon.'],
  ['q' => 'What HVAC systems are most common in homes in Grant County?', 'a' => 'Most older homes in Grant County heat with propane forced-air furnaces, wood stoves, or electric baseboard heat. Propane costs have driven a lot of interest in mini-split heat pumps as a supplemental or primary heating source — they run efficiently down to around 5°F for most units, and some cold-climate models are rated to -15°F. We assess your existing system and recommend the right approach based on your home\'s existing infrastructure and your heating goals.'],
];

$breadcrumbs = generateBreadcrumbSchema([
  ['name' => 'Home',                        'url' => $siteUrl . '/'],
  ['name' => 'Services',                    'url' => $siteUrl . '/services/'],
  ['name' => 'Electrical, Plumbing & HVAC', 'url' => $siteUrl . '/services/electrical-plumbing-hvac/'],
]);
$serviceSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'Service',
  '@id'         => $siteUrl . '/services/electrical-plumbing-hvac/#service',
  'name'        => 'Electrical, Plumbing & HVAC',
  'url'         => $siteUrl . '/services/electrical-plumbing-hvac/',
  'provider'    => ['@type' => 'HomeAndConstructionBusiness', '@id' => $siteUrl . '/#organization'],
  'areaServed'  => ['@type' => 'Place', 'name' => 'Eastern Oregon', 'addressRegion' => 'OR'],
  'description' => 'Electrical, plumbing, and HVAC services including ductless mini-split AC and heat pump installation in Eastern Oregon. One contractor coordinating all three mechanical trades. Serving Grant and Harney Counties since 2001. CCB# 147123.',
];
$faqSchema    = generateFAQSchema($faqs);
$schemaGraph  = ['@context' => 'https://schema.org', '@graph' => [$breadcrumbs, $serviceSchema, $faqSchema]];
$schemaMarkup = json_encode($schemaGraph, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ── Electrical, Plumbing & HVAC Service Page — page-specific styles ────── */
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
  <section class="sp-hero" aria-label="Electrical, plumbing and HVAC services in Eastern Oregon">
    <div class="sp-hero-inner">
      <div class="container">
        <div class="sp-hero-layout">
          <div class="sp-hero-content">
            <span class="sp-hero-eyebrow"><?php echo lucide_icon('zap'); ?> Mechanical Contractor</span>
            <h1>Electrical, Plumbing &amp; <em>HVAC</em> in Eastern Oregon</h1>
            <p class="hero-answer">Superior Home Builders provides electrical, plumbing, and HVAC services — including mini-split AC installation — across Eastern Oregon. We coordinate all three trades under one contract so you're not managing multiple subcontractors on your project. One call, one schedule, one responsible party for the full mechanical scope.</p>
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
            <h3>Trades under one roof</h3>
            <ul>
              <li><?php echo lucide_icon('check-circle'); ?> Electrical — panels, wiring, outlets</li>
              <li><?php echo lucide_icon('check-circle'); ?> Plumbing — supply, drain, fixtures</li>
              <li><?php echo lucide_icon('check-circle'); ?> HVAC &amp; mini-split AC systems</li>
              <li><?php echo lucide_icon('check-circle'); ?> One contractor, all trades coordinated</li>
              <li><?php echo lucide_icon('check-circle'); ?> Grant &amp; Harney Counties served</li>
            </ul>
            <a href="/contact/" class="btn btn-secondary w-full">Get a Written Estimate</a>
          </div>
        </div>
        <nav class="sp-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span class="sep">›</span>
          <a href="/services/">Services</a><span class="sep">›</span>
          <span aria-current="page">Electrical, Plumbing &amp; HVAC</span>
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
  <section aria-label="Why coordinate trades in Eastern Oregon" style="background:var(--color-bg)">
    <div class="container">
      <div class="sp-bento">
        <div class="sp-bento-card reveal-up reveal-delay-1">
          <div class="icon-wrap"><?php echo lucide_icon('users'); ?></div>
          <h3>Why coordinating trades under one contractor matters</h3>
          <p>In rural Eastern Oregon, finding and scheduling separate licensed electricians, plumbers, and HVAC contractors is time-consuming — trade availability is limited and scheduling gaps add weeks to a project timeline. When Superior Home Builders manages the full mechanical scope, there's one schedule and one point of accountability.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-2">
          <div class="icon-wrap"><?php echo lucide_icon('wind'); ?></div>
          <h3>Mini-split AC systems in Eastern OR homes</h3>
          <p>Most older homes in Grant and Harney Counties don't have central ductwork — which makes ductless mini-split systems the most practical heating and cooling upgrade available. Mini-splits deliver both heating and cooling, run efficiently in Eastern Oregon's temperature range, and don't require adding a duct system to an existing home.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-3">
          <div class="icon-wrap"><?php echo lucide_icon('zap'); ?></div>
          <h3>Electrical service upgrades</h3>
          <p>Many older homes in Grant County still run on 100-amp or 60-amp panels that can't support modern electrical loads — especially when adding a mini-split system, an EV charger, or any significant appliance upgrade. We size new panels for current and future loads and coordinate with Pacific Power on service upgrades.</p>
        </div>
        <div class="sp-bento-card reveal-up reveal-delay-4">
          <div class="icon-wrap"><?php echo lucide_icon('droplets'); ?></div>
          <h3>Plumbing rough-in for remodels</h3>
          <p>Bathroom and kitchen remodels require plumbing rough-in — supply lines, drain lines, vent stacks, and fixture connections. We handle this as part of our remodeling scope, coordinated alongside framing, insulation, and electrical work rather than managed as a separate contractor relationship.</p>
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
  <section aria-label="One contractor for all mechanical trades in Eastern Oregon" style="background:var(--color-bg-alt)">
    <div class="container">
      <div class="sp-expert-grid">
        <div class="sp-expert-photo reveal-scale">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>"
               alt="Mechanical work on an Eastern Oregon construction project by Superior Home Builders"
               width="420" height="525" loading="lazy">
          <div class="sp-expert-photo-badge">Serving Eastern OR Since 2001</div>
        </div>
        <div class="sp-expert-content reveal-right">
          <h2>Why do Eastern Oregon homes benefit from having one contractor handle electrical, plumbing, and HVAC?</h2>
          <p class="answer-block">In rural Eastern Oregon, coordinating separate licensed electricians, plumbers, and HVAC contractors is time-consuming and often difficult — trade availability is limited and scheduling gaps add weeks to a project. When Superior Home Builders handles the full mechanical scope, there's one schedule, one coordination burden, and one entity responsible if something doesn't work. We've been managing this in Grant and Harney Counties since 2001.</p>
          <div class="sp-expert-points">
            <div class="sp-expert-point">
              <span class="num">01</span>
              <div>
                <strong>Trade coordination in rural Eastern OR is the bottleneck</strong>
                <span>Most remodeling delays in rural Eastern Oregon aren't caused by the work itself — they're caused by trying to get three separate licensed trades on-site at the right time. We eliminate that coordination burden by handling the full mechanical scope.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">02</span>
              <div>
                <strong>Mini-splits are the most practical AC solution for homes without ductwork</strong>
                <span>Ductless mini-split systems are the right answer for the majority of Eastern Oregon homes that were built without central air. We install, wire, and commission the system as a complete project — you don't coordinate separate HVAC and electrical contractors.</span>
              </div>
            </div>
            <div class="sp-expert-point">
              <span class="num">03</span>
              <div>
                <strong>Electrical service upgrades are essential before adding modern loads</strong>
                <span>Adding a mini-split heat pump or an EV charger to an older 100-amp home without first assessing panel capacity causes ongoing problems. We evaluate your current service capacity as part of any mechanical upgrade project and size the panel for what you're adding and what comes next.</span>
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
  <section class="sp-section-bg" aria-label="Electrical plumbing and HVAC scope in Eastern Oregon">
    <div class="container" style="max-width:760px">
      <h2>What electrical, plumbing, and HVAC work does Superior Home Builders handle in Eastern Oregon?</h2>
      <ul class="sp-includes-list reveal-up">
        <li><?php echo lucide_icon('check'); ?> Electrical panel assessment &amp; upgrade</li>
        <li><?php echo lucide_icon('check'); ?> New circuit wiring (outlets, lighting, appliances)</li>
        <li><?php echo lucide_icon('check'); ?> Subpanel installation</li>
        <li><?php echo lucide_icon('check'); ?> Plumbing rough-in (supply &amp; drain)</li>
        <li><?php echo lucide_icon('check'); ?> Fixture installation (faucets, toilets, sinks, tubs)</li>
        <li><?php echo lucide_icon('check'); ?> Water heater replacement</li>
        <li><?php echo lucide_icon('check'); ?> Mini-split (ductless AC/heat pump) installation</li>
        <li><?php echo lucide_icon('check'); ?> Thermostat &amp; controls installation</li>
        <li><?php echo lucide_icon('check'); ?> Final inspections &amp; permits</li>
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
  <section aria-label="Electrical, plumbing and HVAC FAQ for Eastern Oregon" style="background:var(--color-bg-alt);padding:var(--space-4xl) 0">
    <div class="container">
      <h2 style="font-family:var(--font-heading);font-size:clamp(1.6rem,2.8vw,2.2rem);font-weight:800;color:var(--color-primary);text-align:center;text-wrap:balance;margin-bottom:var(--space-3xl)">Frequently asked questions about electrical, plumbing &amp; HVAC near Mount Vernon, OR</h2>
      <div class="sp-faq-list">
        <?php foreach ($faqs as $i => $faq): ?>
        <div class="sp-faq-item reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>">
          <button class="sp-faq-question" aria-expanded="false" aria-controls="faq-eph-<?php echo $i; ?>">
            <?php echo htmlspecialchars($faq['q']); ?>
            <?php echo lucide_icon('plus'); ?>
          </button>
          <div class="sp-faq-answer" id="faq-eph-<?php echo $i; ?>">
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
  <section class="sp-final-cta" aria-label="Get an estimate for electrical, plumbing or HVAC in Eastern Oregon">
    <div class="container">
      <h2>Need electrical, plumbing, or HVAC work in Eastern Oregon?</h2>
      <p>Superior Home Builders coordinates all three mechanical trades under one contract — one schedule, one call, one point of accountability. We've been doing this in Grant and Harney Counties since 2001. Get a written estimate for your project.</p>
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
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604097152-jcl4h7-20220724_152509.jpg"
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
        <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg"
                 alt="Bathroom remodeling in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('bath'); ?></div>
            <h3>Bathroom Remodeling</h3>
            <ul>
              <li>Full gut &amp; remodel</li>
              <li>Tile, fixtures &amp; finishes</li>
              <li>Plumbing &amp; electrical included</li>
            </ul>
            <a href="/services/bathroom-remodeling/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3">
          <div class="service-card__image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604147279-gcsj2m-image_3_.jpg"
                 alt="Kitchen remodeling in Eastern Oregon by Superior Home Builders"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon('utensils'); ?></div>
            <h3>Kitchen Remodeling</h3>
            <ul>
              <li>Full kitchen renovations</li>
              <li>Cabinets, counters &amp; appliances</li>
              <li>Plumbing &amp; electrical scoped in</li>
            </ul>
            <a href="/services/kitchen-remodeling/" class="service-card__cta">Learn more</a>
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
