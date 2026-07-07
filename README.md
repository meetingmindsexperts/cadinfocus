# Cold Agglutinin Disease in Focus

Single-page PHP landing site for the **Cold Agglutinin Disease in Focus** virtual
CME webinar (*From Diagnosis to Evolving Management Strategies*).

- **Date:** 20 July 2026, 8:00 PM GMT +4 (UAE Time)
- **Format:** Virtual
- **Endorsed by:** Emirates Society of Haematology (ESH)
- **Supported by:** Recordati
- **Managed by:** Meeting Minds Experts (MME)

## Stack

Plain PHP (no framework) + Tailwind (Play CDN). Content lives in one place:
[`partials/config.php`](partials/config.php). The pages just render it.

```
index.php            hero, countdown, stats, about, faculty, timeline agenda, register CTA, partners
register.php         BigMarker registration embed slot + Mailchimp subscribe
partials/
  config.php         ALL event content + SITE_URL + GA id + contact constants + icon_svg()
  header.php         <head>, SEO/OG/Twitter, Event JSON-LD, brand theme, nav
  footer.php         contact + explore + "Organized by" bar + reveal/countdown scripts
  stats.php          shared stats band
  countdown.php      countdown to the event start
assets/              hero-bg, og-image, favicon, logos/, faculty/
```

## Local development

```bash
php -S 127.0.0.1:8800
# open http://127.0.0.1:8800/
```

Clean URLs (`/`, `/register`) are handled by `.htaccess` on Apache/cPanel. With
the PHP built-in server, use `register.php` directly.

## Before launch

1. **BigMarker embed** — paste the registration embed snippet into
   `$BIGMARKER_EMBED` in [`register.php`](register.php). A styled placeholder
   shows until then.
2. **Domain** — set `SITE_URL` in `partials/config.php` and update `robots.txt`
   and `sitemap.xml` if the production domain differs from `cadinfocus.com`.
3. **Google Analytics** — set `GA_MEASUREMENT_ID` in `partials/config.php`
   (GA only loads once set).
4. **Faculty photo** — Dr. Hazzaa Alzahrani currently renders an initials
   avatar; drop a headshot at `assets/faculty/hazzaa.jpg` and add the `'img'`
   key to his entry in `config.php` when available.

## Deploy

Push to `main` triggers `.github/workflows/deploy.yml`, which uploads over FTP.
Add three repository secrets first: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`.
Raw design source (the PPTX and full-res artwork) is excluded from upload.
