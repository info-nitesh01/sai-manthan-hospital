# AGENTS.md

## Stack
Static PHP marketing site for Sai Manthan Hospital (Pratapgarh). No `package.json`, no build step, no test runner, no framework. Pages are `.php` in the project root, served through XAMPP/Apache. Edit in place and verify by opening the page in a browser; there is nothing to compile or lint.

## Page structure (high-signal)
- Every root `.php` page is a full document: it sets `$pageTitle`, then includes `partials/head.php`, `partials/preloader.php`, `partials/header.php`, and (near the end) `partials/footer.php`. Set `$pageTitle` **before** the includes (`index.php:2`).
- `partials/head.php` loads `data/site-common-data.php` into `$siteData` (ratings, review counts, department list). Use `$siteData['key']` for counters/stats instead of hardcoding numbers.
- Internal links use root-relative `.php` paths: `about.php`, `contact.php`, `services.php`, `book-appointment.php`, `team.php`, `404.php`. Do not use `.html` for root pages.
- `.htaccess` maps 404s to `/pluxes/404.php`; the site runs under a `/pluxes/` subdirectory on the server.

## Where to put changes
- Shared styling: `css/custom.css`. Do not edit vendor files (`css/*.min.css`, `css/all.min.css`, `css/bootstrap.min.css`, etc.).
- Shared behavior: `js/function.js`. Do not edit vendor files (`js/*.min.js`, `js/jquery-3.7.1.min.js`, etc.). Configure sliders/counters/animations in `function.js`, not inline in pages.
- Page content: edit the matching root `.php` file.
- Site-wide copy/stats: `data/site-common-data.php`.
- Shared section data used on multiple pages: `data/common-about.php` (About Us section), `data/common-facts.php` (Fact/Statistics), `data/common-why-choose-us.php` (Why Choose Us), `data/common-team.php` (Our Team section on both `index.php` and `team.php`; `members_detail` used by `team-single.php?name=<name>`).
- Homepage-only section data: `data/home-*.php` (hero, services, why-choose-us, core-features, team, testimonials, support, appointment). `index.php` loads each into a variable and renders the section dynamically.

## Archives — do not treat as live
- `html-files/*.html` and `Version/index.html` are template/archive copies, not served pages. Changes there have no effect on the site.

## Validation
Manual only: open the affected page in a browser (XAMPP `http://localhost/pluxes/...`), check links, styles, JS interactions, and console errors. Confirm asset paths resolve from the project root (`images/...`, `css/...`, `js/...`).
