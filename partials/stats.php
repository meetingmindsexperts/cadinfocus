<?php /* Shared stats band. Expects $stats from config.php. */ ?>
<section class="relative border-y border-navy-700/10 bg-gradient-to-b from-white to-brand/[0.03]">
    <div class="mx-auto max-w-6xl px-5 py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-2 gap-4 sm:gap-5 lg:grid-cols-4">
            <?php foreach ($stats as $i => $stat): ?>
                <div class="reveal group flex flex-col items-center rounded-2xl border border-navy-700/10 bg-white px-4 py-7 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand/30 hover:shadow-xl hover:shadow-navy-700/10"
                     style="transition-delay: <?= $i * 80 ?>ms">
                    <span class="mb-4 grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-red/10 via-brand/10 to-ice/10 text-brand transition-colors group-hover:from-red/15 group-hover:to-ice/15">
                        <?= icon_svg($stat['icon'], 'h-6 w-6') ?>
                    </span>
                    <p class="font-head text-3xl font-extrabold leading-none text-transparent sm:text-4xl"
                       style="background:linear-gradient(135deg,#dc2626 0%,#1d4ed8 55%,#0a1740 100%);-webkit-background-clip:text;background-clip:text;">
                        <?= e($stat['num']) ?>
                    </p>
                    <p class="mt-2 text-sm font-semibold text-navy-800/70"><?= e($stat['label']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
