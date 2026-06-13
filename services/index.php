<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page-level setup ────────────────────────────────────────────────────────
$pageTitle        = 'Construction & Remodeling Services in Mount Vernon, OR | Superior Home Builders';
$pageDescription  = 'Bathroom remodeling, kitchen renovation, custom home building, decks, windows, framing, and commercial construction in Mount Vernon, OR. Free estimates. Serving Grant County since 2001.';
$canonicalUrl     = $siteUrl . '/services/';
$currentPage      = 'services';
$ogImage          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg';
$heroImagePreload = $ogImage;

$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home',     'url' => $siteUrl . '/'],
    ['name' => 'Services', 'url' => $siteUrl . '/services'],
]);
$schemaMarkup = json_encode($breadcrumbSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   SERVICES INDEX — Superior Home Builders
   Premium page-specific styles | var() tokens only | No hardcoded values
   Techniques: layered hero, tinted bento grid, SVG dividers,
   asymmetric CTA, multi-direction reveals, floating accents
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ─────────────────────────────────────────────────────────── */
.svc-hero {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604131715-gsv7qf-20250819_192028.jpg');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
}
.svc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(110deg,
    rgba(var(--color-primary-rgb), 0.90) 0%,
    rgba(var(--color-secondary-rgb), 0.75) 60%,
    rgba(var(--color-primary-rgb), 0.50) 100%);
  z-index: 1;
}
.svc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  z-index: 2;
  pointer-events: none;
}
.svc-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
  text-align: center;
  color: #fff;
}
.svc-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.15);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-lg);
}
.svc-hero h1 {
  font-family: var(--font-heading);
  font-size: var(--fs-h1);
  font-weight: 800;
  line-height: 1.05;
  color: #fff;
  margin-bottom: var(--space-lg);
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}
.svc-hero h1 em {
  font-style: italic;
  color: var(--color-accent);
}
.svc-hero p.hero-answer {
  font-family: var(--font-body);
  font-size: clamp(1rem, 1.4vw, 1.2rem);
  color: rgba(255,255,255,0.85);
  max-width: 660px;
  margin: 0 auto var(--space-2xl);
  line-height: 1.7;
}
.svc-hero-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}
.svc-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.55);
}
.svc-hero-breadcrumb a { color: rgba(255,255,255,0.70); }
.svc-hero-breadcrumb a:hover { color: var(--color-accent); }
.svc-hero-breadcrumb .sep { margin: 0 var(--space-xs); }

/* ── DIVIDER ──────────────────────────────────────────────────────── */
.divider-wave {
  display: block;
  width: 100%;
  height: 60px;
  overflow: hidden;
  line-height: 0;
}
.divider-wave svg { width: 100%; height: 100%; display: block; }

/* ── INTRO ANSWER ─────────────────────────────────────────────────── */
.svc-intro {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.svc-intro-grid {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: var(--space-3xl);
  align-items: center;
}
.svc-intro-stat {
  text-align: center;
  padding: var(--space-3xl) var(--space-2xl);
  background: var(--color-primary);
  border-radius: var(--radius, 12px);
  position: relative;
  overflow: hidden;
}
.svc-intro-stat::before {
  content: '';
  position: absolute;
  top: -40px;
  right: -40px;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.08);
}
.svc-intro-stat-num {
  font-family: var(--font-heading);
  font-size: clamp(3.5rem, 6vw, 5.5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  display: block;
}
.svc-intro-stat-label {
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  color: rgba(255,255,255,0.70);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  margin-top: var(--space-sm);
  display: block;
}
.svc-intro-text h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.svc-intro-text p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-lg);
}
.svc-intro-text p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: 65ch;
}

/* ── SERVICES GRID ────────────────────────────────────────────────── */
.svc-grid-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.svc-grid-section .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.svc-grid-section .eyebrow-label {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark);
  background: rgba(var(--color-accent-rgb), 0.12);
  padding: var(--space-xs) var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-md);
}
.svc-grid-section h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.svc-grid-section h2 span.text-accent {
  font-style: italic;
  color: var(--color-secondary);
}
.svc-grid-section p.answer-block {
  font-size: var(--fs-body);
  color: var(--color-text);
  max-width: 62ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.75;
}

