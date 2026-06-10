<?php
/**
 * Blog Post: Do You Need Permits to Build an Off-Grid Home in Oregon?
 * Superior Home Builders | Page One Insights v6.1
 */
$pageTitle       = 'Off-Grid Home Permits in Oregon | Rural Land Building';
$pageDescription = 'Planning an off-grid home in Oregon? Learn which permits may apply for rural home construction, septic, wells, solar power, plumbing, wood stoves, access, and land use before you build.';
$canonicalUrl    = 'https://superior-home-builders.pageone.cloud/blog/off-grid-home-permits-oregon/';
$ogImage         = $siteUrl . '/assets/images/custom-home-framing.webp';
$currentPage     = 'blog';

$postDate        = 'June 6, 2026';
$postDateISO     = '2026-06-06';
$postAuthor      = 'Superior Home Builders';
$postCategory    = 'Construction & Building Tips';

$schemaMarkup = json_encode([
    '@context'        => 'https://schema.org',
    '@graph'          => [
        [
            '@type'            => 'BlogPosting',
            '@id'              => 'https://superior-home-builders.pageone.cloud/blog/off-grid-home-permits-oregon/#article',
            'headline'         => 'Do You Need Permits to Build an Off-Grid Home in Oregon?',
            'description'      => 'Planning an off-grid home in Oregon? Learn which permits may apply for rural home construction, septic, wells, solar power, plumbing, wood stoves, access, and land use before you build.',
            'image'            => $siteUrl . '/assets/images/custom-home-framing.webp',
            'datePublished'    => '2026-06-06',
            'dateModified'     => '2026-06-06',
            'author'           => [
                '@type' => 'Organization',
                'name'  => 'Superior Home Builders',
                '@id'   => 'https://superior-home-builders.pageone.cloud/#organization',
            ],
            'publisher'        => [
                '@id' => 'https://superior-home-builders.pageone.cloud/#organization',
            ],
            'url'              => 'https://superior-home-builders.pageone.cloud/blog/off-grid-home-permits-oregon/',
            'mainEntityOfPage' => 'https://superior-home-builders.pageone.cloud/blog/off-grid-home-permits-oregon/',
            'articleSection'   => 'Construction & Building Tips',
            'keywords'         => 'off-grid home permits Oregon, do you need permits for off-grid cabin Oregon, is off-grid living legal in Oregon, building permits for rural land Oregon, Grant County Oregon building permits, off-grid home builder Eastern Oregon, build on raw land Oregon permits, Mount Vernon Oregon custom home builder, John Day Oregon off-grid builder',
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://superior-home-builders.pageone.cloud/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://superior-home-builders.pageone.cloud/blog/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Do You Need Permits to Build an Off-Grid Home in Oregon?', 'item' => 'https://superior-home-builders.pageone.cloud/blog/off-grid-home-permits-oregon/'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                [
                    '@type'          => 'Question',
                    'name'           => 'Do you need permits to build an off-grid home in Oregon?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. In most cases, building an off-grid home in Oregon still requires permits. Oregon requires building permits for all new home construction, and separate permits for plumbing, electrical, mechanical, and septic systems. Off-grid means the home generates its own power and manages its own water and waste — it does not exempt the structure from state building codes, inspections, or county land-use requirements. Permit requirements vary by county, project scope, and property type. Always confirm with the local building department before starting work.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Is off-grid living legal in Oregon?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes, off-grid living is legal in Oregon, but it is subject to building codes, land-use rules, septic regulations, and county zoning requirements. Off-grid refers to the home\'s power, water, and waste systems — not to an exemption from construction regulations. Whether you can build a full-time residence on a specific rural parcel in Oregon depends on zoning, land-use designations, access, and the ability to install an approved septic and water system.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Do you need a building permit for an off-grid cabin in Oregon?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'If the structure is intended as a dwelling — even part-time — it generally requires a building permit in Oregon. Oregon\'s Building Codes Division requires permits for new construction, structural changes, framing, plumbing, permanent electrical wiring, and mechanical systems. Small uninhabited storage sheds may fall below permit thresholds in some counties, but any structure intended for occupancy should be treated as a permitted project. Check with the local county building department for current thresholds.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Do wood stoves need a permit in Oregon?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. In Oregon, wood stoves, pellet stoves, fireplace inserts, and associated venting and chimney work are classified as mechanical installations that require a permit. Oregon EPA-certified stoves are required for new installations. Heating system permit requirements apply whether the home is on-grid or off-grid.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'What permits are required for off-grid solar and electrical in Oregon?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Oregon requires an electrical permit for installing or altering permanent wiring or electrical devices, including panels, circuits, outlets, battery systems, and generator connections. Off-grid solar systems that connect to the home\'s electrical panel require a permit. The permit and inspection process confirms that the wiring and connections meet safety standards regardless of whether the power source is a utility grid or a solar-plus-battery system.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Do septic systems require a permit in Oregon?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Yes. Oregon DEQ rules require a permit for the construction, installation, alteration, or repair of onsite wastewater treatment systems, including conventional septic systems, mound systems, and alternative designs. A site evaluation and soil assessment are required before permit approval. Septic planning should happen early in the off-grid design process because drain field location and setbacks affect where the home can be sited on the property.',
                    ],
                ],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
/* Post-specific styles only — the shared blog article template
   (hero, article layout, TOC, sidebar, CTA blocks) lives in framework.css */
.blog-hero__bg { position: absolute; inset: 0; background-image: url('/assets/images/custom-home-framing.webp'); background-size: cover; background-position: center 35%; opacity: 0.30; transform: scale(1.04); }
.blog-hero::before { content: ''; position: absolute; inset: 0; background: linear-gradient( 170deg, rgba(var(--color-secondary-rgb), 0.55) 0%, rgba(var(--color-primary-rgb), 0.88) 55%, rgba(var(--color-primary-rgb), 1) 100% ); z-index: 1; }
.warning-box { background: rgba(200, 60, 30, 0.05); border: 1px solid rgba(200, 60, 30, 0.3); border-left: 4px solid rgba(200, 60, 30, 0.7); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; padding: var(--space-xl); margin: var(--space-xl) 0 var(--space-2xl); display: flex; gap: var(--space-lg); align-items: flex-start; }
.warning-box__icon { width: 40px; height: 40px; min-width: 40px; background: rgba(200, 60, 30, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: rgba(180, 50, 20, 0.85); flex-shrink: 0; }
.warning-box__icon i, .warning-box__icon svg { width: 20px; height: 20px; }
.warning-box__body { min-width: 0; }
.warning-box__body strong { display: block; font-family: var(--font-heading); font-size: 0.95rem; font-weight: 900; color: var(--color-primary); margin-bottom: var(--space-xs); }
.warning-box__body p { font-size: 0.95rem !important; line-height: 1.7 !important; color: var(--color-text) !important; margin: 0 !important; }
.permits-table-wrap { margin: var(--space-xl) 0 var(--space-2xl); border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); }
.permits-table { width: 100%; border-collapse: collapse; font-size: 0.93rem; }
.permits-table thead { background: var(--color-secondary); }
.permits-table thead th { padding: var(--space-md) var(--space-lg); text-align: left; font-family: var(--font-heading); font-size: 0.8rem; font-weight: 900; letter-spacing: 0.07em; text-transform: uppercase; color: #fff; }
.permits-table tbody tr:nth-child(odd) { background: var(--color-bg-alt); }
.permits-table tbody tr:nth-child(even) { background: rgba(var(--color-secondary-rgb), 0.04); }
.permits-table tbody td { padding: var(--space-md) var(--space-lg); color: var(--color-text); line-height: 1.55; border-bottom: 1px solid var(--color-border); vertical-align: top; }
.permits-table tbody td:first-child { font-family: var(--font-heading); font-weight: 700; color: var(--color-primary); white-space: nowrap; }
.permits-table tbody td:last-child { text-align: center; font-weight: 700; color: var(--color-secondary); }
.permits-table tbody tr:last-child td { border-bottom: none; }
.permits-table-caption { font-size: var(--fs-xs); color: var(--color-text-light); font-style: italic; margin-top: var(--space-sm); text-align: center; }
@media (max-width: 767px) {
  .highlight-box, .warning-box { flex-direction: column; }
  .permits-table-wrap { overflow-x: auto; }
  .permits-table tbody td:first-child { white-space: normal; }
}
</style>

<!-- ════════════════════════════════════════════════════
     BLOG HERO
════════════════════════════════════════════════════ -->
<section class="blog-hero" aria-label="Blog post header">
  <div class="blog-hero__bg" aria-hidden="true"></div>
  <div class="blog-hero__inner">
    <div class="container">

      <!-- Breadcrumb -->
      <nav class="blog-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span class="blog-hero__breadcrumb-sep" aria-hidden="true">›</span>
        <a href="/blog/">Blog</a>
        <span class="blog-hero__breadcrumb-sep" aria-hidden="true">›</span>
        <span>Off-Grid Home Permits in Oregon</span>
      </nav>

      <span class="blog-hero__category">
        <i data-lucide="tag"></i>
        <?php echo htmlspecialchars($postCategory); ?>
      </span>

      <h1 class="blog-hero__title">
        Do You Need <em>Permits</em> to Build an Off-Grid Home in Oregon?
      </h1>

      <div class="blog-hero__meta">
        <div class="blog-hero__meta-item">
          <i data-lucide="calendar"></i>
          <time datetime="<?php echo $postDateISO; ?>"><?php echo $postDate; ?></time>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <i data-lucide="user"></i>
          <span><?php echo htmlspecialchars($postAuthor); ?></span>
        </div>
        <div class="blog-hero__meta-divider" aria-hidden="true"></div>
        <div class="blog-hero__meta-item">
          <i data-lucide="clock"></i>
          <span>16 min read</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SVG transition from hero to article -->
<div class="divider-blog-top" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ════════════════════════════════════════════════════
     ARTICLE CONTENT
════════════════════════════════════════════════════ -->
<article class="article-wrap" itemscope itemtype="https://schema.org/BlogPosting">
  <meta itemprop="headline"      content="Do You Need Permits to Build an Off-Grid Home in Oregon?">
  <meta itemprop="datePublished" content="<?php echo $postDateISO; ?>">
  <meta itemprop="author"        content="<?php echo htmlspecialchars($postAuthor); ?>">
  <meta itemprop="image"         content="<?php echo $siteUrl; ?>/assets/images/custom-home-framing.webp">

  <div class="container">
    <div class="article-layout">

      <!-- ── MAIN ARTICLE BODY ───────────────────────────────────── -->
      <div class="article-body" itemprop="articleBody">

        <a href="/blog/" class="back-to-blog">
          <i data-lucide="arrow-left"></i>
          Back to Blog
        </a>

        <!-- Featured image -->
        <img
          src="/assets/images/custom-home-framing.webp"
          alt="Custom home framing in progress on a rural property in Eastern Oregon — building a permitted off-grid home in Grant County near Mount Vernon"
          class="article-featured-img"
          width="1200"
          height="675"
          loading="eager"
          fetchpriority="high">

        <!-- Intro -->
        <p>
          One of the most common assumptions people make when they start planning an off-grid home in Oregon is that living off the grid also means living outside the permit system. It does not. Off-grid refers to how your home gets power, water, and handles waste — not to an exemption from building codes, inspection requirements, land-use rules, or county regulations. In most cases, building an off-grid home in Oregon requires permits for the structure, plumbing, electrical, mechanical systems, and the septic system — regardless of whether those systems connect to a utility grid.
        </p>
        <p>
          This matters for anyone planning a rural build around Mount Vernon, John Day, Canyon City, Prairie City, Grant County, Baker City, Burns, La Grande, Pendleton, and other Eastern Oregon communities. County-level permit requirements, land-use rules, and access standards all apply to off-grid projects the same way they apply to conventional construction. Understanding the permit landscape before you design, purchase land, or break ground saves time, money, and significant legal risk.
        </p>
        <p>
          <em>Permit requirements vary by county, property type, and project scope. The information in this article is a general overview. Always confirm current requirements with the local building department and county planning office before starting work.</em>
        </p>

        <!-- AEO Answer Block -->
        <div class="answer-block">
          <h3>The direct answer: Yes — off-grid homes in Oregon generally still require permits.</h3>
          <p>Oregon requires building permits for all new residential construction. Separate permits are typically required for plumbing, electrical, mechanical systems (including wood stoves and propane), and septic. Off-grid status does not exempt a home from these requirements. What changes with an off-grid build is the systems involved — power from solar rather than a utility, water from a well or cistern rather than a municipal line — but the construction still has to meet Oregon building codes and pass inspections. Start with land-use and zoning review, then work through each permit category for your specific project and county.</p>
        </div>

        <!-- ── OFF-GRID DOES NOT MEAN NO BUILDING CODE ──────────── -->
        <h2 id="no-code-exemption">Off-Grid Does Not Mean "No Building Code"</h2>

        <p>
          Oregon's Building Codes Division establishes permit requirements for new construction and for structural, plumbing, mechanical, and electrical work across the state. Those requirements apply to a home whether it draws power from the utility grid or from a solar array and battery bank. The building code governs how the home is constructed — foundation, framing, insulation, egress, fire safety, structural loads — and that standard does not change based on the power source.
        </p>
        <p>
          It helps to understand the two separate regulatory systems that apply to any rural residential build in Oregon. Building code tells you <em>how</em> a structure must be built. Land-use planning rules tell you <em>whether</em> you can build a residence on a specific parcel. Both apply. An off-grid homebuilder has to satisfy both sets of requirements — and land-use review typically comes first, because it determines whether the project is permitted to proceed at all.
        </p>

        <ul>
          <li><strong>New home construction:</strong> Requires a building permit in Oregon. The permit covers structural framing, foundation, roofing, exterior envelope, and the inspection sequence for each phase.</li>
          <li><strong>Cabins intended as dwellings:</strong> Any structure intended for human occupancy — even seasonal or part-time — is generally treated as a dwelling and subject to the same permit requirements as a full-time residence.</li>
          <li><strong>Structural additions and framing changes:</strong> Adding a room, extending a structure, or making significant framing modifications typically requires a permit even on an existing structure.</li>
          <li><strong>Decks and covered structures:</strong> Decks above certain size thresholds, covered porches, and attached structures often require permits depending on size and attachment to the main structure.</li>
          <li><strong>New window or door openings:</strong> Cutting new openings in load-bearing walls requires a permit in most cases.</li>
          <li><strong>Plumbing systems:</strong> Interior plumbing — including water lines, drains, water heaters, and pressure systems — requires a plumbing permit.</li>
          <li><strong>Permanent electrical wiring:</strong> Panels, circuits, outlets, fixtures, battery systems, and generator connections require an electrical permit.</li>
          <li><strong>Heating systems:</strong> Wood stoves, fireplace inserts, pellet stoves, gas appliances, and HVAC systems require a mechanical permit.</li>
          <li><strong>Gas and propane work:</strong> Propane line installation and connection of gas appliances require permits in Oregon.</li>
        </ul>

        <div class="pull-quote reveal-up">
          <p>Living off-grid changes how your home gets power, water, and heat. It does not remove the need for safe construction, structural inspections, or permit compliance.</p>
        </div>

        <!-- ── LAND USE, ZONING, AND ACCESS ──────────────────────── -->
        <h2 id="land-use-zoning">Start With Land Use, Zoning, and Access</h2>

        <p>
          Before applying for a building permit, the first question to answer is whether a residence is legally allowed on the parcel at all. This is a land-use and zoning question, and it is separate from the building permit process. Zoning determines what uses are permitted on a property. Agricultural or forest-zoned land in Oregon has specific rules about what types of dwellings are allowed — and many rural parcels are subject to use restrictions that limit or prohibit full-time residential development.
        </p>

        <!-- Inline image -->
        <figure class="article-img-block reveal-up">
          <img
            src="/assets/images/owner-eastern-oregon-builder.webp"
            alt="Rural Eastern Oregon high desert landscape near Mount Vernon — evaluating land use, zoning, and buildability for an off-grid home in Grant County"
            width="1200"
            height="675"
            loading="lazy">
          <figcaption>A rural parcel in Eastern Oregon may have the views and isolation you want but still face significant constraints around zoning, access, septic placement, and water — all of which need to be confirmed before purchasing or designing.</figcaption>
        </figure>

        <p>
          As we covered in our earlier article on <a href="/blog/building-off-grid-home-raw-land-eastern-oregon/">building an off-grid home on raw land in Eastern Oregon</a>, the single most costly mistake buyers make is purchasing land before confirming it is legally buildable. A parcel may be beautiful, remote, and affordable — and still create major compliance challenges once you try to get a building permit.
        </p>

        <ul>
          <li><strong>Zoning designation:</strong> Confirm the county zoning for the parcel and what types of dwellings — single-family, manufactured, accessory structures — are allowed under that designation.</li>
          <li><strong>Agricultural and forest-use restrictions:</strong> EFU (Exclusive Farm Use) and forest-zoned land in Oregon has specific rules about non-farm dwellings. Some parcels that look like good candidates for rural homes have use restrictions that significantly limit or prohibit residential development.</li>
          <li><strong>Setbacks:</strong> Property lines, roads, streams, and neighboring uses typically require minimum setback distances. On small or oddly shaped parcels, setbacks can constrain where a home can be sited.</li>
          <li><strong>Easements:</strong> Access easements, utility easements, and conservation easements can affect where structures can be placed and what modifications are allowed.</li>
          <li><strong>Road and fire access:</strong> Oregon building and fire codes typically specify minimum driveway widths, turnaround areas, and clearance requirements for emergency vehicle access. A private access road that cannot accommodate a fire engine creates both permit and insurance issues.</li>
          <li><strong>Driveway location and permitting:</strong> Driveway connections to county roads may require a separate access permit from the county road department.</li>
          <li><strong>Slope and drainage:</strong> Steep terrain, floodplain areas, or properties with significant drainage issues may face additional review or restrictions.</li>
          <li><strong>Whether the parcel is legally buildable:</strong> Tax lots are not always legal lots of record. Some rural parcels in Oregon were created before modern land division rules and may require a partition or lot-line adjustment before a building permit can be issued.</li>
        </ul>

        <div class="highlight-box reveal-up">
          <div class="highlight-box__icon" aria-hidden="true">
            <i data-lucide="map-pin"></i>
          </div>
          <div class="highlight-box__body">
            <strong>Confirm buildability before you buy — not after.</strong>
            <p>Before purchasing rural land, confirm that the property is not just beautiful — it is buildable. A parcel may have the views you want but still create major challenges with zoning, access, septic placement, water, slope, or permit eligibility. Contact the county planning department and building department before committing to a purchase.</p>
          </div>
        </div>

        <!-- ── BUILDING PERMITS FOR THE HOME ─────────────────────── -->
        <h2 id="building-permits-home">Building Permits for the Home or Cabin</h2>

        <p>
          If the structure is intended as a residence — full-time, part-time, or seasonal — it should be planned and permitted like a home rather than a storage shed. Oregon requires building permits for all new residential construction, and the permit process covers the full sequence of inspections that verify each phase of the build meets code standards.
        </p>
        <p>
          For a <a href="/services/custom-home-building/">custom home</a> on rural land in Eastern Oregon, the permit scope typically covers:
        </p>

        <ul>
          <li><strong>Foundation:</strong> Foundation type, depth, reinforcing, and frost protection must meet Oregon code and be reviewed at excavation and forming stages before concrete is poured.</li>
          <li><strong>Framing:</strong> <a href="/services/framing/">Structural framing</a>, wall layouts, beam sizing, header spans, and floor system must be inspected before sheathing covers the framing.</li>
          <li><strong>Roof structure:</strong> Engineered or conventionally framed roof systems are inspected for structural adequacy, ridge connections, and proper attachment.</li>
          <li><strong>Snow load and wind exposure:</strong> Eastern Oregon building sites are subject to significant snow loads and wind exposure. Structural designs must account for local loading conditions, which vary by elevation and location across Grant County.</li>
          <li><strong>Insulation:</strong> Insulation installation is inspected before drywall to verify coverage, vapor control, and air sealing meet code minimums.</li>
          <li><strong>Windows and doors:</strong> <a href="/services/windows-and-doors/">Window and door</a> installations are verified for proper flashing, sealing, and egress compliance.</li>
          <li><strong>Egress:</strong> Bedrooms require egress windows of minimum size and height from the floor. This applies to off-grid homes the same as any other residential construction.</li>
          <li><strong>Fire safety:</strong> Smoke detectors, carbon monoxide detectors, fire blocking in framing cavities, and clearances around heating appliances are all part of the final inspection.</li>
          <li><strong>Final inspection:</strong> All systems must pass final inspection before the home can be occupied. The certificate of occupancy (or equivalent county document) is the end product of the permit process.</li>
        </ul>

        <div class="highlight-box reveal-up">
          <div class="highlight-box__icon" aria-hidden="true">
            <i data-lucide="hard-hat"></i>
          </div>
          <div class="highlight-box__body">
            <strong>Superior Home Builders manages the full permit process as part of its GC scope.</strong>
            <p>From site assessment and permit application through framing inspections, mechanical rough-in, and final walk-through, Superior handles the coordination between the owner, county building department, and subcontractors throughout the construction sequence.</p>
          </div>
        </div>

        <!-- ── ELECTRICAL PERMITS ─────────────────────────────────── -->
        <h2 id="electrical-permits">Electrical Permits, Solar, Batteries, and Generators</h2>

        <p>
          Off-grid power does not mean unregulated wiring. Oregon requires an electrical permit for installing or altering permanent wiring or electrical devices — and that requirement applies whether the power source is a utility grid, a solar array, a battery bank, or a generator. The permit and inspection process exists because improperly wired electrical systems are a leading cause of residential fires, and off-grid systems carry the same risks as grid-tied systems if wiring and connections are not done correctly.
        </p>
        <p>
          A solar array may generate the electricity, but the home still needs safe wiring, properly rated panels, protected circuits, appropriately sized conductors, and inspection-ready installation throughout. The components that connect the solar and battery system to the home's loads — the inverter, charge controller, DC disconnect, main panel, and branch circuits — are all subject to permit requirements.
        </p>

        <ul>
          <li><strong>Main electrical panel:</strong> The service panel, sub-panels, and all breakers require an electrical permit. Panel sizing for an off-grid system must account for the inverter's output and the home's full load.</li>
          <li><strong>Branch circuits:</strong> Every circuit — kitchen outlets, bedroom circuits, bathroom fans, lighting circuits — is part of the permitted electrical scope.</li>
          <li><strong>Battery system connections:</strong> DC wiring between the solar array, batteries, and inverter requires proper overcurrent protection and wire sizing. These connections are part of the electrical permit scope.</li>
          <li><strong>Inverter installation:</strong> The inverter — which converts DC battery power to AC household current — must be properly mounted, ventilated, and connected with appropriately rated wiring.</li>
          <li><strong>Generator connections:</strong> A generator connected to the home's electrical system requires a transfer switch to prevent backfeed. The transfer switch and generator connection are part of the electrical permit scope.</li>
          <li><strong>Outlets and fixtures:</strong> All receptacles, switches, and fixtures in occupied spaces are part of the electrical rough-in inspection and the final inspection.</li>
          <li><strong>Detached shops and outbuildings:</strong> A separate shop, garage, or outbuilding with electrical service requires its own electrical permit.</li>
          <li><strong>Backup power planning:</strong> Some off-grid builds use two separate power circuits — a primary solar-plus-battery circuit and a generator backup — that require careful transfer switching and labeling to be safe and permit-ready.</li>
        </ul>

        <div class="warning-box reveal-up">
          <div class="warning-box__icon" aria-hidden="true">
            <i data-lucide="alert-triangle"></i>
          </div>
          <div class="warning-box__body">
            <strong>Unpermitted electrical work can void homeowner's insurance and complicate financing or resale.</strong>
            <p>An off-grid home with unpermitted electrical wiring may face insurance claim denials in the event of a fire and complications when trying to sell or refinance the property. Permitting the electrical system protects you — not just the county.</p>
          </div>
        </div>

        <!-- Inline image -->
        <figure class="article-img-block reveal-up">
          <img
            src="/assets/images/blog/eastern-oregon-high-desert-site.webp"
            alt="Eastern Oregon high desert terrain — site planning for off-grid power, solar, water, and septic systems on rural land in Grant County"
            width="1200"
            height="675"
            loading="lazy">
          <figcaption>Off-grid electrical systems — solar panels, battery banks, inverters, generators, and home wiring — all require proper permits and inspections under Oregon code.</figcaption>
        </figure>

        <!-- ── WOOD STOVES AND HEATING PERMITS ────────────────────── -->
        <h2 id="heating-permits">Wood Stoves, Propane, and Heating Permits</h2>

        <p>
          Heating is one of the most important design decisions on any off-grid Eastern Oregon build, and it is also one of the most permit-intensive categories. Oregon classifies wood stoves, pellet stoves, fireplace inserts, propane appliances, and their associated venting and chimney systems as mechanical installations — all of which require a mechanical permit. This category gets particular attention in Eastern Oregon because cold winters, freeze-thaw cycles, and the remoteness of many build sites make heating systems both more critical and more complex than in milder climates.
        </p>
        <p>
          In Eastern Oregon, heating is not an afterthought. Temperatures at elevation in Grant County can drop to −10°F or lower in winter, and snow accumulation and freeze-thaw conditions affect everything from the chimney installation to the propane line routing and freeze protection requirements. A permitted, inspected heating system is one of the most important safety features on any rural Eastern Oregon home.
        </p>

        <ul>
          <li><strong>Wood stoves:</strong> EPA-certified wood stoves are required for new installations in Oregon. The stove installation, hearth pad, clearances from combustibles, and chimney connector are all part of the mechanical permit scope.</li>
          <li><strong>Pellet stoves:</strong> Pellet stove installations require a mechanical permit and comply with clearance and venting requirements similar to wood stoves.</li>
          <li><strong>Fireplace inserts:</strong> Inserting a stove into an existing masonry fireplace requires a permit, and the venting must be lined to meet current standards.</li>
          <li><strong>Venting and chimneys:</strong> Single-wall or double-wall flue connectors, factory-built chimney systems, and masonry chimneys are all part of the mechanical permit scope. Exterior chimney runs in Eastern Oregon require attention to freeze protection and creosote management in cold conditions.</li>
          <li><strong>Propane appliances:</strong> Propane-fired furnaces, boilers, water heaters, cook stoves, and dryers all require a mechanical permit for connection. Propane is common on off-grid Eastern Oregon builds as backup heat and for appliances that draw too much power for the solar system.</li>
          <li><strong>Gas piping:</strong> All propane line runs — from the tank to each appliance — require a permit and pressure testing before use.</li>
          <li><strong>Backup heat systems:</strong> Many off-grid builds use layered heating: a primary system (wood stove or mini-split) plus a propane or electric backup. Each system requires its own permit and inspection.</li>
          <li><strong>Freeze protection:</strong> In Eastern Oregon, mechanical room layout, pipe routing insulation, and heat trace on exposed components are all part of the design review process for off-grid builds in cold climates.</li>
        </ul>

        <!-- ── PLUMBING PERMITS ────────────────────────────────────── -->
        <h2 id="plumbing-permits">Plumbing Permits and Water Systems</h2>

        <p>
          Interior plumbing requires a plumbing permit in Oregon — including in off-grid homes where the water source is a private well, spring, or cistern rather than a municipal supply. The permit requirement covers the rough-in plumbing (water supply lines, drain lines, vent stack), fixture connections, water heater installation, and the pressure system connection from the well or storage tank into the home.
        </p>

        <ul>
          <li><strong>Interior water lines:</strong> Copper, PEX, or CPVC supply lines throughout the home are inspected at rough-in before walls are closed.</li>
          <li><strong>Water heaters:</strong> Water heater installation — whether propane-fired, electric heat pump, or tankless — requires a permit. Seismic strapping and TPR valve and discharge pipe are inspected as part of the installation.</li>
          <li><strong>Pressure tanks:</strong> The pressure tank and pressure switch that serve the home's water supply system are typically included in the plumbing permit scope.</li>
          <li><strong>Pump systems:</strong> Submersible pump wiring is part of the electrical permit; the pressure system connections into the home are part of the plumbing permit.</li>
          <li><strong>Cistern connections:</strong> If the home draws from a storage cistern fed by a pump or gravity from the well, the connection point into the home's plumbing is part of the permit scope.</li>
          <li><strong>Freeze protection:</strong> At Eastern Oregon elevations, plumbing must be routed to avoid freezing — buried below frost depth outdoors, protected in unconditioned spaces indoors. Freeze-protection design is reviewed as part of the plumbing permit for cold-climate builds.</li>
          <li><strong>Drain and vent lines:</strong> All drain lines, trap installations, and the plumbing vent stack require inspection before rough-in is covered.</li>
          <li><strong>Utility trenches:</strong> Water line trenches from the wellhead or cistern to the home must be at appropriate depth and reviewed prior to backfill in most jurisdictions.</li>
        </ul>

        <!-- ── WELLS AND WATER PLANNING ────────────────────────────── -->
        <h2 id="wells-water">Wells, Springs, Cisterns, and Water Planning</h2>

        <p>
          Water planning for an off-grid build on rural land in Eastern Oregon is a technical and regulatory process that should happen before the floor plan is finalized. Where the well, cistern, pump house, pressure tank, and buried lines are located affects the entire site layout — and water quality and availability need to be confirmed before the home is designed around them. As we covered in our post on <a href="/blog/off-grid-home-cost-eastern-oregon/">the cost of building an off-grid home in Eastern Oregon</a>, water is one of the most variable cost categories and one of the most important site planning decisions.
        </p>

        <ul>
          <li><strong>Existing well records:</strong> Well records filed with the Oregon Water Resources Department (OWRD) are publicly searchable. Neighboring well logs give a rough indication of expected depth and geology for a given area of Grant County — though individual parcels can vary significantly.</li>
          <li><strong>Water rights and landowner-constructed wells:</strong> Oregon Water Resources Department rules govern private water well construction, including permit, fee, and bond requirements when a landowner constructs or alters a water supply well unless they use a licensed and bonded well constructor. Confirm current requirements with OWRD before any well work begins.</li>
          <li><strong>Well flow and reliability:</strong> Flow rate — measured in gallons per minute — determines how much storage or pressure tank capacity is needed. A well that produces 1 GPM requires significant storage to supply a household's peak demand; a 5+ GPM well can supply the home more directly. Flow testing should be completed before relying on an existing well.</li>
          <li><strong>Water quality testing:</strong> Oregon State University's Well Water Program recommends testing private well and spring water for coliform bacteria, nitrates, and common local contaminants including arsenic, iron, manganese, and hardness. Eastern Oregon groundwater can carry elevated iron and sediment levels depending on the geology.</li>
          <li><strong>Cistern sizing:</strong> For homes served by low-yield wells or spring systems, a large storage cistern — 1,000 to 2,500 gallons or more — buffers against yield variation and pump outages. Cistern sizing should be matched to the home's daily water use and the well's recovery rate.</li>
          <li><strong>Pump house location:</strong> The pump house, pressure tank, and well connection need to be located, insulated, and protected from freezing. In Grant County, a well house with supplemental heat is common on properties at higher elevations where temperatures drop well below zero.</li>
          <li><strong>Filtration:</strong> Well water in rural Eastern Oregon often requires filtration for sediment, iron, or other minerals. A water treatment system should be sized and placed in the design before the mechanical room layout is finalized.</li>
          <li><strong>Backup water storage:</strong> Some off-grid builds include a secondary water source — a backup cistern filled by water hauling service — as insurance against pump or well failure, particularly on remote parcels where a repair call may take days in winter.</li>
        </ul>

        <div class="highlight-box reveal-up">
          <div class="highlight-box__icon" aria-hidden="true">
            <i data-lucide="droplets"></i>
          </div>
          <div class="highlight-box__body">
            <strong>Water planning should happen before the floor plan is finalized.</strong>
            <p>Where the well, cistern, pump house, pressure tank, and buried water lines go can affect the entire site layout — including where the home sits, how the mechanical room is configured, and how freeze protection is designed. Address water planning early, not after the driveway and home location are already decided.</p>
          </div>
        </div>

        <!-- ── SEPTIC PERMITS ──────────────────────────────────────── -->
        <h2 id="septic-permits">Septic Permits and Wastewater Rules</h2>

        <p>
          Septic permitting is one of the most important and most often underestimated parts of off-grid planning on rural land in Oregon. Oregon DEQ's onsite wastewater rules apply to the construction, alteration, repair, operation, and maintenance of onsite wastewater treatment systems — and their purpose is to protect public health and water quality. No residence in Oregon can legally operate without an approved wastewater disposal system, and the permitting process for that system involves a site evaluation, soil assessment, design approval, and installation inspection sequence that takes significant time to complete.
        </p>
        <p>
          The critical planning issue is this: a property may have room for a house in the location you want but not a practical septic drain field in the same area. Drain field placement is governed by setback requirements, soil permeability, slope, proximity to water features, and available area. On a sloped or constrained parcel, the drain field location may force the home to be sited in a location you would not have chosen otherwise — or, in some cases, may reveal that a full-size conventional septic system is not feasible on that parcel at all.
        </p>

        <!-- Inline image -->
        <figure class="article-img-block reveal-up">
          <img
            src="/assets/images/blog/rural-parcel-site-planning.webp"
            alt="Remote rural parcel in Eastern Oregon — evaluating septic feasibility, well placement, and buildability before construction in Grant County"
            width="1200"
            height="675"
            loading="lazy">
          <figcaption>Septic evaluation should happen early — before the home location is committed — because drain field requirements can determine where a residence can actually be sited on the property.</figcaption>
        </figure>

        <ul>
          <li><strong>Septic feasibility evaluation:</strong> Before applying for a septic permit, a licensed site evaluator or engineer assesses the parcel for soil conditions, slope, proximity to water, and available area for a drain field. This evaluation should happen before finalizing the home's location.</li>
          <li><strong>Soil permeability testing:</strong> Percolation testing and soil profile evaluation determine how quickly the soil absorbs treated wastewater. Sandy or gravelly soils in Eastern Oregon often perform well; clay-heavy soils, shallow bedrock, or hardpan layers require alternative system designs.</li>
          <li><strong>Drain field location and setbacks:</strong> Oregon DEQ rules specify minimum setback distances from wells, property lines, drainage features, and structures. On rural parcels with existing features or limited flat area, these setbacks can significantly constrain where both the drain field and the home can be placed.</li>
          <li><strong>Septic design:</strong> A licensed designer or engineer prepares the septic plan for county and DEQ approval. System size is determined by bedroom count and soil conditions. Design review adds time to the pre-construction schedule.</li>
          <li><strong>Tank and drain field installation:</strong> Concrete or plastic septic tank, distribution system, and drain field installation are all part of the permitted scope. A licensed septic installer must perform the work, and inspections occur at tank placement and drain field installation stages.</li>
          <li><strong>Replacement area:</strong> Oregon requires a designated replacement area for the drain field — a section of the property reserved for future drain field expansion if the primary field fails. The replacement area adds to the minimum land area needed for septic feasibility.</li>
          <li><strong>Mound and alternative systems:</strong> Where conventional gravity drain fields are not feasible due to soil conditions, slope, or groundwater depth, engineered alternatives — mound systems, pressure-dosed systems, or other DEQ-approved designs — are available but add cost and design complexity.</li>
          <li><strong>Composting toilets:</strong> Oregon allows composting toilets in limited applications with appropriate county and DEQ approval. A composting toilet typically still requires an approved graywater management system for sink, shower, and laundry drainage. Check current Grant County requirements before designing around composting toilet use.</li>
        </ul>

        <div class="warning-box reveal-up">
          <div class="warning-box__icon" aria-hidden="true">
            <i data-lucide="alert-circle"></i>
          </div>
          <div class="warning-box__body">
            <strong>Septic planning should happen before the home location is committed to.</strong>
            <p>The most expensive septic mistake in rural Eastern Oregon is finalizing a homesite location before running the septic evaluation. The drain field is often the binding constraint on where a house can sit. Running the evaluation early — before the driveway is cut and foundation is staked — prevents costly redesigns and schedule delays.</p>
          </div>
        </div>

        <!-- ── PERMITS SUMMARY TABLE ───────────────────────────────── -->
        <h2 id="permits-table">Off-Grid Permit Categories: What Requires a Permit</h2>

        <p>
          The table below summarizes the major permit categories that apply to a new off-grid residential build on rural land in Oregon. Requirements vary by county and project scope — confirm specifics with the local building department.
        </p>

        <div class="permits-table-wrap">
          <table class="permits-table" aria-label="Off-grid home permit categories">
            <thead>
              <tr>
                <th scope="col">Permit Category</th>
                <th scope="col">What It Covers</th>
                <th scope="col">Required?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Building Permit</td>
                <td>Foundation, framing, roofing, insulation, windows &amp; doors, egress, fire blocking, final inspection</td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Plumbing Permit</td>
                <td>Water supply lines, drain/waste/vent, water heater, pressure tank, fixtures</td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Electrical Permit</td>
                <td>Panel, branch circuits, outlets, fixtures, battery system, inverter, generator transfer switch</td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Mechanical Permit</td>
                <td>Wood stove, pellet stove, fireplace insert, chimney/venting, propane appliances, gas piping, HVAC</td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Septic Permit</td>
                <td>Site evaluation, system design, tank installation, drain field installation, final inspection</td>
                <td>Yes</td>
              </tr>
              <tr>
                <td>Land Use / Zoning Review</td>
                <td>Confirms residence is allowed, setbacks, access, use designation, lot legality</td>
                <td>Yes — before building permit</td>
              </tr>
              <tr>
                <td>Well / Water Rights</td>
                <td>New well drilling or alteration, pump installation, OWRD permit if applicable</td>
                <td>Verify with OWRD</td>
              </tr>
              <tr>
                <td>Access / Driveway Permit</td>
                <td>Connection to county road, driveway width, drainage, sight distance</td>
                <td>Often required</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="permits-table-caption">Table: General permit categories for off-grid residential construction in Oregon. Requirements vary by county and project. Confirm with local building and planning departments before starting work.</p>

        <!-- ── COMMON PERMIT MISTAKES ──────────────────────────────── -->
        <h2 id="permit-mistakes">Common Permit Mistakes With Off-Grid Projects</h2>

        <p>
          Most permit problems on off-grid builds in Eastern Oregon come from the same set of avoidable mistakes. Understanding them in advance is one of the best things a prospective builder can do before spending money on land, design, or materials.
        </p>

        <ul>
          <li><strong>Buying land before checking buildability:</strong> The most costly mistake. Parcel availability and parcel buildability are not the same thing. Zoning, septic feasibility, access, water availability, and lot legality all need to be confirmed before purchase.</li>
          <li><strong>Assuming "off-grid" means "no permits":</strong> This assumption leads builders directly into compliance problems. Oregon's permit requirements are independent of the home's power, water, and waste systems.</li>
          <li><strong>Installing solar before planning the home's electrical system:</strong> Solar array sizing and battery capacity need to be matched to the home's designed loads. Installing a system before the home is designed often results in a system that is too small or poorly configured for what the home actually needs.</li>
          <li><strong>Choosing a homesite before the septic evaluation:</strong> Drain field location constraints regularly force homesite relocations. Running the septic evaluation before committing to a location avoids this.</li>
          <li><strong>Forgetting about driveway and emergency access requirements:</strong> Building codes and fire access requirements specify minimum driveway dimensions, slope, and turnaround areas. A driveway designed for personal use may not meet permit requirements for emergency access.</li>
          <li><strong>Building too far from practical material delivery routes:</strong> Remote homesites in Grant County can be inaccessible to concrete trucks, truss delivery flats, and heavy equipment. Distance from the paved road affects both permit access requirements and construction logistics cost.</li>
          <li><strong>Underestimating snow load and wind exposure:</strong> Structural designs for Eastern Oregon sites must be engineered for local load requirements. A standard residential design from a western Oregon climate zone does not automatically meet Grant County load requirements.</li>
          <li><strong>Treating water, power, and waste as separate decisions:</strong> The well, septic, solar, and home must be designed together. Well location affects drain field setbacks. Solar exposure affects home orientation. Mechanical room location affects plumbing and electrical routing. These systems need integrated planning.</li>
          <li><strong>Hiring a contractor unfamiliar with rural county permit processes:</strong> Permit timelines, inspection availability, and rural building department processes in Grant County differ significantly from urban or suburban jurisdictions. A contractor experienced in Eastern Oregon rural construction understands the local process and can sequence work accordingly.</li>
        </ul>

        <!-- ── WHY A LOCAL BUILDER MATTERS ────────────────────────── -->
        <h2 id="local-builder">Why a Local Eastern Oregon Builder Matters for Permit Navigation</h2>

        <p>
          Building in Grant County and the surrounding Eastern Oregon high desert is different from building in the Willamette Valley or in a suburban county where permit offices handle high volume and standard residential projects every day. Grant County's building department, road department, and planning office operate in a rural context where permit processing timelines, inspection scheduling, and the specific conditions of high-desert construction all play a role in how a project actually gets built.
        </p>
        <p>
          A builder familiar with local permit processes knows which questions to ask the county before the project starts, which submittals to prepare in advance to avoid delays, and how to sequence construction to work with rural inspection availability. That local knowledge has real value in a county where a missed inspection window might mean a two-week delay rather than a one-day callback.
        </p>

        <ul>
          <li><strong>Grant County permit familiarity:</strong> Understanding how the local building department and planning office process applications, what submittals are required, and typical review timelines is local knowledge that cannot be substituted with internet research.</li>
          <li><strong>Rural site planning:</strong> Experienced Eastern Oregon builders have walked dozens of parcels across Grant County, Baker County, Harney County, and Union County. That experience informs site planning, homesite selection, access assessment, and septic evaluation recommendations.</li>
          <li><strong>Snow load and structural experience:</strong> Designing and building for Eastern Oregon's snow load requirements — which vary by elevation and exposure — requires direct experience with local conditions, not just code lookup.</li>
          <li><strong>Freeze-thaw cycles and building details:</strong> Water management, foundation insulation, plumbing routing, and mechanical room design all need to account for Eastern Oregon's freeze-thaw cycles in ways that differ from standard residential construction.</li>
          <li><strong>Long material deliveries:</strong> Remote builds in Grant County often require longer lead times on material orders, coordination of specialized deliveries, and scheduling around seasonal access constraints. Local builders plan for these realities from the project start.</li>
          <li><strong>Coordinated subcontractor scheduling:</strong> Electrical, plumbing, and mechanical subcontractors in rural Eastern Oregon are fewer in number and have less flexible schedules than in urban areas. A general contractor with established working relationships can sequence these trades efficiently.</li>
          <li><strong>Realistic project timelines:</strong> Off-grid builds in Eastern Oregon take longer than comparable builds in urban areas because of material lead times, weather windows, inspection scheduling, and distance. A local builder gives you a realistic schedule rather than an optimistic one.</li>
        </ul>

        <div class="pull-quote reveal-up">
          <p>An off-grid build is not just a house project. It is a site, access, water, waste, power, heating, and permitting project. The earlier those pieces are coordinated, the fewer expensive surprises you face along the way.</p>
        </div>

        <!-- ── PLANNING CTA SECTION ────────────────────────────────── -->
        <h2 id="planning-your-build">Planning an Off-Grid Build in Eastern Oregon?</h2>

        <p>
          If you are thinking about building off-grid in Eastern Oregon — whether you already own land, are evaluating a parcel, or are in the early planning stages — the most valuable first step is a conversation with a builder who understands the local permit process, rural site conditions, and what it actually takes to build in Grant County and surrounding communities.
        </p>
        <p>
          Superior Home Builders can help you understand the practical construction side of your project, including site access evaluation, buildability assessment, framing, weatherproofing, permit application and management, septic coordination, water planning, and full custom home construction. We have been building in the Mount Vernon, John Day, Canyon City, Prairie City, and Grant County area for over <?php echo $yearsInBusiness; ?> years, and we work with homeowners in the planning phase — not just after plans are already drawn.
        </p>

        <div class="checklist-block reveal-up">
          <div class="checklist-block__title"><i data-lucide="check-square"></i> What to confirm before you break ground on an off-grid build</div>
          <ul>
            <li>Zoning confirms a full-time residence is allowed on the specific parcel</li>
            <li>The lot is a legal lot of record eligible for a building permit</li>
            <li>Driveway and emergency access meet county road and fire code requirements</li>
            <li>Septic evaluation confirms drain field feasibility at the intended homesite</li>
            <li>Well or water source is confirmed available, reliable, and water quality tested</li>
            <li>Building permit application is complete with all required site plan, architectural, and structural submittals</li>
            <li>Electrical, plumbing, and mechanical permit scopes are coordinated with the building permit</li>
            <li>Solar and power system is sized to match the home's designed electrical loads</li>
            <li>Structural design accounts for local snow load and wind exposure requirements</li>
            <li>Construction schedule accounts for rural inspection availability and seasonal access</li>
          </ul>
        </div>

        <!-- Internal links -->
        <p>
          For more on what to evaluate before buying rural land: <a href="/blog/building-off-grid-home-raw-land-eastern-oregon/">Building an Off-Grid Home on Raw Land in Eastern Oregon</a>. For a complete look at what off-grid builds cost beyond the house: <a href="/blog/off-grid-home-cost-eastern-oregon/">How Much Does It Cost to Build an Off-Grid Home in Eastern Oregon?</a>. For background on off-grid living broadly: <a href="/blog/off-the-grid-living-oregon/">Off-the-Grid Living in Oregon</a>. To explore our construction services: <a href="/services/custom-home-building/">Custom Home Building</a>, <a href="/services/framing/">Framing</a>, <a href="/services/windows-and-doors/">Windows and Doors</a>, and <a href="/service-area/">Service Area</a>.
        </p>

        <!-- Bottom CTA block -->
        <div class="article-cta-block reveal-up">
          <div class="article-cta-icon" aria-hidden="true">
            <i data-lucide="clipboard-list"></i>
          </div>
          <div class="article-cta-copy">
            <h3>Before You Buy Land or Start Designing — Talk With a Builder Who Knows Eastern Oregon.</h3>
            <p>Superior Home Builders offers site consultations and practical guidance on access, permits, water, septic, power, and buildability for rural properties in Grant County and surrounding Eastern Oregon communities. Contact us for a free, no-pressure consultation.</p>
          </div>
          <div class="article-cta-actions">
            <a href="/contact/" class="btn btn-secondary">
              <i data-lucide="phone"></i>
              Free Consultation
            </a>
            <a href="/services/custom-home-building/" class="btn btn-outline">
              <i data-lucide="hard-hat"></i>
              Custom Homes
            </a>
          </div>
        </div>

      </div><!-- /.article-body -->

      <!-- ── SIDEBAR ─────────────────────────────────────────────── -->
      <aside class="article-sidebar" aria-label="Article sidebar">

        <!-- Table of Contents -->
        <div class="sidebar-card">
          <h4><i data-lucide="list"></i> In This Article</h4>
          <ul class="toc-list" role="list">
            <li><a href="#no-code-exemption">Off-Grid &amp; Building Code</a></li>
            <li><a href="#land-use-zoning">Land Use &amp; Zoning</a></li>
            <li><a href="#building-permits-home">Building Permits</a></li>
            <li><a href="#electrical-permits">Electrical &amp; Solar</a></li>
            <li><a href="#heating-permits">Wood Stoves &amp; Heating</a></li>
            <li><a href="#plumbing-permits">Plumbing Permits</a></li>
            <li><a href="#wells-water">Wells &amp; Water</a></li>
            <li><a href="#septic-permits">Septic Permits</a></li>
            <li><a href="#permits-table">Permit Summary</a></li>
            <li><a href="#permit-mistakes">Common Mistakes</a></li>
            <li><a href="#local-builder">Local Builder Value</a></li>
            <li><a href="#planning-your-build">Planning Your Build</a></li>
          </ul>
        </div>

        <!-- Sidebar CTA -->
        <div class="sidebar-cta">
          <h4>Questions About Permits?</h4>
          <p>We handle permit applications and county coordination as part of our full GC scope on every build in Grant County and Eastern Oregon.</p>
          <a href="/contact/" class="btn btn-secondary btn-sm">Talk to a Builder</a>
        </div>

        <!-- Related Services -->
        <div class="sidebar-card">
          <h4><i data-lucide="hard-hat"></i> Related Services</h4>
          <ul class="toc-list" role="list">
            <li><a href="/services/custom-home-building/">Custom Home Building</a></li>
            <li><a href="/services/framing/">Framing</a></li>
            <li><a href="/services/windows-and-doors/">Windows &amp; Doors</a></li>
            <li><a href="/services/general-remodeling/">General Remodeling</a></li>
            <li><a href="/service-area/">Service Area</a></li>
            <li><a href="/contact/">Free Estimate</a></li>
          </ul>
        </div>

      </aside><!-- /.article-sidebar -->

    </div><!-- /.article-layout -->
  </div><!-- /.container -->
</article>

<!-- ════════════════════════════════════════════════════════════════
     RELATED ARTICLES — cards pulled from includes/blog-data.php
════════════════════════════════════════════════════════════════ -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
$currentSlug  = basename(__DIR__);
$relatedPosts = array_slice(array_values(array_filter(
    $blogPosts,
    function ($p) use ($currentSlug) { return $p['slug'] !== $currentSlug; }
)), 0, 3);
?>
<?php if (!empty($relatedPosts)): ?>
<section class="related-articles" aria-label="Related articles">
  <div class="container">

    <div class="section-title reveal-up">
      <span class="eyebrow-label">Keep Reading</span>
      <h2>Related <em style="color:var(--color-secondary);font-style:italic">Articles</em></h2>
    </div>

    <div class="related-articles__grid">
      <?php foreach ($relatedPosts as $ridx => $rp): ?>
      <article class="blog-card reveal-up reveal-delay-<?php echo min($ridx + 1, 4); ?>" aria-label="<?php echo htmlspecialchars($rp['title']); ?>">

        <div class="blog-card__image-wrap">
          <img
            src="<?php echo htmlspecialchars($rp['image']); ?>"
            alt="<?php echo htmlspecialchars($rp['alt']); ?>"
            width="800"
            height="450"
            loading="lazy">
          <span class="blog-card__category-badge"><?php echo htmlspecialchars($rp['category']); ?></span>
        </div>

        <div class="blog-card__body">
          <div class="blog-card__meta">
            <div class="blog-card__meta-item">
              <i data-lucide="calendar"></i>
              <time datetime="<?php echo htmlspecialchars($rp['dateISO']); ?>"><?php echo htmlspecialchars($rp['date']); ?></time>
            </div>
            <div class="blog-card__meta-item">
              <i data-lucide="clock"></i>
              <span><?php echo htmlspecialchars($rp['readtime']); ?></span>
            </div>
          </div>

          <h3>
            <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/">
              <?php echo htmlspecialchars($rp['title']); ?>
            </a>
          </h3>

          <a href="/blog/<?php echo htmlspecialchars($rp['slug']); ?>/" class="blog-card__read-more">
            Read Article <i data-lucide="arrow-right"></i>
          </a>
        </div>

      </article>
      <?php endforeach; ?>
    </div><!-- /.related-articles__grid -->

  </div>
</section>
<?php endif; ?>

<?php if (!empty($schemaMarkup)): ?>
<script type="application/ld+json"><?php echo $schemaMarkup; ?></script>
<?php endif; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
