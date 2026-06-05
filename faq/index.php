<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── FAQ Page ─────────────────────────────────────────────────────────────────
$pageTitle        = 'Frequently Asked Questions | Superior Home Builders | Mount Vernon, OR';
$pageDescription  = 'Common questions about custom home building, remodeling, pricing, and process from Superior Home Builders in Mount Vernon, OR. Serving Eastern Oregon since 2004.';
$canonicalUrl     = $siteUrl . '/faq/';
$currentPage      = 'faq';
$ogImage          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg';
$heroImagePreload = $ogImage;

// FAQ data — organized by category
$faqCategories = [
  [
    'id'    => 'general',
    'label' => 'General',
    'icon'  => 'info',
    'items' => [
      [
        'q' => 'Is Superior Home Builders licensed and insured in Oregon?',
        'a' => 'Yes. Superior Home Builders is a fully licensed Oregon Construction Contractors Board (CCB) contractor and carries general liability insurance. We are qualified to perform both residential and commercial construction and remodeling work throughout Eastern Oregon.',
      ],
      [
        'q' => 'What areas does Superior Home Builders serve?',
        'a' => 'We are based in Mount Vernon, OR and primarily serve Grant County — including John Day, Canyon City, and Prairie City. We also take projects in other parts of Eastern Oregon. Contact us if you\'re unsure whether we cover your location.',
      ],
      [
        'q' => 'How long has Superior Home Builders been in business?',
        'a' => 'Superior Home Builders was established in ' . $yearEstablished . ' and has been serving Eastern Oregon homeowners and businesses for over ' . $yearsInBusiness . ' years. Our crew is experienced in the region\'s climate, building codes, and unique construction challenges.',
      ],
      [
        'q' => 'Do you offer free estimates?',
        'a' => 'Yes — we provide free, no-obligation estimates on all projects. Fill out our contact form or call us directly and we\'ll schedule a time to review your project, understand your goals, and provide an honest quote with no hidden costs.',
      ],
    ],
  ],
  [
    'id'    => 'services',
    'label' => 'Services',
    'icon'  => 'tool',
    'items' => [
      [
        'q' => 'What construction and remodeling services do you offer?',
        'a' => 'Superior Home Builders offers eight core services: Bathroom Remodeling, Kitchen Remodeling, Windows &amp; Doors, Deck Building, Structural Framing, Custom Home Building, General Remodeling, and Commercial Construction. We are a true full-service general contractor for Eastern Oregon.',
      ],
      [
        'q' => 'Can you build a custom home from scratch in Mount Vernon, OR?',
        'a' => 'Absolutely. Custom home building is one of our flagship services. We handle everything from site preparation and framing to finishing work. We work with you through every stage — planning, permitting, construction, and final walkthrough — to deliver the home you\'ve envisioned.',
      ],
      [
        'q' => 'Do you handle bathroom and kitchen remodeling together?',
        'a' => 'Yes. Many homeowners in Grant County choose to bundle bathroom and kitchen remodels for better scheduling and cost efficiency. We can plan and execute both simultaneously or in sequence depending on your timeline and budget.',
      ],
      [
        'q' => 'What types of decks do you build?',
        'a' => 'We build ground-level, elevated, and multi-level decks using pressure-treated lumber, composite decking, and cedar. All decks are designed and constructed to current Oregon building code requirements, including proper footings for our freeze-thaw climate.',
      ],
      [
        'q' => 'Can you handle commercial construction projects?',
        'a' => 'Yes. Superior Home Builders takes on commercial construction and renovation projects for local businesses throughout Grant County and Eastern Oregon. We have experience with office build-outs, light commercial construction, and business facility renovations.',
      ],
      [
        'q' => 'Do you install replacement windows and doors?',
        'a' => 'Yes. We install replacement windows and exterior doors in existing homes. We work with energy-efficient vinyl, fiberglass, and wood products and can help you choose options that balance performance, appearance, and budget — especially important in Eastern Oregon\'s climate extremes.',
      ],
    ],
  ],
  [
    'id'    => 'pricing',
    'label' => 'Pricing',
    'icon'  => 'dollar-sign',
    'items' => [
      [
        'q' => 'How much does a bathroom remodel cost in Mount Vernon, OR?',
        'a' => 'Bathroom remodeling costs in Eastern Oregon typically range from $8,000–$12,000 for a basic update to $18,000–$35,000+ for a full renovation with tile, new fixtures, and plumbing changes. Final cost depends on the scope of work, materials chosen, and existing conditions. We provide itemized written estimates so you know exactly what you\'re paying for.',
      ],
      [
        'q' => 'What does kitchen remodeling cost?',
        'a' => 'Kitchen remodels range from $12,000–$20,000 for a cosmetic refresh (cabinet painting, new countertops, hardware) to $35,000–$75,000+ for a full gut-and-rebuild with custom cabinetry and new appliances. We work with your budget and help you prioritize which upgrades deliver the most value.',
      ],
      [
        'q' => 'How do you handle unexpected costs mid-project?',
        'a' => 'We communicate immediately if we discover something that affects the project scope — like rotted framing behind a wall or undersized electrical during a remodel. We never proceed with work that will cost more money without your written approval first. Our goal is zero surprises.',
      ],
      [
        'q' => 'Do you require a deposit?',
        'a' => 'Yes, most projects require a deposit at contract signing, with progress payments scheduled at key milestones. The structure is always spelled out clearly in your written contract before work begins. We never ask for full payment upfront.',
      ],
    ],
  ],
  [
    'id'    => 'process',
    'label' => 'Process',
    'icon'  => 'git-branch',
    'items' => [
      [
        'q' => 'What is the typical project process from first contact to completion?',
        'a' => '1) You reach out for a free estimate. 2) We schedule an on-site visit to review your project. 3) We provide a written, itemized estimate. 4) Once approved, we draft and sign a contract. 5) We obtain necessary permits. 6) Construction begins on the agreed schedule. 7) We do a final walkthrough together before considering the project complete.',
      ],
      [
        'q' => 'How long will my project take?',
        'a' => 'Timelines vary widely by project type. A bathroom remodel typically takes 2–4 weeks; a kitchen remodel 3–6 weeks; a custom home build 6–14 months depending on size and complexity. We provide a project timeline with every contract and communicate proactively about any schedule changes.',
      ],
      [
        'q' => 'Do you pull permits for construction and remodeling work?',
        'a' => 'Yes. Superior Home Builders pulls all required permits for work in Grant County and complies with Oregon building code requirements throughout. Permitted work protects your investment and ensures your project is built to code — important for homeowner\'s insurance and resale value.',
      ],
      [
        'q' => 'Can I live in my home during a kitchen or bathroom remodel?',
        'a' => 'Most homeowners stay in their homes during our remodels. We set up dust barriers, protect flooring, and schedule noisy work during reasonable hours. For major remodels affecting multiple areas of the home simultaneously, we\'ll discuss the logistics with you upfront.',
      ],
      [
        'q' => 'How do I get started with Superior Home Builders?',
        'a' => 'The easiest way is to fill out our contact form at /contact/ or call us directly. Describe your project — even a rough idea is fine at this stage — and we\'ll schedule a free on-site estimate. There\'s no pressure and no obligation until you\'re ready to move forward.',
      ],
    ],
  ],
];

