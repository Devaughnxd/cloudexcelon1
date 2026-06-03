</main>
<footer class="site-footer">
  <section class="footer-cta">
    <div class="container cta-card">
      <div>
        <p class="eyebrow">BTP Innovations</p>
        <h2><?= e($brand['tagline']) ?></h2>
      </div>
      <a class="button button-primary" href="/contact"><?= e($brand['cta']) ?></a>
    </div>
  </section>
  <div class="container footer-grid">
    <div><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" loading="lazy"><p><?= e($brand['summary']) ?></p></div>
    <div><h3>Pages</h3><a href="/">Home</a><a href="/about">About</a><a href="/services">Services</a><a href="/news">News</a><a href="/contact">Contact</a></div>
    <div><h3>Contact</h3><p>info@btpinnovations.com<br>(800) 781-6632</p><p>276 5th Avenue Suite 704<br>New York, NY 10001</p></div>
  </div>
</footer>
</body>
</html>