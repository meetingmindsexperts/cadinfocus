<?php
/**
 * Cold Agglutinin Disease in Focus | Virtual CME Webinar
 * Single page event landing. Registration is handled on register.php
 * through an embedded BigMarker widget.
 */

require __DIR__ . '/partials/config.php';

$pageTitle = 'Cold Agglutinin Disease in Focus | CME Webinar, 20 July 2026';
$pageDesc  = 'A CME accredited virtual webinar on Cold Agglutinin Disease, from diagnosis to evolving management strategies, with leading regional and international haematology faculty. 20 July 2026, 8:00 PM GMT +4.';
$page      = 'home';

require __DIR__ . '/partials/header.php';
?>

<main id="top">

<!-- ============================ HERO ============================ -->
<section class="hero-bg relative overflow-hidden">
    <div class="mx-auto grid max-w-7xl gap-8 px-5 py-16 lg:grid-cols-2 lg:gap-6 lg:px-8 lg:py-24">
        <div class="max-w-xl">
            <div class="mb-6 flex flex-wrap items-center gap-3">
                <span class="inline-flex items-center gap-2 rounded-full border border-brand/25 bg-white/70 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-brand">
                    <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                    CME Accredited
                </span>
                <span class="inline-flex items-center gap-2 rounded-full border border-red/25 bg-white/70 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-red">
                    Endorsed by ESH
                </span>
            </div>

            <p class="mb-3 font-head text-sm font-bold uppercase tracking-[0.2em] text-brand">Virtual CME Webinar</p>
            <h1 class="font-head text-4xl font-extrabold leading-[1.05] tracking-tight text-navy-900 sm:text-5xl lg:text-6xl">
                Cold Agglutinin<br>
                <span class="bg-gradient-to-r from-navy-800 via-brand to-red bg-clip-text text-transparent">Disease in Focus</span>
            </h1>
            <p class="mt-4 font-head text-lg font-semibold text-navy-800/80">
                From Diagnosis to Evolving Management Strategies
            </p>
            <p class="mt-5 max-w-md text-lg leading-relaxed text-navy-800/70">
                A focused scientific session on the burden, diagnosis and evolving management of Cold Agglutinin Disease, with leading regional and international haematology faculty.
            </p>

            <dl class="mt-8 flex flex-wrap gap-x-8 gap-y-4">
                <div class="flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-red/10 text-red" aria-hidden="true">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/></svg>
                    </span>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wide text-navy-700/60">Date</dt>
                        <dd class="text-base font-bold text-navy-900"><?= e($event['date']) ?></dd>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-brand/10 text-brand" aria-hidden="true">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    </span>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wide text-navy-700/60">Time and Format</dt>
                        <dd class="text-base font-bold text-navy-900"><?= e($event['time']) ?> &middot; <?= e($event['format']) ?></dd>
                    </div>
                </div>
            </dl>

            <div class="mt-9 flex flex-wrap items-center gap-4">
                <a href="<?= REGISTER_URL ?>"
                   class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-red to-red-dark px-7 py-3.5 text-base font-bold text-white shadow-xl shadow-red/25 transition-transform hover:-translate-y-0.5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red">
                    Register Now
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="#agenda"
                   class="inline-flex items-center gap-2 rounded-full border-2 border-navy-700/20 bg-white/60 px-7 py-3 text-base font-bold text-navy-800 transition-colors hover:border-brand hover:text-brand">
                    View Agenda
                </a>
            </div>
        </div>
        <div class="hidden lg:block" aria-hidden="true"></div>
    </div>
</section>

<!-- ============================ COUNTDOWN ============================ -->
<?php require __DIR__ . '/partials/countdown.php'; ?>

<!-- ============================ STATS ============================ -->
<?php require __DIR__ . '/partials/stats.php'; ?>

