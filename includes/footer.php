</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="footer-logo-panel" href="<?= e(site_url()) ?>" aria-label="<?= e($brand['name']) ?> home"><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" width="460" height="170" decoding="async"></a>
      <p><?= e(footerDescription($brand)) ?></p>
    </div>
    <nav aria-label="Footer navigation"><h3>Navigation</h3><a href="<?= e(site_url()) ?>">Home</a><a href="<?= e(site_url('about')) ?>">About</a><a href="<?= e(site_url('services')) ?>">Services</a><a href="<?= e(site_url('news')) ?>">News</a><a href="<?= e(site_url('contact')) ?>">Contact</a></nav>
    <nav aria-label="Footer services"><h3>Services</h3><?php foreach (array_slice($brand['capabilities'], 0, 6) as $capability): ?><a href="<?= e(site_url('services')) ?>"><?= e($capability) ?></a><?php endforeach; ?></nav>
    <div class="footer-contact"><h3>Contact</h3><p>info@btpinnovations.com<br>(800) 781-6632</p><p>276 5th Avenue Suite 704<br>New York, NY 10001</p><a class="button button-primary" href="<?= e(site_url('contact')) ?>">Request Consultation</a></div>
  </div>
  <div class="container footer-bottom"><p>&copy; <?= date('Y') ?> BTP Innovations. All rights reserved.</p></div>
</footer>
</body>
</html>