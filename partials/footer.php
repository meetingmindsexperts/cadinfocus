<footer class="bg-navy-900 py-14 text-white/80">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="grid gap-10 md:grid-cols-3">
            <div>
                <p class="font-head text-xl font-extrabold leading-tight text-white">
                    Cold Agglutinin Disease <span class="text-red">in Focus</span>
                </p>
                <p class="mt-2 text-sm font-semibold text-ice">From Diagnosis to Evolving Management Strategies</p>
                <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/60">
                    A CME accredited virtual webinar on the burden, diagnosis and evolving management of Cold Agglutinin Disease. <?= e($event['date']) ?>, <?= e($event['format']) ?>.
                </p>
            </div>

            <div>
                <h3 class="font-head text-sm font-bold uppercase tracking-wide text-white">Explore</h3>
                <ul class="mt-4 space-y-2 text-sm text-white/70">
                    <li><a href="/#faculty" class="transition-colors hover:text-white">Faculty</a></li>
                    <li><a href="/#agenda" class="transition-colors hover:text-white">Agenda</a></li>
                    <li><a href="<?= REGISTER_URL ?>" class="transition-colors hover:text-white">Register</a></li>
                    <li><a href="<?= e(SUBSCRIBE_URL) ?>" target="_blank" rel="noopener noreferrer" class="text-white/50 transition-colors hover:text-white/80">Subscribe for updates</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-head text-sm font-bold uppercase tracking-wide text-white">Contact</h3>
                <p class="mt-4 font-head text-base font-bold text-white"><?= e(CONTACT_ORG) ?></p>
                <ul class="mt-4 space-y-3.5 text-sm text-white/70">
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-ice"><?= icon_svg('location', 'h-4 w-4') ?></span>
                        <span><?= e(CONTACT_ADDRESS) ?></span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-ice"><?= icon_svg('phone', 'h-4 w-4') ?></span>
                        <a href="tel:<?= e(CONTACT_TEL) ?>" class="transition-colors hover:text-white"><?= e(CONTACT_PHONE) ?></a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-ice"><?= icon_svg('mail', 'h-4 w-4') ?></span>
                        <a href="mailto:<?= e(CONTACT_EMAIL) ?>" class="break-all transition-colors hover:text-white"><?= e(CONTACT_EMAIL) ?></a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="grid h-8 w-8 flex-none place-items-center rounded-lg bg-white/5 text-ice"><?= icon_svg('clock', 'h-4 w-4') ?></span>
                        <span><?= e(CONTACT_HOURS) ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-6 text-xs text-white/50 sm:flex-row">
            <div class="flex items-center gap-3">
                <span class="font-semibold uppercase tracking-wide text-white/60">Organized by</span>
                <span class="inline-flex items-center rounded-md bg-white px-2.5 py-1.5 shadow-sm">
                    <img src="/assets/logos/mme.png" alt="Meeting Minds Experts" class="h-6 w-auto">
                </span>
            </div>
            <p>&copy; <?= date('Y') ?> Meeting Minds Experts. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Reveal elements as they scroll into view (skips if reduced motion is on).
    (function () {
        var els = document.querySelectorAll('.reveal');
        if (!('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            els.forEach(function (el) { el.classList.add('is-visible'); });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        els.forEach(function (el) { io.observe(el); });
    })();

    // Countdown timers: update every second toward each container's deadline.
    (function () {
        var nodes = document.querySelectorAll('.js-countdown');
        if (!nodes.length) return;
        function pad(n) { return (n < 10 ? '0' : '') + n; }
        function set(el, sel, v) { var n = el.querySelector(sel); if (n) n.textContent = v; }
        function tick() {
            var now = Date.now();
            nodes.forEach(function (el) {
                var diff = new Date(el.getAttribute('data-deadline')).getTime() - now;
                if (diff <= 0) {
                    set(el, '.cd-days', '00'); set(el, '.cd-hours', '00');
                    set(el, '.cd-minutes', '00'); set(el, '.cd-seconds', '00');
                    var live = el.parentNode.querySelector('.js-countdown-live');
                    if (live) { el.classList.add('hidden'); live.classList.remove('hidden'); }
                    return;
                }
                var s = Math.floor(diff / 1000);
                var d = Math.floor(s / 86400); s -= d * 86400;
                var h = Math.floor(s / 3600);  s -= h * 3600;
                var m = Math.floor(s / 60);    s -= m * 60;
                set(el, '.cd-days', pad(d)); set(el, '.cd-hours', pad(h));
                set(el, '.cd-minutes', pad(m)); set(el, '.cd-seconds', pad(s));
            });
        }
        tick();
        setInterval(tick, 1000);
    })();
</script>

</body>
</html>
