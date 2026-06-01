# BTP PraaS Website

Production-ready PHP 8.3 website for BTP PraaS, built for InterServer shared hosting and cPanel Git deployment.

## Pages

- Home
- About Us
- Services
- News
- Contact
- Privacy Policy
- Legal Notice

## Stack

- PHP 8.3 compatible includes
- HTML5
- CSS3
- Vanilla JavaScript
- No database
- No framework

## Structure

```text
public_html/
  index.php
  about.php
  services.php
  news.php
  contact.php
  privacy-policy.php
  legal-notice.php
  sitemap.xml
  robots.txt
  .htaccess
  .cpanel.yml
  assets/
    css/
    js/
    images/
  includes/
    header.php
    footer.php
    navigation.php
    site.php
```

## Contact Form

The contact form is frontend-ready and posts to `/contact`. SMTP delivery is intentionally left as TODO comments in `public_html/contact.php` so it can be configured with InterServer SMTP credentials or a transactional email provider.

## New Domain

Before launch, replace `YOUR-DOMAIN.com` in:

- `public_html/sitemap.xml`
- `public_html/robots.txt`

The PHP templates automatically use the current deployed domain for canonical tags, Open Graph tags, schema URLs, and the footer website link.

## Local Development

From the project root:

```bash
php -S localhost:8080 -t public_html
```

Open `http://localhost:8080`.

## Local QA Tools

This workspace includes local validation tooling:

```bash
npm install
npm run check:php
php -S localhost:8080 -t public_html
npm run check:browser
```

`check:php` lints all PHP templates and includes. `check:browser` uses Playwright to verify all pages load and the mobile navigation opens.

Do not upload `node_modules` to InterServer. It is local QA tooling only.
