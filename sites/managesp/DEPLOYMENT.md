# Deployment - BTP ManageSP

## GitHub Push

```powershell
git add .
git commit -m "Update ManageSP website"
git push origin deploy-managesp
```

## Pre-Deployment QOS

From the main repository, run:

```powershell
powershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1
```

Review `docs/website-audit.md`, `docs/plesk-preview-audit.md`, `docs/competitive-benchmark.md`, `docs/content-source-policy.md`, and `docs/qos-checklist.md` before refreshing the deploy branch.

## Plesk Git Deployment

1. Open Plesk > Websites & Domains.
2. Open Git for the target domain.
3. Use the `deploy-managesp` repository branch for this site.
4. Set deployment path to the domain root, not a nested `public_html` folder.
5. Deploy repository.
6. Confirm `index.php` exists directly in the domain folder.
7. Test `/`, `/about`, `/services`, `/news`, and `/contact`.

## Updates

Use **Update from Remote**, then **Deploy HEAD Commit**.

## Troubleshooting

- 403.14 means `index.php` is missing from the served folder or the wrong deployment path is selected.
- 404 on `/services` means the deploy did not include `services/index.php` or the wrong folder was deployed.
- Check Plesk Logs for PHP warnings and IIS errors.
- Verify asset paths resolve through the `asset()` helper and the domain root contains `assets`, `includes`, and the page files.