<!-- ============================ ABOUT / JOIN ============================ -->
<section id="about" class="relative overflow-hidden bg-gradient-to-b from-navy-900 via-navy-800 to-navy-900 py-20 text-white sm:py-24">
    <!-- soft brand glows -->
    <div aria-hidden="true" class="pointer-events-none absolute -left-24 top-10 h-72 w-72 rounded-full bg-brand/20 blur-3xl"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-24 bottom-0 h-72 w-72 rounded-full bg-ice/15 blur-3xl"></div>

    <div class="relative mx-auto max-w-5xl px-5 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-ice">Why attend</p>
            <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight sm:text-4xl">Bringing CAD into focus</h2>
            <p class="mx-auto mt-5 text-lg leading-relaxed text-white/75">
                Cold Agglutinin Disease is a rare, complement mediated autoimmune haemolytic anaemia that is often under recognised. This session brings together international and regional experts to sharpen clinical suspicion, refine diagnosis and discuss where management is heading, with real world cases from across the region.
            </p>
        </div>

        <div class="mt-14 grid gap-5 sm:grid-cols-3">
            <?php
            $pillars = [
                ['Burden and risk', 'The thromboembolic and mortality risks that make CAD more than an anaemia.', 'chart-bar'],
                ['Confident diagnosis', 'From clinical suspicion to laboratory confirmation of cold agglutinins.', 'microscope'],
                ['Evolving management', 'Advances in complement directed therapy and regional real world experience.', 'globe'],
            ];
            foreach ($pillars as $i => [$title, $copy, $icon]): ?>
                <div class="reveal group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.06] p-7 text-left backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:border-ice/40 hover:bg-white/[0.09]"
                     style="transition-delay: <?= $i * 90 ?>ms">
                    <span class="mb-5 grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-brand to-navy-700 text-white shadow-lg shadow-brand/20">
                        <?= icon_svg($icon, 'h-6 w-6') ?>
                    </span>
                    <h3 class="font-head text-lg font-bold text-white"><?= e($title) ?></h3>
                    <p class="mt-2 text-sm leading-relaxed text-white/70"><?= e($copy) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-14 text-center">
            <a href="<?= REGISTER_URL ?>"
               class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-red to-red-dark px-8 py-3.5 text-base font-bold text-white shadow-xl shadow-black/30 transition-transform hover:-translate-y-0.5">
                Register Now
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================ FACULTY ============================ -->
<section id="faculty" class="bg-gradient-to-b from-white to-brand/[0.04] py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="text-center">
            <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-brand">Meet the experts</p>
            <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight text-navy-900 sm:text-4xl">Faculty</h2>
        </div>

        <?php
        $moderator = $faculty[0];
        $speakers  = array_slice($faculty, 1);

        // Reusable avatar (photo, or initials fallback).
        $avatar = function (array $p, string $size) {
            if (!empty($p['img'])) {
                return '<img src="' . e($p['img']) . '" alt="' . e($p['name']) . '" loading="lazy" class="' . $size . ' flex-none rounded-full object-cover ring-4 ring-brand/25 shadow-md">';
            }
            return '<div class="' . $size . ' grid flex-none place-items-center rounded-full bg-gradient-to-br from-navy-700 to-brand text-2xl font-extrabold text-white ring-4 ring-brand/25 shadow-md" aria-hidden="true">' . e($p['initials']) . '</div>';
        };
        ?>

        <!-- Featured moderator -->
        <div class="mx-auto mt-14 max-w-2xl">
            <article class="reveal flex flex-col items-center gap-6 rounded-3xl border border-navy-700/10 bg-white p-8 text-center shadow-lg shadow-navy-700/5 sm:flex-row sm:items-center sm:text-left">
                <?= $avatar($moderator, 'h-28 w-28') ?>
                <div>
                    <span class="inline-block rounded-full bg-red/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-red"><?= e($moderator['role']) ?></span>
                    <h3 class="mt-2 font-head text-2xl font-extrabold text-navy-900"><?= e($moderator['name']) ?></h3>
                    <div class="mt-2 space-y-0.5 text-sm leading-relaxed text-navy-800/70">
                        <?php foreach ($moderator['lines'] as $line): ?>
                            <p><?= e($line) ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
        </div>

        <!-- Speakers -->
        <div class="mt-8 grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($speakers as $i => $person): ?>
                <article class="reveal group flex flex-col items-center rounded-3xl border border-navy-700/10 bg-white p-7 text-center shadow-sm transition-shadow hover:shadow-xl hover:shadow-navy-700/10"
                         style="transition-delay: <?= $i * 80 ?>ms">
                    <?= $avatar($person, 'h-24 w-24') ?>
                    <span class="mt-5 inline-block rounded-full bg-brand/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-brand"><?= e($person['role']) ?></span>
                    <h3 class="mt-3 font-head text-lg font-extrabold text-navy-900"><?= e($person['name']) ?></h3>
                    <div class="mt-2 space-y-0.5 text-sm leading-relaxed text-navy-800/70">
                        <?php foreach ($person['lines'] as $line): ?>
                            <p><?= e($line) ?></p>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ AGENDA ============================ -->
