</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="footer-logo-panel" href="<?= e(site_url()) ?>" aria-label="<?= e($brand['name']) ?> home"><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" loading="lazy"></a>
      <p><?= e(footerDescription($brand)) ?></p>
      <div class="social-links" aria-label="Social links"><a href="https://www.linkedin.com/company/btp-innovations/" aria-label="LinkedIn">in</a><a href="mailto:info@btpinnovations.com" aria-label="Email">@</a><a href="<?= e(site_url('contact')) ?>" aria-label="Request consultation">→</a></div>
    </div>
    <div><h3>Navigation</h3><a href="<?= e(site_url()) ?>">Home</a><a href="<?= e(site_url('about')) ?>">About</a><a href="<?= e(site_url('services')) ?>">Services</a><a href="<?= e(site_url('news')) ?>">News</a><a href="<?= e(site_url('contact')) ?>">Contact</a></div>
    <div><h3>Services</h3><?php foreach (array_slice($brand['capabilities'], 0, 6) as $capability): ?><a href="<?= e(site_url('services')) ?>"><?= e($capability) ?></a><?php endforeach; ?></div>
    <div class="footer-contact"><h3>Contact</h3><p>info@btpinnovations.com<br>(800) 781-6632</p><p>276 5th Avenue Suite 704<br>New York, NY 10001</p><a class="button button-primary" href="<?= e(site_url('contact')) ?>">Request Consultation</a></div>
  </div>
</footer>
</body>
</html>