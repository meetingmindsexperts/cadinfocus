<?php /* Countdown to the event. Expects $event from config.php. */ ?>
<section class="relative overflow-hidden bg-gradient-to-br from-navy-800 to-navy-900 py-12 text-white sm:py-14">
    <div aria-hidden="true" class="pointer-events-none absolute -right-20 top-0 h-60 w-60 rounded-full bg-brand/20 blur-3xl"></div>
    <div class="relative mx-auto max-w-3xl px-5 text-center lg:px-8">
        <p class="font-head text-sm font-bold uppercase tracking-[0.2em] text-ice">Event starts in</p>

        <div class="js-countdown mt-6 grid grid-cols-4 gap-3 sm:gap-5"
             data-deadline="<?= e($event['iso']) ?>"
             role="timer" aria-label="Time remaining until the event">
            <?php
            $units = ['days' => 'Days', 'hours' => 'Hours', 'minutes' => 'Minutes', 'seconds' => 'Seconds'];
            foreach ($units as $key => $label): ?>
                <div class="rounded-2xl border border-white/10 bg-white/[0.06] px-1 py-5 backdrop-blur sm:px-2">
                    <span class="cd-<?= $key ?> block font-head text-4xl font-extrabold leading-none tabular-nums sm:text-5xl">00</span>
                    <span class="mt-2 block text-[11px] font-semibold uppercase tracking-wide text-white/60 sm:text-xs"><?= e($label) ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="js-countdown-live mt-6 hidden font-head text-lg font-bold text-ice">The session is live now</p>
        <p class="mt-5 text-sm text-white/60"><?= e($event['date']) ?> &middot; <?= e($event['time']) ?></p>
    </div>
</section>