<!-- Stylized vertical timeline: numbered nodes on a gradient spine + glassy cards. -->
<section id="agenda" class="relative overflow-hidden bg-gradient-to-b from-navy-900 to-navy-800 py-20 text-white">
    <div aria-hidden="true" class="pointer-events-none absolute -left-24 top-1/3 h-72 w-72 rounded-full bg-brand/15 blur-3xl"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-24 bottom-10 h-72 w-72 rounded-full bg-red/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-3xl px-5 lg:px-8">
        <div class="text-center">
            <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-ice">Programme</p>
            <h2 class="mt-2 font-head text-3xl font-extrabold tracking-tight sm:text-4xl">Agenda</h2>
            <p class="mt-3 text-sm text-white/55"><?= e($event['date']) ?> &middot; <?= e($event['time']) ?> &middot; <?= e($event['format']) ?></p>
        </div>

        <!-- Vertical timeline -->
        <ol class="relative mt-14 space-y-5 pl-8 sm:pl-10">
            <!-- gradient spine -->
            <span aria-hidden="true" class="absolute left-[11px] top-2 bottom-2 w-0.5 bg-gradient-to-b from-brand via-ice to-red sm:left-[15px]"></span>

            <?php foreach ($agenda as $i => [$time, $topic, $who]): ?>
                <li class="reveal group relative" style="transition-delay: <?= $i * 60 ?>ms">
                    <!-- node -->
                    <span aria-hidden="true" class="absolute -left-8 top-4 grid h-6 w-6 place-items-center rounded-full bg-gradient-to-br from-brand to-navy-700 text-[11px] font-extrabold text-white shadow-lg shadow-brand/40 ring-4 ring-navy-800 sm:-left-10">
                        <?= $i + 1 ?>
                    </span>
                    <div class="rounded-2xl border border-white/10 bg-white/[0.06] p-5 backdrop-blur transition-all duration-300 group-hover:-translate-y-0.5 group-hover:border-ice/40 group-hover:bg-white/[0.09] sm:flex sm:items-start sm:gap-5">
                        <span class="agenda-time inline-flex w-fit flex-none items-center rounded-lg px-3.5 py-1.5 text-sm font-bold text-white shadow-md shadow-brand/20 sm:w-[128px] sm:justify-center">
                            <?= e($time) ?>
                        </span>
                        <div class="mt-3 sm:mt-0">
                            <p class="font-head text-base font-bold leading-snug text-white"><?= e($topic) ?></p>
                            <p class="mt-1 flex items-center gap-1.5 text-sm text-ice">
                                <svg class="h-3.5 w-3.5 flex-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0v.25H4.5v-.25Z"/></svg>
                                <?= e($who) ?>
                            </p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<!-- ============================ REGISTER CTA ============================ -->
<section id="register" class="py-20">
    <div class="mx-auto max-w-5xl px-5 lg:px-8">
        <div class="overflow-hidden rounded-3xl bg-gradient-to-br from-navy-800 to-navy-900 p-9 text-white shadow-xl shadow-navy-700/20 sm:p-12">
            <div class="grid items-center gap-8 lg:grid-cols-5">
                <div class="lg:col-span-3">
                    <h2 class="font-head text-3xl font-extrabold tracking-tight sm:text-4xl">Reserve your place</h2>
                    <p class="mt-4 max-w-lg text-white/75">
                        Registration is quick and free. Secure your seat at the Cold Agglutinin Disease in Focus virtual session and receive joining details by email.
                    </p>
                    <ul class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm">
                        <?php foreach (['CME accredited', 'Live faculty panel', 'No cost to attend'] as $perk): ?>
                            <li class="flex items-center gap-2 text-white/85">
                                <svg class="h-4 w-4 flex-none text-ice" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                                <?= e($perk) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="flex flex-col gap-3 lg:col-span-2 lg:items-end">
                    <a href="<?= REGISTER_URL ?>"
                       class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-red to-red-dark px-8 py-4 text-base font-bold text-white shadow-lg shadow-black/30 transition-transform hover:-translate-y-0.5 lg:w-auto">
                        Register Now
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="<?= e(SUBSCRIBE_URL) ?>" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-ice transition-colors hover:text-white">
                        Cannot attend live? Subscribe for updates
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================ PARTNERS ============================ -->
<section id="partners" class="border-t border-navy-700/10 bg-white py-16">
    <div class="mx-auto max-w-6xl px-5 lg:px-8">
        <div class="grid items-center gap-x-12 gap-y-10 sm:grid-cols-3">
            <?php foreach ($partners as $partner): ?>
                <div class="text-center">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-navy-700/50"><?= e($partner['label']) ?></p>
                    <div class="mt-4 flex h-20 items-center justify-center">
                        <img src="<?= e($partner['img']) ?>" alt="<?= e($partner['alt']) ?>" class="max-h-14 w-auto object-contain">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
