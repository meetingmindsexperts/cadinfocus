<?php
/**
 * Shared <head> + sticky navigation.
 * Expects (optional) before include:
 *   $pageTitle, $pageDesc, $page ('home' | 'register')
 */
$pageTitle = $pageTitle ?? 'Cold Agglutinin Disease in Focus';
$pageDesc  = $pageDesc  ?? 'A CME accredited virtual webinar on Cold Agglutinin Disease, from diagnosis to evolving management strategies. 20 July 2026, 8:00 PM GMT +4.';
$page      = $page      ?? 'home';
// Section anchors live on the home page, so prefix them when we are elsewhere.
$home = $page === 'home' ? '' : '/';
// Absolute URL of the current page for canonical / social tags.
$canonical = SITE_URL . ($page === 'home' ? '/' : '/register');
$ogImage   = SITE_URL . '/assets/og-image.jpg';

// Small inline brand mark: a crystalline "in focus" target (navy ring + red arc).
function brand_mark(string $class = 'h-9 w-9'): string
{
    return '<svg class="' . e($class) . '" viewBox="0 0 48 48" fill="none" aria-hidden="true">'
        . '<circle cx="24" cy="24" r="16" stroke="#12266b" stroke-width="2.2"/>'
        . '<circle cx="24" cy="24" r="10" stroke="#12266b" stroke-width="1.8"/>'
        . '<path d="M24 8 A16 16 0 0 1 40 24" stroke="#dc2626" stroke-width="2.6" stroke-linecap="round"/>'
        . '<circle cx="24" cy="24" r="3.4" fill="#12266b"/>'
        . '</svg>';
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>">
    <meta name="keywords" content="Cold Agglutinin Disease, CAD, cold agglutinin, autoimmune hemolytic anemia, complement mediated, haematology, hematology, CME, ESH, Emirates Society of Haematology, webinar, Meeting Minds Experts, Recordati">
    <meta name="author" content="Meeting Minds Experts">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0b1b4d">
    <link rel="canonical" href="<?= e($canonical) ?>">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/assets/favicon.png">
    <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Cold Agglutinin Disease in Focus">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDesc) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Cold Agglutinin Disease in Focus, 20 July 2026, Virtual, CME accredited">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= e($pageDesc) ?>">
    <meta name="twitter:image" content="<?= e($ogImage) ?>">

    <!-- Event structured data -->
    <script type="application/ld+json">
    <?= json_encode([
        '@context'            => 'https://schema.org',
        '@type'               => 'Event',
        'name'                => 'Cold Agglutinin Disease in Focus',
        'description'         => 'A CME accredited virtual webinar on Cold Agglutinin Disease, from diagnosis to evolving management strategies, with leading regional and international haematology faculty.',
        'startDate'           => $event['iso'],
        'endDate'             => $event['iso_end'],
        'eventAttendanceMode' => 'https://schema.org/OnlineEventAttendanceMode',
        'eventStatus'         => 'https://schema.org/EventScheduled',
        'image'               => $ogImage,
        'location'            => [
            '@type' => 'VirtualLocation',
            'url'   => $canonical,
        ],
        'organizer'           => [
            '@type' => 'Organization',
            'name'  => 'Meeting Minds Experts',
            'url'   => 'https://www.meetingmindsexperts.com',
        ],
        'sponsor'             => [
            '@type' => 'Organization',
            'name'  => 'Recordati',
        ],
        'offers'              => [
            '@type'        => 'Offer',
            'price'        => '0',
            'priceCurrency'=> 'AED',
            'availability' => 'https://schema.org/InStock',
            'url'          => SITE_URL . '/register',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>

    <?php if (GA_MEASUREMENT_ID !== ''): ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e(GA_MEASUREMENT_ID) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= e(GA_MEASUREMENT_ID) ?>');
    </script>
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800;900&family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy:  { 900: '#0a1740', 800: '#12266b', 700: '#1c3488', 600: '#26409e' },
                        brand: { DEFAULT: '#1d4ed8', light: '#3b82f6', dark: '#1e40af' },
                        red:   { DEFAULT: '#dc2626', dark: '#b91c1c' },
                        ice:   { DEFAULT: '#38bdf8', light: '#7dd3fc' },
                    },
                    fontFamily: {
                        sans: ['"Noto Sans"', 'system-ui', 'sans-serif'],
                        head: ['Figtree', 'system-ui', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <style>
        body { font-family: 'Noto Sans', system-ui, sans-serif; }
        h1, h2, h3, .font-head { font-family: 'Figtree', system-ui, sans-serif; }
        .hero-bg {
            background-image: linear-gradient(90deg, rgba(255,255,255,0.97) 0%, rgba(255,255,255,0.86) 40%, rgba(255,255,255,0.42) 66%, rgba(255,255,255,0.06) 100%), url('assets/hero-bg.jpg');
            background-size: cover;
            background-position: center right;
        }
        .agenda-time { background: linear-gradient(135deg, #12266b 0%, #1d4ed8 100%); }
        /* Reveal on scroll */
        .reveal { opacity: 0; transform: translateY(18px); transition: opacity .6s ease, transform .6s ease; }
        .reveal.is-visible { opacity: 1; transform: none; }
        @media (prefers-reduced-motion: reduce) {
            * { animation: none !important; scroll-behavior: auto !important; }
            .reveal { opacity: 1 !important; transform: none !important; transition: none !important; }
        }
    </style>
</head>
<body class="bg-white text-navy-900 antialiased">

<header class="sticky top-0 z-40 w-full border-b border-navy-700/10 bg-white/90 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 lg:px-8" aria-label="Primary">
        <a href="<?= $home ?: '#top' ?>" class="flex items-center gap-2.5" aria-label="Cold Agglutinin Disease in Focus, home">
            <?= brand_mark('h-8 w-8 sm:h-9 sm:w-9') ?>
            <span class="font-head text-[15px] font-extrabold leading-none tracking-tight text-navy-900 sm:text-lg">
                <span class="hidden sm:inline">Cold Agglutinin Disease </span><span class="sm:hidden">CAD </span><span class="text-red">in Focus</span>
            </span>
        </a>

        <div class="hidden items-center gap-8 text-base font-semibold text-navy-800 lg:flex">
            <a href="<?= $home ?>#about" class="transition-colors hover:text-brand">About</a>
            <a href="<?= $home ?>#faculty" class="transition-colors hover:text-brand">Faculty</a>
            <a href="<?= $home ?>#agenda" class="transition-colors hover:text-brand">Agenda</a>
            <a href="<?= $home ?>#partners" class="transition-colors hover:text-brand">Partners</a>
        </div>

        <a href="<?= REGISTER_URL ?>"
           class="inline-flex items-center whitespace-nowrap rounded-full bg-gradient-to-r from-red to-red-dark px-4 py-2 text-sm font-bold text-white shadow-lg shadow-red/20 transition-transform hover:-translate-y-0.5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red sm:px-5 sm:py-2.5">
            Register Now
        </a>
    </nav>
</header>