// Build FAQ schema
$faqItems = [];
foreach ($faqCategories as $cat) {
  foreach ($cat['items'] as $item) {
    $faqItems[] = ['q' => $item['q'], 'a' => strip_tags($item['a'])];
  }
}
$faqSchema = generateFAQSchema($faqItems);
$schemaJson = json_encode($faqSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   FAQ PAGE — Superior Home Builders
   Premium tier page-specific styles | var() tokens only
   Techniques: layered hero (C1), SVG dividers (C3), tinted categories,
   accordion accordion items, category filter tabs, floating accent,
   reveal animations, asymmetric stat break, signature CTA
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ─────────────────────────────────────────────────────────── */
.faq-hero {
  position: relative;
  min-height: 46vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604143637-sycb6k-image.jpg');
  background-size: cover;
  background-position: center 40%;
  padding-top: var(--nav-height);
}
.faq-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-secondary-rgb), 0.80) 55%,
    rgba(var(--color-primary-rgb), 0.60) 100%
  );
  z-index: 1;
}
.faq-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  z-index: 2;
  pointer-events: none;
}
.faq-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
  text-align: center;
}
.faq-hero-eyebrow {
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
.faq-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4.5vw, 3.6rem);
  font-weight: 800;
  color: #fff;
  line-height: 1.1;
  margin-bottom: var(--space-lg);
  text-wrap: balance;
}
.faq-hero h1 em { font-style: italic; color: var(--color-accent); }
.faq-hero p {
  font-size: clamp(1rem, 1.3vw, 1.15rem);
  color: rgba(255,255,255,0.82);
  max-width: 560px;
  margin: 0 auto;
  line-height: 1.7;
}
.faq-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.50);
}
.faq-hero-breadcrumb a { color: rgba(255,255,255,0.70); }
.faq-hero-breadcrumb a:hover { color: var(--color-accent); }
.faq-hero-breadcrumb .sep { margin: 0 var(--space-xs); }

