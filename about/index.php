<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── About Page ───────────────────────────────────────────────────────────────
$pageTitle        = 'About Superior Home Builders | Eastern Oregon General Contractor Since 2004';
$pageDescription  = 'Superior Home Builders has served Mount Vernon, OR and Eastern Oregon for over 20 years. Learn our story, values, and commitment to custom home construction and remodeling.';
$canonicalUrl     = $siteUrl . '/about/';
$currentPage      = 'about';
$ogImage          = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg';
$heroImagePreload = $ogImage;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>
<style>
/* ════════════════════════════════════════════════════════════════════
   ABOUT PAGE — Superior Home Builders
   Premium tier page-specific styles | var() tokens only
   Techniques: layered hero (C1), SVG section dividers (C3),
   asymmetric grid layout (C5), stacked image composition (C11),
   tinted cards (C6), floating decorative accents (C4),
   stat counter blocks, timeline milestones, reveal animations,
   signature CTA banner
   ════════════════════════════════════════════════════════════════════ */

/* ── HERO ─────────────────────────────────────────────────────────── */
.about-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604270195-cqt47w-468298780_10161035683197734_2359719916650256082_n.jpg');
  background-size: cover;
  background-position: center 30%;
  padding-top: var(--nav-height);
}
.about-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    125deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-secondary-rgb), 0.78) 55%,
    rgba(var(--color-primary-rgb), 0.55) 100%
  );
  z-index: 1;
}
.about-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  background-size: 200px 200px;
  z-index: 2;
  pointer-events: none;
}
.about-hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.about-hero-eyebrow {
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
.about-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5vw, 4rem);
  font-weight: 800;
  line-height: 1.08;
  color: #fff;
  margin-bottom: var(--space-lg);
  max-width: 780px;
  text-wrap: balance;
}
.about-hero h1 em {
  font-style: italic;
  color: var(--color-accent);
}
.about-hero p.hero-lead {
  font-size: clamp(1rem, 1.3vw, 1.15rem);
  color: rgba(255,255,255,0.85);
  max-width: 600px;
  line-height: 1.72;
  margin-bottom: var(--space-2xl);
}
.about-hero-actions {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.about-hero-breadcrumb {
  margin-top: var(--space-2xl);
  font-size: var(--fs-xs);
  color: rgba(255,255,255,0.50);
}
.about-hero-breadcrumb a { color: rgba(255,255,255,0.70); }
.about-hero-breadcrumb a:hover { color: var(--color-accent); }
.about-hero-breadcrumb .sep { margin: 0 var(--space-xs); }

/* ── STAT STRIP ───────────────────────────────────────────────────── */
.about-stats-strip {
  background: var(--color-primary);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.about-stats-strip::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: repeating-linear-gradient(
    -55deg,
    transparent,
    transparent 40px,
    rgba(var(--color-accent-rgb), 0.025) 40px,
    rgba(var(--color-accent-rgb), 0.025) 80px
  );
}
.about-stats-grid {
  position: relative;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-2xl);
  text-align: center;
}
.about-stat-item {
  position: relative;
  padding: var(--space-xl) var(--space-lg);
}
.about-stat-item + .about-stat-item::before {
  content: '';
  position: absolute;
  left: 0;
  top: 20%;
  height: 60%;
  width: 1px;
  background: rgba(var(--color-accent-rgb), 0.20);
}
.about-stat-num {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4vw, 3.8rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  display: block;
}
.about-stat-label {
  font-family: var(--font-body);
  font-size: var(--fs-sm);
  color: rgba(255,255,255,0.68);
  text-transform: uppercase;
  letter-spacing: 0.09em;
  margin-top: var(--space-sm);
  display: block;
}
@media (max-width: 768px) {
  .about-stats-grid { grid-template-columns: repeat(2, 1fr); gap: var(--space-xl); }
  .about-stat-item::before { display: none; }
}
@media (max-width: 480px) {
  .about-stats-grid { grid-template-columns: 1fr 1fr; }
}

