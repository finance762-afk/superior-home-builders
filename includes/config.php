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
$yearEstablished = 2004;        // "Over 20 years" as of 2026 (conservative estimate)
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
    'custom home builders salem or',
    'general contractor mount vernon or',
    'home renovation mount vernon or',
    'window installation mount vernon or',
    'kitchen remodel salem or',
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
        'name'        => 'Decks',
        'slug'        => 'decks',
        'description' => 'Add outdoor living space with custom-built decks by Superior Home Builders, designed for beauty, durability, and safety. From composite to pressure-treated wood, we build decks that enhance your property.',
        'keywords'    => [
            'deck building Mount Vernon OR',
            'custom deck contractor',
            'deck construction Oregon',
            'outdoor deck builders',
            'residential deck installation',
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
        'description' => 'Superior Home Builders provides professional commercial construction services for businesses in the Mount Vernon area. We handle projects of any size with reliability, expertise, and attention to deadlines.',
        'keywords'    => [
            'commercial construction Mount Vernon OR',
            'commercial builder Oregon',
            'commercial contractor Mount Vernon',
            'commercial building services',
            'business construction',
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
        'city'    => 'Salem',
        'state'   => 'OR',
        'zip'     => '',
        'primary' => false,
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
$cssVersion = '4';

// ── Lead Notification ─────────────────────────────────────────
$leadNotificationEmail = '';   // TODO: populate from client
$leadNotificationPhone = '';

// ── Insurance / Certifications ───────────────────────────────
$insurance        = '';
$certifications   = [];
$licenseNumber    = '';
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'; // spam-shield HMAC (matches leads fn LEADS_FORM_SECRET)