/* ── FAQ MAIN ─────────────────────────────────────────────────────── */
.faq-main {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
}
.faq-main-float {
  position: absolute;
  top: -60px;
  left: -80px;
  width: 360px;
  height: 360px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  pointer-events: none;
}

/* Category filter tabs */
.faq-tabs {
  display: flex;
  gap: var(--space-sm);
  flex-wrap: wrap;
  margin-bottom: var(--space-3xl);
  justify-content: center;
}
.faq-tab {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  padding: var(--space-sm) var(--space-xl);
  border-radius: 100px;
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  font-weight: 600;
  border: 1.5px solid rgba(var(--color-primary-rgb), 0.15);
  background: transparent;
  color: var(--color-text);
  cursor: pointer;
  transition: all var(--transition);
  text-decoration: none;
}
.faq-tab:hover,
.faq-tab.active {
  background: var(--color-primary);
  border-color: var(--color-primary);
  color: #fff;
}
.faq-tab i, .faq-tab svg { width: 16px; height: 16px; }

/* FAQ categories */
.faq-category {
  margin-bottom: var(--space-4xl);
  scroll-margin-top: calc(var(--nav-height) + var(--space-xl));
}
.faq-category:last-child { margin-bottom: 0; }
.faq-category-header {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-bottom: var(--space-2xl);
  padding-bottom: var(--space-lg);
  border-bottom: 2px solid rgba(var(--color-primary-rgb), 0.08);
}
.faq-category-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius);
  background: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  flex-shrink: 0;
}
.faq-category-icon i, .faq-category-icon svg { width: 22px; height: 22px; }
.faq-category-header h2 {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--color-primary);
}

/* FAQ accordion items */
.faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.faq-item {
  border: 1px solid rgba(var(--color-primary-rgb), 0.10);
  border-radius: var(--radius);
  overflow: hidden;
  transition: box-shadow var(--transition);
  background: var(--color-bg);
}
.faq-item:hover { box-shadow: 0 4px 18px rgba(var(--color-primary-rgb), 0.08); }
.faq-item.open { box-shadow: 0 4px 20px rgba(var(--color-primary-rgb), 0.10); }
.faq-question {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-lg);
  padding: var(--space-xl) var(--space-2xl);
  cursor: pointer;
  background: var(--color-bg);
  transition: background var(--transition);
  list-style: none;
  outline: none;
}
.faq-question::-webkit-details-marker { display: none; }
.faq-item[open] .faq-question {
  background: rgba(var(--color-secondary-rgb), 0.04);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
}
.faq-question h3 {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--color-primary);
  line-height: 1.35;
  margin: 0;
  text-wrap: balance;
}
.faq-toggle {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: rgba(var(--color-primary-rgb), 0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  flex-shrink: 0;
  transition: background var(--transition), transform var(--transition);
}
.faq-toggle i, .faq-toggle svg { width: 16px; height: 16px; }
.faq-item[open] .faq-toggle {
  background: var(--color-secondary);
  color: #fff;
  transform: rotate(45deg);
}
.faq-answer {
  padding: var(--space-xl) var(--space-2xl) var(--space-2xl);
}
.faq-answer p {
  font-family: var(--font-body);
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.78;
  margin: 0;
  max-width: 70ch;
}
@media (max-width: 600px) {
  .faq-question { padding: var(--space-lg); }
  .faq-answer { padding: var(--space-lg); }
  .faq-question h3 { font-size: 0.95rem; }
}

/* ── DIVIDER ──────────────────────────────────────────────────────── */
.faq-divider {
  display: block; width: 100%; overflow: hidden; line-height: 0;
}
.faq-divider svg { display: block; width: 100%; height: 55px; }

/* ── CTA SECTION ──────────────────────────────────────────────────── */
.faq-cta {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.faq-cta::before {
  content: '';
  position: absolute;
  bottom: -100px;
  right: -100px;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 65%);
  pointer-events: none;
}
.faq-cta-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-3xl);
  align-items: center;
}
.faq-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.faq-cta h2 em { font-style: italic; color: var(--color-accent); }
.faq-cta p {
  font-size: var(--fs-body);
  color: rgba(255,255,255,0.72);
  max-width: 52ch;
  line-height: 1.7;
}
.faq-cta-btns {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  white-space: nowrap;
}
@media (max-width: 768px) {
  .faq-cta-inner { grid-template-columns: 1fr; }
  .faq-cta-btns { flex-direction: row; flex-wrap: wrap; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
<?php echo $schemaJson; ?>
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Frequently Asked Questions",
  "url": "<?php echo $siteUrl; ?>/faq/",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "FAQ", "item": "<?php echo $siteUrl; ?>/faq/"}
    ]
  }
}
</script>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="faq-hero" aria-label="Frequently asked questions">
  <div class="faq-hero-inner container">
    <span class="faq-hero-eyebrow">
      <i data-lucide="help-circle"></i>
      Common Questions Answered
    </span>
    <h1>Your construction questions,<br><em>answered plainly</em></h1>
    <p>
      Everything you need to know about working with <?php echo htmlspecialchars($siteName); ?> — from
      pricing and timelines to what to expect on your project in Eastern Oregon.
    </p>
    <nav class="faq-hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">›</span>
      <span aria-current="page">FAQ</span>
    </nav>
  </div>