/* ── DIVIDER UTILITIES ────────────────────────────────────────────── */
.about-divider {
  display: block;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.about-divider svg { display: block; width: 100%; height: 60px; }

/* ── STORY SECTION ────────────────────────────────────────────────── */
.about-story {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.about-story-float {
  position: absolute;
  top: -60px;
  right: -80px;
  width: 380px;
  height: 380px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 70%);
  pointer-events: none;
}
.about-story-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}
.about-story-images {
  position: relative;
  height: 520px;
}
.about-img-primary {
  position: absolute;
  top: 0;
  left: 0;
  width: 78%;
  height: 78%;
  border-radius: var(--radius-lg, 16px);
  overflow: hidden;
  box-shadow: 0 24px 64px rgba(var(--color-primary-rgb), 0.22);
}
.about-img-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.about-img-secondary {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 60%;
  height: 58%;
  border-radius: var(--radius-lg, 16px);
  overflow: hidden;
  box-shadow: 0 16px 48px rgba(var(--color-primary-rgb), 0.20);
  border: 4px solid var(--color-bg);
}
.about-img-secondary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.about-img-badge {
  position: absolute;
  top: 52%;
  left: 60%;
  transform: translate(-50%, -50%);
  background: var(--color-accent);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-weight: 900;
  font-size: 0.95rem;
  padding: var(--space-md) var(--space-lg);
  border-radius: var(--radius);
  text-align: center;
  white-space: nowrap;
  box-shadow: 0 8px 24px rgba(var(--color-primary-rgb), 0.25);
  z-index: 4;
  line-height: 1.2;
}
.about-story-content .eyebrow-label {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark, var(--color-secondary));
  background: rgba(var(--color-accent-rgb), 0.12);
  padding: var(--space-xs) var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-lg);
}
.about-story-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1.1;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
}
.about-story-content h2 em {
  font-style: italic;
  color: var(--color-secondary);
}
.about-story-content p {
  font-family: var(--font-body);
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.78;
  max-width: 60ch;
  margin-bottom: var(--space-lg);
}
.about-story-content p.answer-block {
  color: var(--color-text);
  font-weight: 500;
}
.about-story-checks {
  margin: var(--space-xl) 0 var(--space-2xl);
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.about-story-check {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  font-size: var(--fs-body);
  color: var(--color-text);
}
.about-story-check-icon {
  flex-shrink: 0;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-secondary);
  margin-top: 2px;
}
.about-story-check-icon svg { width: 15px; height: 15px; }
@media (max-width: 900px) {
  .about-story-grid { grid-template-columns: 1fr; gap: var(--space-3xl); }
  .about-story-images { height: 360px; }
}
@media (max-width: 600px) {
  .about-story-images { height: 280px; }
  .about-img-badge { font-size: 0.8rem; padding: var(--space-sm) var(--space-md); }
}