/* Service cards — using established class names from CLAUDE.md */
.services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
@media (max-width: 1199px) { .services-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px)  { .services-grid { grid-template-columns: 1fr; } }

.service-card-with-image {
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition), box-shadow var(--transition);
}
.service-card-with-image:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.service-card__image {
  position: relative;
  aspect-ratio: 5 / 3;
  overflow: hidden;
}
.service-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}
.service-card-with-image:hover .service-card__image img {
  transform: scale(1.04);
}
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
.service-card__desc {
  color: var(--color-text-light);
  margin: 0;
  font-size: var(--fs-sm);
  line-height: 1.55;
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
  top: 0;
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
.service-card__cta::after { content: " →"; display: inline-block; transition: transform var(--transition); }
.service-card__cta:hover { color: var(--color-primary); }
.service-card__cta:hover::after { transform: translateX(3px); }

.card-tint-1 { background: var(--color-card-tint-1); }
.card-tint-2 { background: var(--color-card-tint-2); }
.card-tint-3 { background: var(--color-card-tint-3); }

/* ── CTA BANNER ───────────────────────────────────────────────────── */
.svc-cta-banner {
  padding: var(--space-4xl) 0;
  background: var(--color-primary);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.svc-cta-banner::before {
  content: '';
  position: absolute;
  top: -80px;
  left: 50%;
  transform: translateX(-50%);
  width: 600px;
  height: 600px;
  border-radius: 50%;
  background: rgba(var(--color-secondary-rgb), 0.25);
  pointer-events: none;
}
.svc-cta-banner-inner {
  position: relative;
  z-index: 1;
}
.svc-cta-banner h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: #fff;
  margin-bottom: var(--space-md);
}
.svc-cta-banner p {
  font-size: var(--fs-body);
  color: rgba(255,255,255,0.80);
  max-width: 58ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.75;
}
.svc-cta-banner .cta-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RESPONSIVE ───────────────────────────────────────────────────── */
@media (max-width: 900px) {
  .svc-intro-grid { grid-template-columns: 1fr; }
  .svc-intro-stat { padding: var(--space-2xl) var(--space-xl); }
}
@media (max-width: 600px) {
  .svc-hero h1 { font-size: clamp(2rem, 8vw, 2.8rem); }
  .svc-hero-actions { flex-direction: column; align-items: center; }
}

/* ── REVEAL ANIMATION ─────────────────────────────────────────────── */
.reveal-up    { opacity: 0; transform: translateY(28px); transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-left  { opacity: 0; transform: translateX(-28px); transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-right { opacity: 0; transform: translateX(28px); transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-scale { opacity: 0; transform: scale(0.92); transition: opacity 0.65s ease, transform 0.65s ease; }
.reveal-up.visible, .reveal-left.visible, .reveal-right.visible, .reveal-scale.visible {
  opacity: 1; transform: none;
}
.reveal-delay-1 { transition-delay: 0.10s; }
.reveal-delay-2 { transition-delay: 0.20s; }
.reveal-delay-3 { transition-delay: 0.30s; }
.reveal-delay-4 { transition-delay: 0.40s; }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ═══════════════════════════════════════
       HERO
  ═══════════════════════════════════════ -->
  <section class="svc-hero" aria-label="Services hero">
    <div class="svc-hero-inner">
      <div class="container">
        <span class="svc-hero-eyebrow">
          <?php echo lucide_icon('hard-hat'); ?>
          Superior Home Builders
        </span>
        <h1>Construction &amp; Remodeling<br><em>Services in Eastern Oregon</em></h1>
        <p class="hero-answer">Superior Home Builders is a licensed general contractor based in Mount Vernon, OR, delivering custom home construction, remodeling, and commercial projects throughout Grant County since 2001. Every service comes with a free written estimate and a crew that shows up when scheduled.</p>
        <div class="svc-hero-actions">
          <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg">
            <?php echo lucide_icon('phone'); ?> Call Now
          </a>
          <?php endif; ?>
        </div>
        <nav class="svc-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span class="sep">›</span>
          <span aria-current="page">Services</span>
        </nav>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="divider-wave" style="background:var(--color-primary)">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,0 1080,80 1440,20 L1440,60 L0,60 Z" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       INTRO / ANSWER BLOCK
  ═══════════════════════════════════════ -->
  <section class="svc-intro" aria-label="Services overview">
    <div class="container">
      <div class="svc-intro-grid">
        <div class="svc-intro-stat reveal-scale">
          <span class="svc-intro-stat-num" data-counter="20" data-suffix="+">0</span>
          <span class="svc-intro-stat-label">Years Serving<br>Eastern Oregon</span>
        </div>
        <div class="svc-intro-text reveal-right">
          <h2>What construction and remodeling services does Superior Home Builders offer in Mount Vernon?</h2>
          <p class="answer-block">Superior Home Builders covers the full range — from bathroom and kitchen remodels to framing, custom new builds, windows, decks, general renovation, and commercial construction. Based in Mount Vernon, we hold an Oregon general contractor license and carry full liability coverage on every project.</p>
          <p>Every project starts with a site visit and written estimate. We don't subcontract the core work — our own experienced crew handles your build from foundation to finish. That's why homeowners across Grant County, John Day, Canyon City, and Prairie City have trusted us with their most important projects for over two decades.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="divider-wave" style="background:var(--color-bg)">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,20 C480,80 960,0 1440,40 L1440,60 L0,60 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       SERVICES GRID
  ═══════════════════════════════════════ -->
  <section class="svc-grid-section" aria-label="All services">
    <div class="container">
      <div class="section-header">
        <span class="eyebrow-label">What We Do</span>
        <h2>Which <span class="text-accent">construction services</span> are available near Mount Vernon, OR?</h2>
        <p class="answer-block">From a single bathroom to a full custom home, Superior Home Builders handles every phase of residential and commercial construction in Grant County and the surrounding Eastern Oregon region.</p>
      </div>

      <div class="services-grid">
        <?php
        $tints = ['card-tint-1','card-tint-2','card-tint-3'];
        $delays = ['reveal-delay-1','reveal-delay-2','reveal-delay-3','reveal-delay-4'];
        $servicePhotos = [
          'bathroom-remodeling'    => ['url'=>'/assets/images/bathroom-remodel-tile.webp',   'alt'=>'Bathroom remodel in Mount Vernon OR by Superior Home Builders'],
          'kitchen-remodeling'     => ['url'=>'/assets/images/kitchen-remodel-mount-vernon.webp',   'alt'=>'Kitchen remodeling project in Grant County OR'],
          'windows-and-doors'      => ['url'=>'/assets/images/window-installation-mount-vernon.webp',   'alt'=>'Window installation on a Mount Vernon OR home'],
          'decks'                  => ['url'=>'/assets/images/custom-deck-construction.webp',   'alt'=>'Custom deck built in Eastern Oregon by Superior Home Builders'],
          'framing'                => ['url'=>'/assets/images/custom-home-framing.webp',   'alt'=>'Residential framing project in Mount Vernon Oregon'],
          'custom-home-building'   => ['url'=>'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80','alt'=>'Custom home being built in Grant County Oregon'],
          'general-remodeling'     => ['url'=>'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604102234-3xpgf4-20221109_161614.jpg',   'alt'=>'General remodeling work by Superior Home Builders Mount Vernon OR'],
          'commercial-construction'=> ['url'=>'/assets/images/commercial-construction-eastern-oregon.webp',   'alt'=>'Commercial construction project in Eastern Oregon'],
        ];
        $serviceIcons = [
          'bathroom-remodeling'=>'bath','kitchen-remodeling'=>'utensils','windows-and-doors'=>'door-open',
          'decks'=>'tree-pine','framing'=>'hammer','custom-home-building'=>'home',
          'general-remodeling'=>'wrench','commercial-construction'=>'building-2',
        ];
        $serviceBullets = [
          'bathroom-remodeling'    => ['Tile, fixtures &amp; plumbing','Custom walk-in showers','Full vanity &amp; lighting'],
          'kitchen-remodeling'     => ['Custom cabinetry &amp; islands','Countertop &amp; appliance install','Full layout redesigns'],
          'windows-and-doors'      => ['Energy-efficient replacements','Vinyl, wood &amp; fiberglass','Entry doors &amp; sliders'],
          'decks'                  => ['Composite &amp; pressure-treated','Railings, stairs &amp; pergolas','Built for Eastern OR winters'],
          'framing'                => ['Residential &amp; commercial','New builds &amp; additions','Engineered lumber &amp; steel'],
          'custom-home-building'   => ['Design-to-completion builds','Site prep &amp; foundation','25+ years local expertise'],
          'general-remodeling'     => ['Single rooms to whole homes','Additions &amp; conversions','Interior finish work'],
          'commercial-construction'=> ['Shops, offices &amp; warehouses','Ground-up &amp; tenant build-out','On schedule, on budget'],
        ];
        foreach ($services as $i => $svc):
          $tint   = $tints[$i % 3];
          $delay  = $delays[$i % 4];
          $photo  = $servicePhotos[$svc['slug']] ?? ['url'=>'','alt'=>''];
          $icon   = $serviceIcons[$svc['slug']] ?? 'tool';
          $bullets= $serviceBullets[$svc['slug']] ?? [];
        ?>
        <article class="service-card-with-image <?php echo $tint; ?> reveal-up <?php echo $delay; ?>" aria-label="<?php echo htmlspecialchars($svc['name']); ?>">
          <div class="service-card__image">
            <img src="<?php echo htmlspecialchars($photo['url']); ?>"
                 alt="<?php echo htmlspecialchars($photo['alt']); ?>"
                 width="600" height="360" loading="lazy">
          </div>
          <div class="service-card__body">
            <div class="service-card__icon"><?php echo lucide_icon($icon); ?></div>
            <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
            <p class="service-card__desc"><?php
              $descs = [
                'bathroom-remodeling'    => 'Custom bathroom renovations from tile to plumbing.',
                'kitchen-remodeling'     => 'Full kitchen transformations — cabinets to countertops.',
                'windows-and-doors'      => 'Energy-efficient window and door replacements.',
                'decks'                  => 'Custom decks built for Eastern Oregon weather.',
                'framing'                => 'Structural framing for new builds and additions.',
                'custom-home-building'   => 'Full custom home construction, design to completion.',
                'general-remodeling'     => 'Whole-home or single-room renovations.',
                'commercial-construction'=> 'Commercial builds for Grant County businesses.',
              ];
              echo htmlspecialchars($descs[$svc['slug']] ?? $svc['description']);
            ?></p>
            <ul>
              <?php foreach ($bullets as $bullet): ?>
              <li><?php echo $bullet; ?></li>
              <?php endforeach; ?>
            </ul>
            <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/" class="service-card__cta">Learn more</a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Divider -->
  <div class="divider-wave" style="background:var(--color-bg-alt)">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,30 C720,80 720,0 1440,30 L1440,60 L0,60 Z" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ═══════════════════════════════════════
       CTA BANNER
  ═══════════════════════════════════════ -->
  <section class="svc-cta-banner" aria-label="Contact call to action">
    <div class="container">
      <div class="svc-cta-banner-inner reveal-up">
        <h2>Ready to start your project in Mount Vernon?</h2>
        <p>Every estimate is free, written, and provided after an on-site visit. No pressure, no obligation — just honest numbers from an experienced Eastern Oregon contractor.</p>
        <div class="cta-actions">
          <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline-light btn-lg">
            <?php echo lucide_icon('phone'); ?> Call Now
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
