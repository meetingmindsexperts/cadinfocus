<?php
/**
 * Cold Agglutinin Disease in Focus | Registration
 * Hosts the BigMarker registration widget.
 *
 * HOW TO ADD THE BIGMARKER EMBED:
 *   Paste the JavaScript / iframe embed snippet BigMarker gives you
 *   (Conference -> Promote -> Embed) into $BIGMARKER_EMBED below.
 *   While it is empty, a styled placeholder with the event details is shown
 *   so the page is presentable before the embed is wired up.
 */

require __DIR__ . '/partials/config.php';

// >>> Paste the BigMarker registration embed snippet between the quotes. <<<
$BIGMARKER_EMBED = <<<'HTML'
<div id="bigmarker-conference-widget-container1ba5932169fd"></div><script src="https://www.bigmarker.com/widget/register_widget.js?club=medulive&conference=1ba5932169fd&widget_type=form_register&series_register=&upcoming_sub_title=&live_sub_title=&rec_sub_title=&upcoming_button_text=&live_button_text=&rec_button_text=&link_to_channel=true&form_type=all_fields&widget_width=&widget_height=0&enable_iframe=false&background_color=ffffff&btext_color=2d374d&link_color=1089f5&ltext_color=ffffff&redirect_to_confirmation_page=0&widget_button_registered_content=&widget_webinar_descriptions=&widget_redirect_type=no_redirect&cid=100c694fa34c" type="text/javascript"></script>
HTML;

// Optional: a BigMarker channel subscribe embed for the "Subscribe" block.
$BIGMARKER_SUBSCRIBE_EMBED = <<<'HTML'

HTML;

$pageTitle = 'Register | Cold Agglutinin Disease in Focus';
$pageDesc  = 'Register for the Cold Agglutinin Disease in Focus virtual webinar on 20 July 2026, 8:00 PM GMT +4. CME accredited, endorsed by the Emirates Society of Haematology.';
$page      = 'register';

require __DIR__ . '/partials/header.php';
?>

<style>
    /* Widen the BigMarker registration widget (injected by its own script). */
    .bigmarker-widget-out-box {
        max-width: 500px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
</style>

<main id="top">

<!-- ============================ REGISTER HEADER ============================ -->
<section class="bg-gradient-to-br from-navy-800 to-navy-900 py-14 text-white sm:py-16">
    <div class="mx-auto max-w-5xl px-5 text-center lg:px-8">
        <div class="mb-5 flex flex-wrap items-center justify-center gap-3">
            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white">
                <svg class="h-3.5 w-3.5 text-ice" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                CME Accredited
            </span>
            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white">
                Endorsed by ESH
            </span>
        </div>
        <h1 class="font-head text-3xl font-extrabold tracking-tight sm:text-5xl">Register for the CAD in Focus webinar</h1>
        <p class="mx-auto mt-4 max-w-xl text-white/75">
            Complete the short form to confirm your place. Joining details will be sent to your email.
        </p>
        <p class="mt-6 inline-flex flex-wrap items-center justify-center gap-x-3 gap-y-1 rounded-full bg-white/5 px-5 py-2 text-sm font-semibold">
            <span><?= e($event['date']) ?></span><span class="text-white/40">&middot;</span>
            <span><?= e($event['time']) ?></span><span class="text-white/40">&middot;</span>
            <span><?= e($event['format']) ?></span>
        </p>
    </div>
</section>

<!-- ============================ STATS ============================ -->
<?php require __DIR__ . '/partials/stats.php'; ?>

<!-- ============================ EMBED ============================ -->
<section class="py-16">
    <div class="mx-auto max-w-[600px] px-5 lg:px-8">
        <div class="overflow-hidden rounded-3xl border border-navy-700/10 bg-white p-6 shadow-xl shadow-navy-700/10 sm:p-8">

            <?php if (trim($BIGMARKER_EMBED) !== ''): ?>
                <!-- BigMarker registration widget -->
                <div id="bigmarker-registration" class="mx-auto min-h-[480px] w-full max-w-[500px]">
                    <?= $BIGMARKER_EMBED /* trusted embed snippet from BigMarker */ ?>
                </div>
            <?php else: ?>
                <!-- Placeholder shown until the BigMarker embed is added in register.php -->
                <div class="flex min-h-[420px] flex-col items-center justify-center rounded-2xl border-2 border-dashed border-navy-700/15 bg-brand/5 px-6 py-12 text-center">
                    <div class="grid h-14 w-14 place-items-center rounded-full bg-red/10 text-red">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>
                    </div>
                    <h2 class="mt-5 font-head text-xl font-extrabold text-navy-900">Registration opens here</h2>
                    <p class="mt-2 max-w-sm text-sm text-navy-800/70">
                        The BigMarker registration form will appear in this area. Add the embed snippet to <span class="font-semibold text-navy-900">register.php</span> to go live.
                    </p>
                    <a href="mailto:<?= e(CONTACT_EMAIL) ?>?subject=Cold%20Agglutinin%20Disease%20in%20Focus%20registration"
                       class="mt-7 inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-red to-red-dark px-7 py-3.5 text-base font-bold text-white shadow-lg shadow-red/25 transition-transform hover:-translate-y-0.5">
                        Contact us to register
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <p class="mt-4 text-center text-xs text-navy-700/50">Your details are used only to manage your attendance at this session.</p>
    </div>
</section>

<!-- ============================ SUBSCRIBE ============================ -->
<section id="subscribe" class="border-t border-navy-700/10 bg-gradient-to-b from-white to-brand/5 py-16">
    <div class="mx-auto max-w-2xl px-5 text-center lg:px-8">
        <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-brand">Stay in the loop</p>
        <h2 class="mt-2 font-head text-2xl font-extrabold tracking-tight text-navy-900 sm:text-3xl">Subscribe for updates</h2>
        <p class="mx-auto mt-3 max-w-md text-navy-800/70">
            Cannot join live, or want to hear about future sessions? Subscribe and we will keep you posted.
        </p>

        <div class="mx-auto mt-8 max-w-md">
            <?php if (trim($BIGMARKER_SUBSCRIBE_EMBED) !== ''): ?>
                <?= $BIGMARKER_SUBSCRIBE_EMBED /* trusted BigMarker channel subscribe embed */ ?>
            <?php else: ?>
                <a href="<?= e(SUBSCRIBE_URL) ?>" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 rounded-full bg-navy-800 px-7 py-3.5 text-base font-bold text-white shadow-lg shadow-navy-700/25 transition-transform hover:-translate-y-0.5">
                    Subscribe for updates
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M3 4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H3Zm0 2 7 4 7-4v.01L10 12 3 6.01V6Z"/></svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ============================ PARTNERS ============================ -->
<section class="border-t border-navy-700/10 bg-white py-16">
    <div class="mx-auto max-w-6xl px-5 lg:px-8">
        <div class="grid items-center gap-x-12 gap-y-10 sm:grid-cols-3">
            <?php foreach ($partners as $partner): ?>
                <div class="text-center">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-navy-700/50"><?= e($partner['label']) ?></p>
                    <div class="mt-4 flex h-20 items-center justify-center">
                        <img src="<?= e($partner['img']) ?>" alt="<?= e($partner['alt']) ?>" class="<?= e($partner['h'] ?? 'max-h-14') ?> w-auto object-contain">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>