/* ── VALUES SECTION ───────────────────────────────────────────────── */
.about-values {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
  position: relative;
}
.about-values-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.about-values-header h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.about-values-header h2 em {
  font-style: italic;
  color: var(--color-secondary);
}
.about-values-header p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 56ch;
  margin: 0 auto;
  line-height: 1.7;
}
.about-values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
}
.about-value-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg, 16px);
  padding: var(--space-2xl) var(--space-xl);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition), box-shadow var(--transition);
  box-shadow: 0 2px 12px rgba(var(--color-primary-rgb), 0.06);
}
.about-value-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 48px rgba(var(--color-primary-rgb), 0.12);
}
.about-value-card:nth-child(1) { background: var(--color-card-tint-1); }
.about-value-card:nth-child(2) { background: var(--color-card-tint-2); }
.about-value-card:nth-child(3) { background: var(--color-card-tint-3); }
.about-value-card::after {
  content: '';
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.about-value-icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius);
  background: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-xl);
}
.about-value-icon i, .about-value-icon svg { width: 26px; height: 26px; }
.about-value-card h3 {
  font-family: var(--font-heading);
  font-size: 1.35rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.about-value-card p {
  font-size: var(--fs-sm);
  color: var(--color-text);
  line-height: 1.72;
}
@media (max-width: 768px) {
  .about-values-grid { grid-template-columns: 1fr; gap: var(--space-lg); }
}

/* ── MILESTONES ───────────────────────────────────────────────────── */
.about-milestones {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  position: relative;
}
.about-milestones-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.about-milestones-header h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md);
}
.about-milestones-header p {
  font-size: var(--fs-body);
  color: var(--color-text-light);
  max-width: 54ch;
  margin: 0 auto;
  line-height: 1.7;
}
.about-timeline {
  position: relative;
  max-width: 880px;
  margin: 0 auto;
}
.about-timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(
    to bottom,
    transparent,
    var(--color-secondary) 10%,
    var(--color-secondary) 90%,
    transparent
  );
  transform: translateX(-50%);
}
.timeline-item {
  display: grid;
  grid-template-columns: 1fr 56px 1fr;
  gap: 0 var(--space-2xl);
  margin-bottom: var(--space-3xl);
  align-items: center;
}
.timeline-item:last-child { margin-bottom: 0; }
.timeline-content {
  padding: var(--space-xl) var(--space-2xl);
  border-radius: var(--radius-lg, 16px);
  background: var(--color-bg-alt);
  box-shadow: 0 2px 12px rgba(var(--color-primary-rgb), 0.06);
  transition: transform var(--transition), box-shadow var(--transition);
}
.timeline-content:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 32px rgba(var(--color-primary-rgb), 0.10);
}
.timeline-item:nth-child(odd) .timeline-content { text-align: right; grid-column: 1; }
.timeline-item:nth-child(odd) .timeline-connector { grid-column: 2; }
.timeline-item:nth-child(odd) .timeline-spacer { grid-column: 3; }
.timeline-item:nth-child(even) .timeline-spacer { grid-column: 1; }
.timeline-item:nth-child(even) .timeline-connector { grid-column: 2; }
.timeline-item:nth-child(even) .timeline-content { grid-column: 3; text-align: left; }
.timeline-connector {
  display: flex;
  align-items: center;
  justify-content: center;
  grid-column: 2;
  grid-row: 1;
}
.timeline-dot {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: var(--color-secondary);
  border: 3px solid var(--color-bg);
  box-shadow: 0 0 0 3px var(--color-secondary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 0.7rem;
  letter-spacing: 0.02em;
  flex-shrink: 0;
  z-index: 1;
  position: relative;
}
.timeline-spacer { display: block; }
.timeline-year {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--fs-xs);
  font-weight: 800;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-secondary);
  margin-bottom: var(--space-sm);
}
.timeline-content h3 {
  font-family: var(--font-heading);
  font-size: 1.15rem;
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.timeline-content p {
  font-size: var(--fs-sm);
  color: var(--color-text-light);
  line-height: 1.65;
  margin: 0;
}
@media (max-width: 768px) {
  .about-timeline::before { left: 22px; }
  .timeline-item { grid-template-columns: 44px 1fr; gap: 0 var(--space-lg); }
  .timeline-item:nth-child(odd) .timeline-content,
  .timeline-item:nth-child(even) .timeline-content { grid-column: 2; grid-row: 1; text-align: left; }
  .timeline-item:nth-child(odd) .timeline-connector,
  .timeline-item:nth-child(even) .timeline-connector { grid-column: 1; grid-row: 1; justify-content: flex-start; }
  .timeline-item:nth-child(odd) .timeline-spacer,
  .timeline-item:nth-child(even) .timeline-spacer { display: none; }
  .timeline-dot { width: 36px; height: 36px; font-size: 0.6rem; }
}

/* ── FULL-WIDTH PHOTO BREAK ───────────────────────────────────────── */
.about-photo-break {
  position: relative;
  height: 420px;
  overflow: hidden;
}
.about-photo-break img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
  display: block;
}
.about-photo-break::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to bottom,
    rgba(var(--color-primary-rgb), 0.55) 0%,
    transparent 40%,
    transparent 60%,
    rgba(var(--color-primary-rgb), 0.55) 100%
  );
}
@media (max-width: 600px) {
  .about-photo-break { height: 260px; }
}

