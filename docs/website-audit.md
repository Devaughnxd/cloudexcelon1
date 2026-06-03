# Website Audit - BTP CodeIGNITE

This file is the running improvement log for BTP CodeIGNITE. Before future website issues are fixed, log the issue here with the date, affected area, severity, planned correction, and verification result.

## Audit Protocol

- Log every discovered issue before applying the fix.
- Track broken assets, weak CTAs, outdated service descriptions, SEO gaps, design problems, deployment issues, accessibility gaps, and content accuracy problems.
- Keep entries factual. Do not invent metrics, certifications, ownership status, or proof points.
- After the fix is applied, update the same entry with the files changed and the verification performed.

## Current Improvement Log

### 2026-06-03 - Visual rhythm was too static and overly white
- Severity: High
- Affected area: Home, About, Services, News, Contact shared layout system
- Finding: Page sections relied too heavily on white backgrounds and card blocks, making the sites feel template-like instead of custom enterprise consulting websites.
- Planned correction: Alternate dark, light, gradient, image-led, trust, CTA, and footer sections with stronger visual movement.
- Fix applied: Updated the generated design system to include dark feature sections, light process sections, branded gradient industry sections, dark trust sections, and a redesigned dark footer.
- Verification: Regenerate site, lint PHP, smoke-test all routes/assets, and visually inspect local pages.

### 2026-06-03 - Footer logo visibility and footer content quality needed correction
- Severity: High
- Affected area: Footer include
- Finding: The previous footer repeated generic tagline/CTA content and risked poor logo visibility on dark backgrounds.
- Planned correction: Remove the generic footer CTA block, place the dark logo on a dedicated white logo panel, and add useful navigation, services, contact information, social links, and one Request Consultation CTA.
- Fix applied: Rebuilt the generated footer include with a visible logo panel and practical footer columns.
- Verification: Confirm logo displays in header/footer and footer no longer contains the removed generic tagline block.

### 2026-06-03 - Fake trust metrics and incorrect ownership claim
- Severity: High
- Affected area: Home trust and impact sections
- Finding: Invented metrics such as client counts, dollar amounts, retention percentages, and a Veteran-Owned Business claim were not verified by BTP documentation.
- Planned correction: Remove fake numbers and unverified ownership claims. Replace with methodology-based trust language.
- Fix applied: Removed business impact metrics and replaced trust content with dedicated expertise, structured delivery, scalable engagement, strategic guidance, long-term partnership, and brand-specific methods.
- Verification: Search generated files for removed claims and metrics.

### 2026-06-03 - Visuals were not service-specific enough
- Severity: Medium
- Affected area: SVG visual library
- Finding: Visuals were too similar across brands and did not sufficiently complement each service category.
- Planned correction: Generate brand-specific visual systems that support the service story.
- Fix applied: Updated generated SVG visuals by brand: procurement workflows for PraaS, roadmaps for TechAdvisors, security/risk visuals for SecuriSCOPE, support operations for ManageSP, cloud topology for CloudEXCELON, code pipelines for CodeIGNITE, and AI/data workflows for DatastAIsis.
- Verification: Confirm each site loads its generated SVG visual assets over HTTP.

### 2026-06-03 - CloudEXCELON deployment branch naming needed correction
- Severity: Medium
- Affected area: Git deployment branches and deployment documentation
- Finding: CloudEXCELON was deployed from `plesk-deploy`, but the desired branch name is `deploy-cloudexcelon`.
- Planned correction: Rename deployment branch to `deploy-cloudexcelon`, remove `plesk-deploy`, and update deployment documentation.
- Fix applied: Updated deployment documentation and branch workflow to use `deploy-cloudexcelon`; old `plesk-deploy` is removed during the final remote branch refresh.
- Verification: Confirm remote has `deploy-cloudexcelon` and no `plesk-deploy` branch.

