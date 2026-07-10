<?php
/**
 * Shared configuration and content for the Cold Agglutinin Disease in Focus site.
 * Included by index.php and register.php.
 *
 * This is the SINGLE SOURCE OF TRUTH for event content.
 */

declare(strict_types=1);

/** HTML escape helper. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* ----------------------------------------------------------------------------
 * Links and IDs to update in one place
 * ------------------------------------------------------------------------- */

// Public base URL of the live site (no trailing slash). Used for absolute
// canonical, Open Graph and Twitter URLs.
const SITE_URL = 'https://cadinfocus.com';

// Google Analytics measurement ID (leave '' until provided; GA only loads when set).
const GA_MEASUREMENT_ID = '';

const REGISTER_URL  = 'register';
// MMG-wide Mailchimp newsletter signup (opens in a new tab).
const SUBSCRIBE_URL = 'https://meetingmindsgroup.us10.list-manage.com/subscribe?u=47d2f8c99b0099ed1b863db29&id=20983732e8';

// Meeting Minds Experts contact details (constant across MMG events).
const CONTACT_ORG     = 'Meeting Minds Experts';
const CONTACT_ADDRESS = 'Dubai Studio City, DSC Tower 508 and 509, Dubai, UAE';
const CONTACT_PHONE   = '+971 4 276 1444';
const CONTACT_TEL     = '+97142761444';
const CONTACT_EMAIL   = 'virtual@meetingmindsexperts.com';
const CONTACT_HOURS   = 'Mon to Fri, 9:00 AM to 6:00 PM';

/* ----------------------------------------------------------------------------
 * Event content (single source of truth)
 * ------------------------------------------------------------------------- */

$event = [
    'name'    => 'Cold Agglutinin Disease in Focus',
    'tagline' => 'From Diagnosis to Evolving Management Strategies',
    'date'    => '20 July 2026',
    'time'    => '8:00 PM GMT +4 (UAE Time)',
    'format'  => 'Virtual',
    'iso'     => '2026-07-20T20:00:00+04:00', // start, used by countdown + Event schema
    'iso_end' => '2026-07-20T22:00:00+04:00', // end
];

// Four headline numbers. Keep labels short.
$stats = [
    ['num' => '5',       'label' => 'Expert Faculty',       'icon' => 'users'],
    ['num' => '5',       'label' => 'Countries',            'icon' => 'globe'],
    ['num' => '2 Hours', 'label' => 'Live and Interactive', 'icon' => 'clock'],
    ['num' => 'CME',     'label' => 'Accredited',           'icon' => 'shield-check'],
];

/**
 * Inline SVG icon (Heroicons outline) by name. Reused across pages.
 */
function icon_svg(string $name, string $class = 'h-6 w-6'): string
{
    $paths = [
        'users'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>',
        'presentation' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605"/>',
        'clock'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>',
        'shield-check' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/>',
        'chart-bar'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"/>',
        'globe'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>',
        'chat'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"/>',
        'microscope'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18h12M9 18V9m6 9v-4.5M9.75 9a3.75 3.75 0 0 0 4.5-3.675A3 3 0 0 0 11.25 3H9.75m0 6h1.5m-3 9a6 6 0 0 0 9-5.196"/>',
        'location'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>',
        'phone'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>',
        'mail'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>',
    ];
    $inner = $paths[$name] ?? '';
    return '<svg class="' . e($class) . '" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" aria-hidden="true">' . $inner . '</svg>';
}

// First entry is treated as the featured moderator on the faculty grid.
// 'img' is OPTIONAL: a headshot in assets/faculty/. Without it the card falls
// back to an initials avatar.
$faculty = [
    [
        'role'     => 'Moderator',
        'name'     => 'Dr. Asma Sultan Al Olama',
        'initials' => 'AO',
        'img'      => 'assets/faculty/asma.jpg',
        'lines'    => [
            'President, Emirates Society of Haematology',
            'Consultant Hematologist, Dubai Hospital',
            'United Arab Emirates',
        ],
    ],
    [
        'role'     => 'Speaker',
        'name'     => 'Dr. Joan Cid, MD, PhD',
        'initials' => 'JC',
        'img'      => 'assets/faculty/joan.jpg',
        'lines'    => [
            'Hematologist, Department of Hemotherapy and Hemostasis',
            'Hospital Clinic, Barcelona',
            'Spain',
        ],
    ],
    [
        'role'     => 'Speaker',
        'name'     => 'Dr. Hazzaa Alzahrani',
        'initials' => 'HA',
        'lines'    => [
            'MD, MRCP, ArBIM',
            'Consultant, Adult Hematology and HSCT',
            'King Faisal Specialist Hospital and Research Center',
            'Saudi Arabia',
        ],
    ],
    [
        'role'     => 'Speaker',
        'name'     => 'Dr. Tharwat Hamdy',
        'initials' => 'TH',
        'img'      => 'assets/faculty/tharwat.jpg',
        'lines'    => [
            'Chairman, Hereditary Blood Disorder Center (HBDC)',
            'Governmental Hospitals, Manama',
            'Bahrain',
        ],
    ],
    [
        'role'     => 'Speaker',
        'name'     => 'Dr. Mohammad M Alawadhy',
        'initials' => 'MA',
        // No photo by the speaker's own request; renders the initials avatar.
        'lines'    => [
            'Clinical Hematologist',
            'Senior Specialist, Adult Hematology and Thrombosis',
            'Mubarak Al Kabeer Hospital, Kuwait',
        ],
    ],
];

// [time, topic, speaker]. Time ranges read "8:00 to 8:05 PM" (no dashes).
$agenda = [
    ['8:00 to 8:05 PM',  'Welcome and Opening Remarks',                                                                            'Dr. Asma Al Olama'],
    ['8:05 to 8:20 PM',  'CAD Disease Burden and Risks: Thromboembolism and Mortality',                                             'Dr. Joan Cid'],
    ['8:20 to 8:45 PM',  'Optimizing the Diagnosis of Cold Agglutinin Disease: From Clinical Suspicion to Laboratory Confirmation', 'Dr. Joan Cid'],
    ['8:45 to 8:50 PM',  'Q and A Session',                                                                                        'All faculty'],
    ['8:50 to 9:20 PM',  'Advances in CAD Management and Emerging Perspectives in Complement-Mediated Hematologic Disorders',       'Dr. Joan Cid'],
    ['9:20 to 9:25 PM',  'Q and A Session',                                                                                        'All faculty'],
    ['9:25 to 9:35 PM',  'Real-World Challenges and Unmet Needs in CAD Management in KSA',                                          'Dr. Hazzaa Alzahrani'],
    ['9:35 to 9:45 PM',  'Regional Case Presentations',                                                                            'Dr. Tharwat Hamdy and Dr. Mohammad M Alawadhy'],
    ['9:45 to 9:55 PM',  'Discussion',                                                                                             'All faculty'],
    ['9:55 to 10:00 PM', 'Closing Discussion and Key Takeaways',                                                                   'Dr. Asma Al Olama'],
];

// Logos live in assets/logos/. Labels read off the brief.
$partners = [
    ['label' => 'Endorsed by',  'img' => 'assets/logos/esh.png',       'alt' => 'Emirates Society of Haematology'],
    ['label' => 'Supported by', 'img' => 'assets/logos/recordati2.png', 'alt' => 'Recordati Rare Diseases', 'h' => 'max-h-9'],
    ['label' => 'Managed by',   'img' => 'assets/logos/mme.png',       'alt' => 'Meeting Minds Experts'],
];
