# BTP Plesk Git Deployment

Each BTP website is deployed from its own branch. The branch root contains `index.php`, `about.php`, `services.php`, `news.php`, `contact.php`, `assets`, and `includes` directly. Do not deploy a nested folder.

## Branch Map

- CloudEXCELON: `deploy-cloudexcelon`
- PraaS: `deploy-praas`
- TechAdvisors: `deploy-techadvisors`
- SecuriSCOPE: `deploy-securiscope`
- ManageSP: `deploy-managesp`
- CodeIGNITE: `deploy-codeignite`
- DatastAIsis: `deploy-datastaisis`

## Plesk Git Setup

1. Open Plesk.
2. Go to Websites & Domains.
3. Open Git for the target domain.
4. Use the GitHub repository URL.
5. Select the correct branch from the branch map.
6. Set the deployment path to the domain root shown by Plesk.
7. Deploy the repository.
8. Confirm `index.php` exists directly in the domain root.
9. Test `/`, `/about`, `/services`, `/news`, and `/contact`.

For `dev.cloudexcelon.com`, use `deploy-cloudexcelon`.

## Website Audit Log

Each site root includes `docs/website-audit.md` and `docs/plesk-preview-audit.md`. Before fixing a discovered issue, log it there with the affected area, severity, planned correction, and verification step. After the fix, update the same entry with what changed.

## Competitive Benchmark And Content Policy

Each site root includes `docs/competitive-benchmark.md` and `docs/content-source-policy.md`.

- Use competitors and enterprise peers to judge visual polish, page flow, service explanation, CTA placement, and information architecture.
- Use only BTP-owned websites, BTP folder materials, BTP documents, and conservative BTP-derived language for factual copy.
- Do not copy competitor wording, service claims, metrics, certifications, client names, or proof points.

## QOS Verification

Before refreshing any deploy branch, run:

```powershell
powershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1
```

This checks PHP linting, friendly routes, docs, CSS, JavaScript, images, removed placeholder/legal pages, fake metrics, and common deployment path issues.

## Future Updates

On your local machine:

```powershell
git add .
git commit -m "Update BTP websites"
git push origin main
```

Then refresh the deploy branch for the specific website and push it. In Plesk, use:

1. Git.
2. Update from Remote.
3. Deploy HEAD Commit.

## Troubleshooting

- `403.14` usually means Plesk is serving an empty folder or `index.php` is not directly in the domain root.
- `404` on `/services` usually means the route wrapper `services/index.php` was not deployed or the wrong folder was selected.
- If CSS does not load, confirm `/assets/css/style.css` exists in the domain root.
- If images do not load, confirm `/assets/images/logo.svg`, `/assets/images/hero-visual.svg`, `/assets/images/process-visual.svg`, and `/assets/images/trust-visual.svg` exist.
- Check Plesk Logs for PHP warnings, missing file paths, and IIS/static-file errors.
- Do not deploy old `public_html` wrapper folders.
