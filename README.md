# BTP Brand Website System

This repository contains lightweight PHP 8.3 websites for the BTP brand ecosystem. Each finished website is generated into `sites/<brand>` with `index.php` directly at the deploy root.

## Active Site Roots

- `sites/praas` - BTP PraaS
- `sites/techadvisors` - BTP TechAdvisors
- `sites/securiscope` - BTP SecuriSCOPE
- `sites/managesp` - BTP ManageSP
- `sites/cloudexcelon` - BTP CloudEXCELON for `dev.cloudexcelon.com`
- `sites/codeignite` - BTP CodeIGNITE
- `sites/datastaisis` - BTP DatastAIsis

## Design System

The sites share one BTP design system: BTP bar-logo identity, black/white/blue/red palette, Fluent-inspired cards, executive-grade hero layouts, revenue-model sections, customer journey sections, FAQ content for AI search, related BTP solution cross-sells, and one lead-generation contact form.

## Deployment Branches

- `plesk-deploy` - BTP CloudEXCELON
- `deploy-praas` - BTP PraaS
- `deploy-techadvisors` - BTP TechAdvisors
- `deploy-securiscope` - BTP SecuriSCOPE
- `deploy-managesp` - BTP ManageSP
- `deploy-codeignite` - BTP CodeIGNITE
- `deploy-datastaisis` - BTP DatastAIsis

There is no `deploy-cloudexcelon` branch. Use `plesk-deploy` for CloudEXCELON.

## Local Preview

```powershell
php -S 127.0.0.1:8094 -t sites/cloudexcelon
```

Then open `http://127.0.0.1:8094/`.

## Regenerate Sites

```powershell
php tools/build-brand-sites.php
```

The generator uses existing logo assets from `assets/brand-logos` and writes complete deploy roots under `sites`.