### 2026-06-03 - Competitor benchmarking needed documented guardrails
- Severity: Medium
- Affected area: Creative direction, UX review, content governance, and SEO/AIO strategy
- Finding: Competitor comparison is useful for visual quality, navigation clarity, page flow, and service explanation standards, but it needed a clear rule that BTP site content must remain sourced from BTP-owned materials only.
- Planned correction: Add a competitive benchmark document and a content source policy for each site.
- Fix applied: Added `docs/competitive-benchmark.md` and `docs/content-source-policy.md` to the generated site root. Competitors are benchmarks for layout, UX, information architecture, and conversion quality only.
- Verification: Confirm generated docs exist in every site and no competitor factual claims are introduced into page copy.

### 2026-06-03 - QOS verification needed a repeatable repository gate
- Severity: High
- Affected area: PHP quality, route health, asset loading, Plesk readiness, accessibility, and content hygiene
- Finding: Visual and deployment changes needed a consistent verification process before refreshing deployment branches.
- Planned correction: Add a QOS checklist per site and a root verification script that lint-checks PHP, checks content/path hygiene, and smoke-tests site routes/assets locally.
- Fix applied: Added `docs/qos-checklist.md` to every generated site and introduced `tools/verify-sites.ps1` as the pre-deployment gate.
- Verification: Run `powershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1` before pushing deploy branches.

### 2026-06-03 - Plesk preview and reload behavior caused inconsistent loading perception
- Severity: High
- Affected area: Header include, navigation include, footer include, generated page links, asset helper, JavaScript reload handling
- Finding: Plesk preview serves the site under `/plesk-site-preview/{domain}/`, but root-relative links and assets can resolve outside the preview path. Browser scroll restoration can also reload the page at the previous scroll position, making the site appear to load directly into lower sections or the footer.
- Planned correction: Replace hardcoded root links with a dynamic `site_url()` helper, make `asset()` preview-aware, convert generated page links/forms to helper-based URLs, and reset scroll to the top on reload when no hash is present.
- Fix applied: Added preview-safe routing helpers, updated shared header/navigation/footer links, converted generated body links, and added reload scroll restoration handling in `assets/js/main.js`.
- Verification: Regenerate sites, confirm active HTML/PHP contains no hardcoded root internal links, lint PHP, and smoke-test all routes/assets.

### 2026-06-03 - Plesk preview layout needed stabilization before deployment
- Severity: High
- Affected area: CSS spacing, SVG visuals, footer include, generated page sections, and preview documentation
- Finding: The preview could appear over-spaced, footer-heavy, or visually broken. Some SVG visuals used a browser/mockup-style shell that could be misread as an embedded screenshot of the website.
- Planned correction: Reduce header/hero/section spacing, remove screenshot-like SVG framing, tighten service grids, compact the footer, remove footer social icon row, and document preview findings in `docs/plesk-preview-audit.md`.
- Fix applied: Updated the shared design CSS, rebuilt the visual SVG shell as diagram nodes, simplified the footer to approved content only, added copyright, and generated the dedicated Plesk preview audit document.
- Verification: Regenerate sites, run QOS, search for fake claims/root links, and smoke-test all pages and assets.

### 2026-06-03 - Lazy SVG visuals caused reload-time layout shifts
- Severity: High
- Affected area: Generated image markup, SVG assets, and `.visual-card` CSS
- Finding: Browser testing showed lazy visual SVGs could temporarily collapse before decode, and SVG opacity needed XML-safe attributes for reliable Chromium rendering.
- Planned correction: Reserve visual space before lazy image load, add explicit image dimensions, load footer logo eagerly, and avoid CSS `rgba()` notation inside SVG attributes.
- Fix applied: Added `width`, `height`, and `decoding` attributes to generated visual images, added `.visual-card` aspect-ratio handling, updated footer logo markup, and regenerated XML-safe SVG visuals.
- Verification: Browser render matrix passed for CloudEXCELON `/`, `/about/`, `/services/`, `/news/`, `/contact/` at 1440, 1024, 768, 390, and 360 widths, with repeated reload checks on `/` and `/services/`.