/* ── CERTIFICATIONS & TRUST ───────────────────────────────────────── */
.about-trust {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.about-trust-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4xl);
  align-items: center;
}
.about-trust-content .eyebrow-label {
  display: inline-block;
  font-size: var(--fs-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent-dark, var(--color-secondary));
  background: rgba(var(--color-accent-rgb), 0.12);
  padding: var(--space-xs) var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-lg);
}
.about-trust-content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1.1;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
}
.about-trust-content p {
  font-size: var(--fs-body);
  color: var(--color-text);
  line-height: 1.75;
  margin-bottom: var(--space-lg);
  max-width: 58ch;
}
.about-trust-badges {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
  margin-top: var(--space-xl);
}
.about-trust-badge {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  padding: var(--space-lg);
  background: var(--color-bg);
  border-radius: var(--radius);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  transition: box-shadow var(--transition);
}
.about-trust-badge:hover {
  box-shadow: 0 4px 20px rgba(var(--color-primary-rgb), 0.10);
}
.about-trust-badge-icon {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: rgba(var(--color-secondary-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-secondary);
  flex-shrink: 0;
}
.about-trust-badge-icon i, .about-trust-badge-icon svg { width: 20px; height: 20px; }
.about-trust-badge-text strong {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-primary);
}
.about-trust-badge-text span {
  font-size: 0.8rem;
  color: var(--color-text-light);
}
.about-trust-image {
  position: relative;
  border-radius: var(--radius-lg, 16px);
  overflow: hidden;
  aspect-ratio: 4/3;
  box-shadow: 0 20px 60px rgba(var(--color-primary-rgb), 0.18);
}
.about-trust-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.6s ease;
}
.about-trust-image:hover img { transform: scale(1.03); }
@media (max-width: 900px) {
  .about-trust-grid { grid-template-columns: 1fr; }
  .about-trust-image { order: -1; }
}
@media (max-width: 600px) {
  .about-trust-badges { grid-template-columns: 1fr; }
}

/* ── CTA BANNER ───────────────────────────────────────────────────── */
.about-cta {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.about-cta::before {
  content: '';
  position: absolute;
  top: -120px;
  left: 50%;
  transform: translateX(-50%);
  width: 700px;
  height: 700px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 65%);
  pointer-events: none;
}
.about-cta-inner { position: relative; z-index: 1; }
.about-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 800;
  color: #fff;
  margin-bottom: var(--space-lg);
  text-wrap: balance;
}
.about-cta h2 em {
  font-style: italic;
  color: var(--color-accent);
}
.about-cta p {
  font-size: var(--fs-body);
  color: rgba(255,255,255,0.75);
  max-width: 52ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.7;
}
.about-cta-actions {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Superior Home Builders",
  "url": "<?php echo $siteUrl; ?>/about/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo $siteUrl; ?>/"},
      {"@type": "ListItem", "position": 2, "name": "About", "item": "<?php echo $siteUrl; ?>/about/"}
    ]
  },
  "provider": { "@id": "<?php echo $siteUrl; ?>/#organization" }
}
</script>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="about-hero" aria-label="About Superior Home Builders">
  <div class="about-hero-inner container">
    <span class="about-hero-eyebrow">
      <i data-lucide="building-2"></i>
      Serving Eastern Oregon Since <?php echo $yearEstablished; ?>
    </span>
    <h1>Built on <em>Integrity</em>,<br>Built to Last</h1>
    <p class="hero-lead">
      <?php echo htmlspecialchars($siteName); ?> is a licensed general contractor based in
      <?php echo htmlspecialchars($address['city']); ?>, OR — delivering custom home construction and
      comprehensive remodeling services across Grant County and Eastern Oregon for over
      <?php echo $yearsInBusiness; ?> years.
    </p>
    <div class="about-hero-actions">
      <a href="/contact/" class="btn btn-secondary btn-lg">Get a Free Estimate</a>
      <a href="/services/" class="btn btn-outline btn-lg">Our Services</a>
    </div>
    <nav class="about-hero-breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="sep" aria-hidden="true">›</span>
      <span aria-current="page">About</span>
    </nav>
  </div>
</section>

