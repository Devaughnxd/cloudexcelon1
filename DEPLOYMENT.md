# InterServer Deployment

This site is designed for InterServer shared hosting with PHP 8.3, File Manager, SSL, and cPanel Git Version Control.

## Domain Setup

The current target sub-domain is:

```text
https://dev.cloudexcelon.com
```

Before deploying to a different domain, replace the domain in these files:

- `public_html/sitemap.xml`
- `public_html/robots.txt`

Use the full public domain without a trailing slash.

The PHP templates do not hardcode the original PraaS domain for SEO URLs. Canonical tags, Open Graph URLs, schema URLs, and the footer website link automatically use the domain that serves the site.

If the domain needs different contact emails, update:

```text
public_html/includes/site.php
```

Change `info@dev.cloudexcelon.com` and `service@dev.cloudexcelon.com` to addresses for the new domain.

## What to Deploy

For File Manager deployment, upload the contents of the local `public_html` folder into the hosting account's `public_html` folder.

For cPanel Git deployment, push the full repository to GitHub and use the root `.cpanel.yml` file to copy only deployable files into `/home/USERNAME/public_html/`.

Do not deploy these local tooling folders to the live site:

- `node_modules`
- `tests`
- `playwright-report`
- `test-results`

## Method 1: File Manager

1. Login to InterServer cPanel.
2. Open File Manager.
3. Navigate to `public_html`.
4. Create a ZIP from the local `public_html` folder contents.
5. Upload the website ZIP.
6. Extract files directly inside `public_html`.
7. Verify `index.php`, `.htaccess`, `assets`, and `includes` are in `public_html`.
   Confirm the stylesheet exists at `assets/css/style.css`.
8. Test the website in a browser.
9. Enable SSL in cPanel.
10. Visit the new domain homepage, services page, and contact page.

## Method 2: Git Deployment

InterServer supports cPanel Git Version Control.

1. Push this project to GitHub.
2. Login to cPanel.
3. Open Git Version Control.
4. Clone the GitHub repository.
5. Configure the deployment path.
6. Deploy the repository to:

```text
/home/USERNAME/public_html/
```

7. Use the root `.cpanel.yml` file for future deployments.

Sample `.cpanel.yml`:

```yaml
---
deployment:
  tasks:
    - export DEPLOYPATH=/home/USERNAME/public_html/
    - /bin/cp -R public_html/assets $DEPLOYPATH
    - /bin/cp -R public_html/includes $DEPLOYPATH
    - /bin/cp public_html/*.php $DEPLOYPATH
    - /bin/cp public_html/.htaccess $DEPLOYPATH
    - /bin/cp public_html/robots.txt $DEPLOYPATH
    - /bin/cp public_html/sitemap.xml $DEPLOYPATH
```

Replace `USERNAME` with the actual InterServer cPanel username.

After cloning in cPanel, open Git Version Control and run **Deploy HEAD Commit**. The deployment task copies only the PHP, asset, include, sitemap, robots, and `.htaccess` files needed for production.

## Git Workflow After First Deployment

Run locally:

```bash
git add .
git commit -m "Update website"
git push origin main
```

Then in cPanel:

- Open Git Version Control
- Select the repository
- Update from Remote
- Deploy HEAD Commit

## PHP Version

In InterServer cPanel, set the domain to PHP 8.3 if it is not already selected. The site does not require Composer or a database.

## SSL

After files are deployed:

1. Open SSL/TLS or AutoSSL in cPanel.
2. Enable SSL for the domain.
3. Confirm the new `https://` domain loads.
4. The included `.htaccess` redirects HTTP traffic to HTTPS.

## Contact Form SMTP

The contact form frontend is ready, but live email sending is intentionally left as TODO comments in `public_html/contact.php`.

Before production launch, configure one of these:

- InterServer authenticated SMTP mailbox
- A transactional email provider
- Server-side validation and spam protection

Until SMTP is configured, the form displays a confirmation message but does not send email.

## InterServer Features Used

- PHP 8.3
- Git Version Control
- File Manager
- SSL management
- Logs for troubleshooting

Composer, Scheduled Tasks, and Sitejet Builder are available on InterServer but are not required for this website.

## Checking Logs If Something Breaks

1. In cPanel, open **Errors** to review recent PHP or Apache errors.
2. Open **Metrics > Raw Access** if you need request history.
3. Check whether the domain is using PHP 8.3.
4. Confirm `.htaccess` is present in the domain document root.
5. Confirm `index.php`, `assets`, and `includes` are directly inside the live document root.
6. If a page returns 404, verify Apache rewrite rules are enabled and that `.htaccess` was uploaded.
