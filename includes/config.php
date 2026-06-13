<?php
// =============================================================
// config.php — Superior Home Builders
// Page One Insights — Auto-generated Phase 1 Scaffold
// =============================================================

// Inline Lucide SVG map + lucide_icon() helper (v6.2 — no icon JS)
require_once __DIR__ . '/icons.php';

// ── Identity ────────────────────────────────────────────────
$slug            = 'superior-home-builders';
$siteName        = 'Superior Home Builders';
$tagline         = 'Superior Homes, Superior Lives';
$ownerName       = '';

// ── Contact ─────────────────────────────────────────────────
$phone           = '(541) 620-0340';  // matches GBP listing exactly
$phoneSecondary  = '';
$email           = '';          // TODO: populate from client (not on GBP)
$contactEmail    = $email;

$address = [
    'street' => '',
    'city'   => 'Mount Vernon',
    'state'  => 'OR',
    'zip'    => '97865',
];

// ── Domain & URLs ────────────────────────────────────────────
// Confirmed launch domain (set pre-launch while still parked on preview).
$domain  = 'superiorhomebuilderscorp.com';
$siteUrl = 'https://' . $domain;
// NOTE: $canonicalUrl is NOT set here — each page sets it before including head.php.

// ── Industry & Age ───────────────────────────────────────────
$industry        = 'home_builder';
$yearEstablished = 2001;        // Client opened in 2001 — 25 years as of 2026 (client corrected from 26)
$yearsInBusiness = (int) date('Y') - $yearEstablished;

// ── Analytics & Verification ─────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';   // Replace after launch
$gscVerification   = '';               // Replace after GSC setup

// ── Brand Colors ─────────────────────────────────────────────
$colors = [
    'primary'   => '#0f1219',   // rgb(15, 18, 25)
    'secondary' => '#072159',   // rgb(7, 33, 89)
    'accent'    => '#f8e568',   // rgb(248, 229, 104)
];

// ── Logo URL ─────────────────────────────────────────────────
$logoUrl = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/superior-home-builders/logo/1780603633771-ziybvd-ChatGPT_Image_Jun_4__2026__04_07_04_PM.png';

// ── Typography ───────────────────────────────────────────────
// Premium font pairing — locked in Phase 2
// Fraunces Variable: elegant serif for headings (premium, warm, architectural)
// Plus Jakarta Sans Variable: clean premium body (modern, legible)
$fonts = [
    'heading' => 'Fraunces',         // variable serif display
    'body'    => 'Plus Jakarta Sans', // variable geometric sans
    'accent'  => 'Fraunces',         // italic Fraunces for accent phrases
];

// ── SEO Keywords ─────────────────────────────────────────────
$primaryKeyword    = 'custom home builders mount vernon or';
$secondaryKeywords = [
    'home builders mount vernon or',
    'bathroom remodeling mount vernon or',
    'kitchen remodeling mount vernon or',
    'deck builders mount vernon or',
    'home remodeling mount vernon or',

    'general contractor mount vernon or',
    'home renovation mount vernon or',
    'window installation mount vernon or',

    'bathroom remodeler near me',
    'commercial construction mount vernon or',
];