<!-- ═══════════════════════════ STATS STRIP ════════════════════════════ -->
<section class="about-stats-strip" aria-label="Company facts">
  <div class="container">
    <div class="about-stats-grid">
      <div class="about-stat-item reveal-up">
        <span class="about-stat-num" data-counter="<?php echo $yearsInBusiness; ?>">0</span>
        <span class="about-stat-label">Years in Eastern Oregon</span>
      </div>
      <div class="about-stat-item reveal-up reveal-delay-1">
        <span class="about-stat-num" data-counter="200">0</span>
        <span class="about-stat-label">Homes &amp; Projects Completed</span>
      </div>
      <div class="about-stat-item reveal-up reveal-delay-2">
        <span class="about-stat-num" data-counter="8">0</span>
        <span class="about-stat-label">Specialized Services Offered</span>
      </div>
      <div class="about-stat-item reveal-up reveal-delay-3">
        <span class="about-stat-num" data-counter="5">0</span>
        <span class="about-stat-label">Counties Served</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════ STORY SECTION ══════════════════════════ -->
<section class="about-story" aria-label="Our story">
  <div class="about-story-float" aria-hidden="true"></div>
  <div class="container">
    <div class="about-story-grid">

      <!-- Image Stack -->
      <div class="about-story-images reveal-left">
        <div class="about-img-primary">
          <img
            src="/assets/images/owner-eastern-oregon-builder.webp"
            alt="Superior Home Builders owner — licensed general contractor serving Eastern Oregon since 2004"
            width="600" height="450" loading="lazy">
        </div>
        <div class="about-img-secondary">
          <img
            src="/assets/images/owner-construction-project.webp"
            alt="Superior Home Builders owner on a construction project in Grant County, Oregon"
            width="400" height="300" loading="lazy">
        </div>
        <div class="about-img-badge" aria-hidden="true">Est. <?php echo $yearEstablished; ?><br>Eastern Oregon</div>
      </div>

      <!-- Story Content -->
      <div class="about-story-content reveal-right">
        <span class="eyebrow-label">Our Story</span>
        <h2>Your Neighbors.<br><em>Your Builders.</em></h2>
        <p class="answer-block">
          <?php echo htmlspecialchars($siteName); ?> is a licensed Oregon general contractor that has been
          building homes and transforming spaces in the Mount Vernon area since <?php echo $yearEstablished; ?>.
          We know Grant County — its climate, its communities, its families — and we build accordingly.
        </p>
        <p>
          What started as a commitment to bring professional construction services to rural Eastern Oregon
          has grown into a trusted partnership with hundreds of homeowners, businesses, and property owners
          across the region. From John Day to Canyon City, Prairie City to Salem, our work is woven into
          the fabric of this landscape.
        </p>
        <p>
          Our mission is simple: build your place in the best way possible. We collaborate closely with
          every client — listening first, planning carefully, and delivering with the craftsmanship that
          Eastern Oregon deserves.
        </p>

        <div class="about-story-checks">
          <div class="about-story-check">
            <span class="about-story-check-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            <span>Licensed Oregon general contractor — residential &amp; commercial</span>
          </div>
          <div class="about-story-check">
            <span class="about-story-check-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            <span>Serving Grant County &amp; surrounding Eastern Oregon communities</span>
          </div>
          <div class="about-story-check">
            <span class="about-story-check-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            <span>Full-service: new construction, remodeling, framing, commercial</span>
          </div>
          <div class="about-story-check">
            <span class="about-story-check-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            <span>Free project estimates — no pressure, no surprises</span>
          </div>
        </div>

        <a href="/contact/" class="btn btn-primary">Start Your Project</a>
      </div>
    </div><!-- /.about-story-grid -->
  </div>
</section>

<!-- SVG Divider: angle down into values section -->
<div class="about-divider" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,0 1440,60 0,0" fill="var(--color-bg-alt)"/>
  </svg>
</div>

