# Plesk Preview Audit - BTP ManageSP

Date: 2026-06-03

Purpose: stabilize Plesk preview rendering before deployment so the site loads consistently at the real domain and at preview URLs such as `/plesk-site-preview/managesp.cloudexcelon.com/`.

## Problems Found

- Plesk preview can serve the same site through a nested preview path, so hardcoded root-relative URLs can resolve outside the preview path.
- Browser reload scroll restoration can reopen pages mid-scroll, making content appear to start too low or jump into lower sections.
- Header and page hero spacing was heavier than needed for preview review.
- Some visual SVGs used a left-side browser/mockup-style shell that could look like a screenshot embedded inside the page.
- Footer contained an extra social icon row and needed to be limited to approved production footer content.
- Footer needed a compact copyright row and consistently visible logo panel.
- Lazy-loaded SVG visuals did not reserve enough space before decoding, creating reload-time layout shifts.
- Some generated SVG attributes used CSS `rgba()` notation instead of XML-safe color plus opacity attributes.

## Root Causes

- Internal links, form actions, and asset URLs originally assumed the site was always mounted at `/`.
- The shared visual template used a large mockup panel rather than a pure service diagram.
- Global section padding, hero minimum height, and footer padding were tuned for presentation rather than Plesk preview stability.
- The QOS gate did not originally fail hardcoded root-relative internal links.
- Generated image tags lacked explicit visual dimensions, so lazy assets could collapse before the browser decoded them.

## Files Changed By Generator

- `includes/header.php`
- `includes/navigation.php`
- `includes/footer.php`
- `assets/css/style.css`
- `assets/js/main.js`
- `index.php`, `about.php`, `services.php`, `news.php`, `contact.php`
- `assets/images/*-visual.svg`
- `docs/website-audit.md`
- `docs/plesk-preview-audit.md`

## Fixes Applied

- Added `site_base_path()`, `site_url()`, and preview-aware `asset()` helpers.
- Added fallback detection for preview served from the server IP and the brand domain.
- Converted generated internal links and form actions to `site_url()` output.
- Added reload scroll restoration handling in JavaScript.
- Reduced header, hero, page hero, section, card, and footer spacing.
- Replaced browser/mockup-style SVG framing with diagram nodes and service workflow connectors.
- Converted generated SVG opacity usage to XML-safe attributes for more reliable browser rendering.
- Added explicit `width`, `height`, and `decoding` attributes to visual images.
- Added an `aspect-ratio` rule for `.visual-card` so lazy visuals reserve stable space before loading.
- Loaded the footer logo eagerly with fixed intrinsic dimensions so brand visibility is immediate.
- Simplified footer to brand logo, short description, navigation, services, contact information, CTA, and copyright only.
- Removed footer social icon row.
- Added QOS detection for hardcoded root-relative internal links.

## Remaining Issues

- Live Plesk preview must be refreshed from the correct deploy branch after Git push. Until Plesk deploys the latest branch commit, the preview may still show old assets.
- If browser cache retains stale CSS or JS, perform a hard refresh after deployment.

## Final Test Results

- PHP lint: required before deploy branch refresh.
- Local route smoke tests: `/`, `/about`, `/services`, `/news`, `/contact`.
- Asset smoke tests: CSS, JS, logo SVG, hero/about/services/contact/news/proof/process/trust SVGs.
- Browser render matrix: CloudEXCELON `/`, `/about/`, `/services/`, `/news/`, `/contact/` tested at 1440, 1024, 768, 390, and 360 widths, with repeated reload checks on `/` and `/services/`.
- Preview path simulation: helper output must include `/plesk-site-preview/managesp.cloudexcelon.com/` for preview requests.
- Content hygiene: no fake metrics, no unverified partner/certification claims, no lorem ipsum, no privacy/legal links, and no hardcoded root-relative internal links.