// ── Services ─────────────────────────────────────────────────
$services = [
    [
        'name'        => 'Bathroom Remodeling',
        'slug'        => 'bathroom-remodeling',
        'description' => 'Superior Home Builders specializes in custom bathroom remodeling that transforms your space with modern fixtures, quality craftsmanship, and attention to detail. From tile work to plumbing upgrades, we handle every aspect of your bathroom renovation.',
        'keywords'    => [
            'bathroom remodeling Mount Vernon OR',
            'bathroom renovation Oregon',
            'custom bathroom remodel',
            'bathroom contractor Mount Vernon',
            'bathroom remodeling services',
        ],
    ],
    [
        'name'        => 'Kitchen Remodeling',
        'slug'        => 'kitchen-remodeling',
        'description' => 'Enhance your home\'s heart with Superior Home Builders\' comprehensive kitchen remodeling services, featuring custom cabinetry, countertops, and modern appliances. We design kitchens that combine functionality with beautiful aesthetics.',
        'keywords'    => [
            'kitchen remodeling Mount Vernon OR',
            'custom kitchen renovation',
            'kitchen contractor Oregon',
            'kitchen remodel Mount Vernon',
            'kitchen cabinets countertops',
        ],
    ],
    [
        'name'        => 'Windows and Doors',
        'slug'        => 'windows-and-doors',
        'description' => 'Upgrade your home\'s curb appeal and energy efficiency with quality windows and doors installation from Superior Home Builders. We offer a wide selection of styles and materials to suit any home.',
        'keywords'    => [
            'windows doors Mount Vernon OR',
            'replacement windows Oregon',
            'door installation Mount Vernon',
            'energy efficient windows',
            'home window doors contractor',
        ],
    ],
    [
        'name'        => 'Decks & Porches',
        'slug'        => 'decks',
        'description' => 'Add outdoor living space with custom-built Trex composite decks, cedar decks, porches, and pergolas by Superior Home Builders. We install steel railings and build structures designed for Eastern Oregon snow loads and freeze-thaw conditions.',
        'keywords'    => [
            'deck building Mount Vernon OR',
            'Trex deck contractor Oregon',
            'cedar deck Mount Vernon',
            'pergola builder Grant County',
            'custom deck contractor',
            'deck construction Oregon',
            'outdoor deck builders',
        ],
    ],
    [
        'name'        => 'Framing',
        'slug'        => 'framing',
        'description' => 'Superior Home Builders provides expert framing services for new construction and remodeling projects, ensuring structural integrity and quality craftsmanship. Our experienced team handles residential and commercial framing needs.',
        'keywords'    => [
            'framing contractor Mount Vernon OR',
            'home framing services',
            'custom home framing',
            'structural framing Oregon',
            'residential framing Mount Vernon',
        ],
    ],
    [
        'name'        => 'Custom Home Building',
        'slug'        => 'custom-home-building',
        'description' => 'Build your dream home with Superior Home Builders, offering full custom home construction services tailored to your vision and budget. From design to completion, we handle every detail of your new construction project.',
        'keywords'    => [
            'custom home builders Mount Vernon OR',
            'new home construction Oregon',
            'residential home builders',
            'custom home construction Mount Vernon',
            'dream home builder Oregon',
        ],
    ],
    [
        'name'        => 'General Remodeling',
        'slug'        => 'general-remodeling',
        'description' => 'Superior Home Builders offers comprehensive remodeling services for any room or area of your home, from planning to final touches. Whether it\'s a single room or whole-house renovation, we deliver quality results.',
        'keywords'    => [
            'home remodeling Mount Vernon OR',
            'remodeling contractor Oregon',
            'house renovation services',
            'home renovation Mount Vernon',
            'general remodeling contractor',
        ],
    ],
    [
        'name'        => 'Commercial Construction',
        'slug'        => 'commercial-construction',
        'description' => 'Superior Home Builders provides professional commercial construction and remodeling for businesses across Eastern Oregon. We have remodeled banks, motels, apartment buildings, schools, government buildings, and beauty salons — projects of any scale, delivered on time.',
        'keywords'    => [
            'commercial construction Mount Vernon OR',
            'commercial remodel Oregon',
            'bank motel school remodel Oregon',
            'commercial builder Oregon',
            'commercial contractor Mount Vernon',
            'commercial building services',
        ],
    ],
    // ── NEW SERVICES (added June 2026) ────────────────────────
    [
        'name'        => 'Roofing',
        'slug'        => 'roofing',
        'description' => 'Superior Home Builders installs metal roofing and roofs over mobile homes throughout Eastern Oregon. Metal roofing is ideal for Grant County\'s heavy snowloads and extreme temperature swings — durable, low-maintenance, and built to last.',
        'keywords'    => [
            'metal roofing Mount Vernon OR',
            'roofing contractor Grant County Oregon',
            'mobile home roofing Oregon',
            'metal roof installation Eastern Oregon',
            'roofing contractor Mount Vernon',
        ],
    ],
    [
        'name'        => 'Pole Barns & Agricultural Buildings',
        'slug'        => 'pole-barns',
        'description' => 'Superior Home Builders constructs pole barns, horse barns, hay sheds, RV barns, storage barns, and barndominiums across Grant and Harney Counties. We build agricultural and rural structures sized for Eastern Oregon ranching and farming operations.',
        'keywords'    => [
            'pole barn builder Eastern Oregon',
            'horse barn construction Mount Vernon OR',
            'hay shed builder Grant County',
            'barndominium Oregon',
            'RV barn storage garage Oregon',
            'agricultural building contractor',
        ],
    ],
    [
        'name'        => 'Gutters',
        'slug'        => 'gutters',
        'description' => 'Superior Home Builders installs gutters on homes and commercial buildings throughout Grant and Harney Counties. Proper gutter systems direct snowmelt and rain away from foundations — critical in Eastern Oregon\'s climate.',
        'keywords'    => [
            'gutter installation Mount Vernon OR',
            'gutter contractor Grant County Oregon',
            'gutter install Eastern Oregon',
            'seamless gutters Oregon',
            'rain gutter installation',
        ],
    ],
    [
        'name'        => 'Excavation & Site Work',
        'slug'        => 'excavation',
        'description' => 'Superior Home Builders handles excavation, foundation dig-outs, and property development work across Eastern Oregon. From clearing and grading raw land to digging foundations for custom homes and agricultural structures, we prepare your site for construction.',
        'keywords'    => [
            'excavation contractor Mount Vernon OR',
            'foundation excavation Oregon',
            'property development Grant County',
            'site prep contractor Eastern Oregon',
            'dig out foundation Oregon',
        ],
    ],
    [
        'name'        => 'Siding',
        'slug'        => 'siding',
        'description' => 'Superior Home Builders installs Hardie siding, T1-11 siding, log siding, and metal siding. We also install mobile home skirting. Our siding work is engineered for Eastern Oregon\'s harsh UV exposure, freeze-thaw cycles, and high desert conditions.',
        'keywords'    => [
            'Hardie siding Mount Vernon OR',
            'T1-11 siding Oregon',
            'log siding contractor Eastern Oregon',
            'metal siding installation Grant County',
            'mobile home skirting Oregon',
            'siding contractor Mount Vernon',
        ],
    ],
    [
        'name'        => 'Fencing',
        'slug'        => 'fencing',
        'description' => 'Superior Home Builders builds cedar fencing including shadow box, privacy, and good neighbor styles. Cedar performs well in Eastern Oregon\'s climate and looks great for decades with minimal upkeep.',
        'keywords'    => [
            'cedar fence contractor Mount Vernon OR',
            'privacy fence Oregon',
            'shadow box fence Grant County',
            'wood fencing Eastern Oregon',
            'fence installation contractor Oregon',
        ],
    ],
    [
        'name'        => 'Interior & Exterior Painting',
        'slug'        => 'painting',
        'description' => 'Superior Home Builders provides interior and exterior house painting services across Grant and Harney Counties. Whether you\'re refreshing a single room or repainting an entire exterior, we deliver clean, lasting results using quality paints suited for Eastern Oregon conditions.',
        'keywords'    => [
            'house painting Mount Vernon OR',
            'exterior painting contractor Oregon',
            'interior painting Grant County',
            'home painter Eastern Oregon',
            'painting contractor Mount Vernon',
        ],
    ],
    [
        'name'        => 'Insulation & Drywall',
        'slug'        => 'insulation',
        'description' => 'Superior Home Builders installs insulation and handles drywall (sheetrock) work for new construction and remodeling projects. Proper insulation is essential at Grant County elevations — we spec and install for the local climate.',
        'keywords'    => [
            'insulation contractor Mount Vernon OR',
            'drywall installation Oregon',
            'sheetrock repair Grant County',
            'insulation installation Eastern Oregon',
            'drywall contractor Mount Vernon',
        ],
    ],
    [
        'name'        => 'Electrical, Plumbing & HVAC',
        'slug'        => 'electrical-plumbing-hvac',
        'description' => 'Superior Home Builders provides electrical, plumbing, and HVAC services including mini-split AC systems for homes across Eastern Oregon. We coordinate all trades under one contract so you\'re not managing multiple subcontractors on your project.',
        'keywords'    => [
            'electrician Mount Vernon OR',
            'plumber Grant County Oregon',
            'HVAC contractor Eastern Oregon',
            'mini split AC installation Oregon',
            'electrical plumbing contractor Mount Vernon',
        ],
    ],
    [
        'name'        => 'Garages & Outbuildings',
        'slug'        => 'garages',
        'description' => 'Superior Home Builders constructs garages, garage additions, and tack rooms throughout Eastern Oregon. Whether you need a detached garage, an attached garage addition, or a tack room for your equine operation, we build to match your property and budget.',
        'keywords'    => [
            'garage construction Mount Vernon OR',
            'garage addition contractor Oregon',
            'tack room builder Grant County',
            'detached garage Eastern Oregon',
            'garage builder Mount Vernon',
        ],
    ],
    [
        'name'        => 'Storm Damage Repair',
        'slug'        => 'storm-damage-repair',
        'description' => 'Superior Home Builders responds to storm damage, water damage, and wind damage repair needs across Eastern Oregon. We assess structural damage, coordinate with insurance when needed, and restore your home or building to pre-loss condition.',
        'keywords'    => [
            'storm damage repair Mount Vernon OR',
            'water damage contractor Oregon',
            'wind damage repair Grant County',
            'emergency repair contractor Eastern Oregon',
            'storm damage restoration Oregon',
        ],
    ],
];