<!-- ═══════════════════════════ VALUES SECTION ═════════════════════════ -->
<section class="about-values" aria-label="Our values">
  <div class="container">
    <div class="about-values-header reveal-up">
      <span class="eyebrow-label">What We Stand For</span>
      <h2>Three values behind<br><em>every project we build</em></h2>
      <p>These aren't slogans. They're how we work — on every job, every day, in every community we serve.</p>
    </div>

    <div class="about-values-grid">
      <div class="about-value-card reveal-up reveal-delay-1">
        <div class="about-value-icon">
          <i data-lucide="hammer"></i>
        </div>
        <h3>Craftsmanship</h3>
        <p>
          We build things right the first time. Every framing joint, every window installation, every
          deck board is set with the same care we'd give our own home. Our work in Mount Vernon and
          across Grant County is our portfolio — and we're proud of every structure we've touched.
        </p>
      </div>

      <div class="about-value-card reveal-up reveal-delay-2">
        <div class="about-value-icon">
          <i data-lucide="handshake"></i>
        </div>
        <h3>Integrity</h3>
        <p>
          Honest estimates. Clear timelines. No hidden surprises mid-project. We communicate openly
          throughout every job because building trust is as important as building structures. When we
          say something will be done, it will be done — or we'll tell you why before it matters.
        </p>
      </div>

      <div class="about-value-card reveal-up reveal-delay-3">
        <div class="about-value-icon">
          <i data-lucide="map-pin"></i>
        </div>
        <h3>Community</h3>
        <p>
          We're not a franchise or a big-city contractor that drove out for a job. We live here.
          Our kids go to school here. We shop at the same stores as our clients and see our work
          every time we drive through John Day or Canyon City. Eastern Oregon is home — and we
          build like it.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider: wave up into milestones -->
<div class="about-divider" aria-hidden="true">
  <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,70 C360,0 1080,0 1440,70 L1440,70 L0,70 Z" fill="var(--color-bg)"/>
  </svg>
</div>

<!-- ═══════════════════════════ MILESTONES ═════════════════════════════ -->
<section class="about-milestones" aria-label="Company milestones">
  <div class="container">
    <div class="about-milestones-header reveal-up">
      <span class="eyebrow-label">Two Decades of Building</span>
      <h2>A track record built year by year</h2>
      <p>From our first residential framing job to multi-county commercial projects, here's how <?php echo htmlspecialchars($siteName); ?> grew.</p>
    </div>

    <div class="about-timeline">
      <div class="timeline-item">
        <div class="timeline-content reveal-left">
          <span class="timeline-year"><?php echo $yearEstablished; ?></span>
          <h3>Founded in Eastern Oregon</h3>
          <p>Superior Home Builders was established in Mount Vernon with a focus on residential framing and custom home construction for Grant County homeowners.</p>
        </div>
        <div class="timeline-connector">
          <div class="timeline-dot"><i data-lucide="home" style="width:16px;height:16px;"></i></div>
        </div>
        <div class="timeline-spacer"></div>
      </div>

      <div class="timeline-item">
        <div class="timeline-spacer"></div>
        <div class="timeline-connector">
          <div class="timeline-dot"><i data-lucide="wrench" style="width:16px;height:16px;"></i></div>
        </div>
        <div class="timeline-content reveal-right">
          <span class="timeline-year">2008–2012</span>
          <h3>Expanding Into Remodeling</h3>
          <p>Demand from existing clients led us to expand into full kitchen and bathroom remodeling — bringing big-city renovation quality to rural Eastern Oregon at fair prices.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-content reveal-left">
          <span class="timeline-year">2014–2016</span>
          <h3>Windows, Doors &amp; Decks</h3>
          <p>We added windows &amp; doors installation and custom deck building to our service menu, meeting growing homeowner demand for energy efficiency and outdoor living spaces.</p>
        </div>
        <div class="timeline-connector">
          <div class="timeline-dot"><i data-lucide="door-open" style="width:16px;height:16px;"></i></div>
        </div>
        <div class="timeline-spacer"></div>
      </div>

      <div class="timeline-item">
        <div class="timeline-spacer"></div>
        <div class="timeline-connector">
          <div class="timeline-dot"><i data-lucide="building-2" style="width:16px;height:16px;"></i></div>
        </div>
        <div class="timeline-content reveal-right">
          <span class="timeline-year">2018–2020</span>
          <h3>Commercial Construction</h3>
          <p>Superior Home Builders moved into commercial construction, partnering with local businesses in Mount Vernon, John Day, and Canyon City on commercial build-outs and renovations.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-content reveal-left">
          <span class="timeline-year">2022–Present</span>
          <h3>Full-Service Eastern Oregon Builder</h3>
          <p>Today we offer eight specialized services across five Eastern Oregon counties, with a full team of experienced craftsmen and a reputation built on over <?php echo $yearsInBusiness; ?> years of delivering quality work.</p>
        </div>
        <div class="timeline-connector">
          <div class="timeline-dot"><i data-lucide="star" style="width:16px;height:16px;"></i></div>
        </div>
        <div class="timeline-spacer"></div>
      </div>
    </div><!-- /.about-timeline -->
  </div>
