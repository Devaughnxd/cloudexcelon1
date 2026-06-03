# Deployment - BTP CodeIGNITE

## GitHub Push

```powershell
git add .
git commit -m "Update CodeIGNITE website"
git push origin deploy-codeignite
```

## Plesk Git Deployment

1. Open Plesk > Websites & Domains.
2. Open Git for the target domain.
3. Use the `deploy-codeignite` repository branch for this site.
4. Set deployment path to the domain root, not a nested `public_html` folder.
5. Deploy repository.
6. Confirm `index.php` exists directly in the domain folder.
7. Test `/`, `/about`, `/services`, and `/contact`.

## Updates

Use **Update from Remote**, then **Deploy HEAD Commit**.

## Troubleshooting

- 403.14 means `index.php` is missing from the served folder or the wrong deployment path is selected.
- 404 on `/services` means the deploy did not include `services/index.php` or the wrong folder was deployed.
- Check Plesk Logs for PHP warnings and IIS errors.
- Verify asset paths start with `/assets/` and the domain root contains `assets`, `includes`, and the page files.
