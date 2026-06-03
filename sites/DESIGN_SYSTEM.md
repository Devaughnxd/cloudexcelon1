# BTP Design System

Typography: Segoe UI/Inter-style system font, strong enterprise headlines, readable body copy, no viewport-scaled letter spacing.

Palette: black `#000000`, white `#FFFFFF`, blue `#2AA8FF`, deep blue `#0067F0`, red `#FF3B30`, plus controlled brand accent tokens.

Asset system: all CSS, JavaScript, logos, visuals, internal links, and form actions resolve through PHP `asset()` and `site_url()` helpers so the same files work on the live domain root and under Plesk preview paths.

Buttons: red primary conversion CTA, blue secondary service action, black-outline discovery action.

Cards: 8px radius, light border, subtle shadow, compact enterprise spacing, and color-accented service tops.

Spacing: desktop sections target 40-72px vertical padding, compact page heroes, no forced full-viewport content sections, and no fixed-height cards that create blank areas.

Hero system: concise executive headline, proof chips, and a brand-specific SVG service visual.

Visual system: service visuals are diagrams, workflows, dashboards, or topology illustrations. Do not use website screenshots or browser mockups as page content.

Content system: every site includes hero, service cards, benefits/trust, visual process, ecosystem links, final CTA, News cards, and one lead form.

Forms: one lead form only, with CRM-ready field names: `full_name`, `company_name`, `email`, `phone`, `message`, `brand`.

Benchmarking: competitor and peer websites are reviewed for visual quality, UX flow, information architecture, CTA strategy, and scanability only. Page copy and factual claims must come from BTP-owned sources.

QOS: run `tools/verify-sites.ps1` before pushing deploy branches. Each site includes `docs/website-audit.md`, `docs/plesk-preview-audit.md`, `docs/competitive-benchmark.md`, `docs/qos-checklist.md`, and `docs/content-source-policy.md`.