</section>

<!-- ═══════════════════════════ FAQ CONTENT ════════════════════════════ -->
<section class="faq-main" aria-label="FAQ categories">
  <div class="faq-main-float" aria-hidden="true"></div>
  <div class="container">

    <!-- Category Navigation Tabs -->
    <nav class="faq-tabs" aria-label="FAQ categories" role="navigation">
      <?php foreach ($faqCategories as $cat): ?>
      <a href="#faq-<?php echo htmlspecialchars($cat['id']); ?>" class="faq-tab">
        <i data-lucide="<?php echo htmlspecialchars($cat['icon']); ?>"></i>
        <?php echo htmlspecialchars($cat['label']); ?>
      </a>
      <?php endforeach; ?>
    </nav>

    <!-- FAQ Categories -->
    <?php foreach ($faqCategories as $i => $cat): ?>
    <div class="faq-category reveal-up reveal-delay-<?php echo min($i + 1, 4); ?>"
         id="faq-<?php echo htmlspecialchars($cat['id']); ?>">

      <div class="faq-category-header">
        <div class="faq-category-icon">
          <i data-lucide="<?php echo htmlspecialchars($cat['icon']); ?>"></i>
        </div>
        <h2><?php echo htmlspecialchars($cat['label']); ?> Questions</h2>
      </div>

      <div class="faq-list">
        <?php foreach ($cat['items'] as $item): ?>
        <details class="faq-item">
          <summary class="faq-question">
            <h3><?php echo htmlspecialchars($item['q']); ?></h3>
            <span class="faq-toggle" aria-hidden="true">
              <i data-lucide="plus"></i>
            </span>
          </summary>
          <div class="faq-answer">
            <p><?php echo $item['a']; ?></p>
          </div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div><!-- /.container -->
</section>

<!-- SVG Divider -->
<div class="faq-divider" aria-hidden="true">
  <svg viewBox="0 0 1440 55" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,55 C360,0 1080,0 1440,55 L1440,0 L0,0 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ═══════════════════════════ CTA SECTION ════════════════════════════ -->
<section class="faq-cta" aria-label="Get a free estimate">
  <div class="container">
    <div class="faq-cta-inner reveal-up">
      <div>
        <h2>Still have a question? <em>Let's talk.</em></h2>
        <p>
          <?php echo htmlspecialchars($siteName); ?> is a local Eastern Oregon contractor — we're happy
          to answer any questions about your project, timeline, or budget before you commit to anything.
          No pressure, no obligation.
        </p>
      </div>
      <div class="faq-cta-btns">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline btn-lg">
          <i data-lucide="phone"></i> Call Now
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