</section>

<!-- Full-width photo break -->
<div class="about-photo-break" aria-hidden="true">
  <img
    src="https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/photos/1780604104586-837vw8-20221127_142618.jpg"
    alt="Custom home construction project underway in Eastern Oregon"
    width="1440" height="420" loading="lazy">
</div>

<!-- ═══════════════════════════ TRUST & CREDENTIALS ════════════════════ -->
<section class="about-trust" aria-label="Credentials and trust factors">
  <div class="container">
    <div class="about-trust-grid">
      <div class="about-trust-content reveal-left">
        <span class="eyebrow-label">Licensed &amp; Ready</span>
        <h2>Why homeowners in Grant County <em>choose us</em></h2>
        <p>
          When you hire <?php echo htmlspecialchars($siteName); ?>, you're working with a fully licensed Oregon
          general contractor who knows your region, your building codes, and your climate. We've completed
          projects throughout Mount Vernon, John Day, Canyon City, and Prairie City — all across Eastern
          Oregon's high-desert terrain.
        </p>
        <p>
          Whether you need a custom home built from the ground up, a bathroom completely renovated, or
          a commercial space transformed — we bring the same level of attention and professionalism to
          every project, regardless of size.
        </p>

        <div class="about-trust-badges">
          <div class="about-trust-badge">
            <div class="about-trust-badge-icon"><i data-lucide="shield-check"></i></div>
            <div class="about-trust-badge-text">
              <strong>Licensed Contractor</strong>
              <span>Oregon CCB Licensed</span>
            </div>
          </div>
          <div class="about-trust-badge">
            <div class="about-trust-badge-icon"><i data-lucide="hard-hat"></i></div>
            <div class="about-trust-badge-text">
              <strong>Fully Insured</strong>
              <span>General Liability Coverage</span>
            </div>
          </div>
          <div class="about-trust-badge">
            <div class="about-trust-badge-icon"><i data-lucide="calendar"></i></div>
            <div class="about-trust-badge-text">
              <strong><?php echo $yearsInBusiness; ?>+ Years</strong>
              <span>Local Experience</span>
            </div>
          </div>
          <div class="about-trust-badge">
            <div class="about-trust-badge-icon"><i data-lucide="users"></i></div>
            <div class="about-trust-badge-text">
              <strong>Free Estimates</strong>
              <span>No Pressure, No Surprises</span>
            </div>
          </div>
        </div>
      </div><!-- /.about-trust-content -->

      <div class="about-trust-image reveal-right">
        <img
          src="/assets/images/owner-completed-project.webp"
          alt="Superior Home Builders owner at a completed construction project in Mount Vernon, Oregon"
          width="720" height="540" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- SVG Divider: curve into CTA -->
<div class="about-divider" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 C480,0 960,0 1440,60 L1440,0 L0,0 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ═══════════════════════════ CTA BANNER ════════════════════════════ -->
<section class="about-cta" aria-label="Start your project">
  <div class="container">
    <div class="about-cta-inner reveal-up">
      <h2>Ready to build something <em>great</em>?</h2>
      <p>
        Contact <?php echo htmlspecialchars($siteName); ?> today for a free, no-pressure estimate on your
        home or commercial project in Mount Vernon, OR or anywhere across Eastern Oregon.
      </p>
      <div class="about-cta-actions">
        <a href="/contact/" class="btn btn-secondary btn-lg">Get Your Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>" class="btn btn-outline btn-lg">
          <i data-lucide="phone"></i> <?php echo htmlspecialchars($phone); ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