// ── Service Areas ────────────────────────────────────────────
$serviceAreas = [
    [
        'city'    => 'Mount Vernon',
        'state'   => 'OR',
        'zip'     => '97865',
        'primary' => true,
    ],

    [
        'city'    => 'John Day',
        'state'   => 'OR',
        'zip'     => '97845',
        'primary' => false,
    ],
    [
        'city'    => 'Canyon City',
        'state'   => 'OR',
        'zip'     => '97820',
        'primary' => false,
    ],
    [
        'city'    => 'Prairie City',
        'state'   => 'OR',
        'zip'     => '97869',
        'primary' => false,
    ],
    // Grant County — additional communities
    [
        'city'    => 'Dayville',
        'state'   => 'OR',
        'zip'     => '97825',
        'primary' => false,
    ],
    [
        'city'    => 'Long Creek',
        'state'   => 'OR',
        'zip'     => '97856',
        'primary' => false,
    ],
    [
        'city'    => 'Monument',
        'state'   => 'OR',
        'zip'     => '97864',
        'primary' => false,
    ],
    [
        'city'    => 'Seneca',
        'state'   => 'OR',
        'zip'     => '97873',
        'primary' => false,
    ],
    // Harney County
    [
        'city'    => 'Burns',
        'state'   => 'OR',
        'zip'     => '97720',
        'primary' => false,
    ],
    [
        'city'    => 'Hines',
        'state'   => 'OR',
        'zip'     => '97738',
        'primary' => false,
    ],
];

// ── Social Links ─────────────────────────────────────────────
// None confirmed in intake — populate when client provides.
$socialLinks = [
    // 'facebook'  => 'https://facebook.com/...',
    // 'instagram' => 'https://instagram.com/...',
];

// ── Form ─────────────────────────────────────────────────────
$formAction      = 'https://db.pageone.cloud/functions/v1/leads/superior-home-builders';
$consentVersion  = 'v2.1';

// ── CSS Cache Busting ─────────────────────────────────────────
// Increment on every styles.css change.
$cssVersion = '5';

// ── Lead Notification ─────────────────────────────────────────
$leadNotificationEmail = '';   // TODO: populate from client
$leadNotificationPhone = '';

// ── Insurance / Certifications ───────────────────────────────
$insurance        = '';
$certifications   = [];
$licenseNumber    = '147123';   // Oregon CCB license — display as "CCB# 147123"
