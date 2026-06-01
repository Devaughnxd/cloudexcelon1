<?php
declare(strict_types=1);
?>
</main>
<footer class="site-footer">
    <section class="footer-cta">
        <div class="container footer-cta-inner">
            <div>
                <p class="eyebrow">Flexible Staff Augmentation Made Simple</p>
                <h2>Hire skilled professionals and simplify technology sourcing.</h2>
                <p>Let's align the right resources, vendors, and technology options with your business goals.</p>
            </div>
            <a class="button button-primary" href="/contact">Hire a PraaS Pro Now</a>
        </div>
    </section>
    <div class="container footer-grid">
        <div>
            <img class="footer-logo" src="/assets/images/btp-praas-logo.png" alt="BTP PraaS" width="180" height="62">
            <p><?= e($site['brand']) ?></p>
        </div>
        <div>
            <h2>Company</h2>
            <a href="/about">About Us</a>
            <a href="/services">Services</a>
            <a href="/news">News</a>
            <a href="/contact">Contact</a>
        </div>
        <div>
            <h2>Legal</h2>
            <a href="/privacy-policy">Privacy Policy</a>
            <a href="/legal-notice">Legal Notice</a>
        </div>
        <div>
            <h2>Contact</h2>
            <p><?= e($site['address']) ?><br><?= e($site['city']) ?></p>
            <a href="tel:+18007816632"><?= e($site['phone']) ?></a>
            <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
            <a href="<?= e($site['url']) ?>"><?= e($site['host']) ?></a>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>&copy; <?= e($site['year']) ?> BTP PraaS | <?= e($site['brand']) ?> | All Rights Reserved</p>
    </div>
</footer>
<script src="/assets/js/main.js" defer></script>
</body>
</html>
