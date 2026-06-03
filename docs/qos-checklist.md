# QOS Checklist - BTP CloudEXCELON

QOS for this website means reliability, performance, deployment readiness, accessibility, SEO/AIO clarity, and maintainable lead-generation quality.

## Pre-Deployment Gate

Run from the main repository before refreshing deploy branches:

```powershell
powershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1
```

The verification gate checks PHP linting, route availability, asset availability, content hygiene, and common Plesk path issues.

## Route And Asset Health

- `/`, `/about`, `/services`, `/news`, and `/contact` load without 404s.
- `/docs/website-audit.md`, `/docs/plesk-preview-audit.md`, `/docs/competitive-benchmark.md`, `/docs/qos-checklist.md`, and `/docs/content-source-policy.md` exist in the generated site root.
- `/assets/css/style.css` loads.
- `/assets/js/main.js` loads.
- `/assets/images/logo.svg` loads and remains readable in header and footer.
- Service visuals load from `/assets/images/*.svg` with no broken image references.
- Route wrappers such as `/services/index.php` are present for IIS/Plesk friendly URLs.

## Content And Trust Hygiene

- No lorem ipsum, placeholder sections, fake metrics, fake certifications, or unverified ownership claims.
- Copy is sourced from BTP-owned websites, BTP documents, or conservative service language derived from BTP materials.
- Competitor research informs structure and quality only, not factual content.
- CTA wording matches CloudEXCELON and guides the user to a contact conversation.
- Contact form fields use CRM-ready names: `full_name`, `company_name`, `email`, `phone`, `message`, `brand`.

## Performance And Accessibility

- PHP 8.3 compatible with no database dependency.
- No React, Next.js, Node runtime, WordPress, or heavy animation libraries.
- SVG visuals are lightweight and loaded from the local asset folder.
- Non-critical visuals use lazy loading where applicable.
- Mobile navigation opens and closes with JavaScript enabled.
- Headings follow a clear hierarchy and body text has readable contrast.
- Forms have labels and focus states.

## Plesk Readiness

- `index.php` exists directly in the deploy branch root.
- Do not deploy a nested `public_html` folder.
- `.htaccess` and `web.config` are present for Apache/IIS-style Plesk environments.
- If a deployed domain shows `403.14`, confirm Plesk is pointed at the branch root and `index.php` is present.
- If `/services` shows `404`, confirm `services/index.php` exists and the correct deploy branch was selected.

## Owner Review

Before Plesk deployment, visually check the homepage and child pages against the benchmark doc and ask whether a CIO, CTO, procurement leader, or business owner would understand the offer and trust the next step.
