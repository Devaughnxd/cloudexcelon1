<?php
$pageTitle = 'Contact BTP PraaS | Schedule a Consultation';
$metaDescription = 'Contact BTP PraaS to schedule a consultation and hire skilled IT professionals backed by a dedicated support team.';
$pagePath = '/contact';
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container narrow">
        <p class="eyebrow">Contact Us</p>
        <h1>Schedule a consultation.</h1>
        <p>Tell us what kind of professional support you need and the BTP PraaS team will follow up.</p>
    </div>
</section>
<section class="section contact-section">
    <div class="container contact-grid">
        <form class="contact-form" method="post" action="/contact" novalidate>
            <?php if ($submitted): ?>
                <div class="form-success" role="status">Thank you. Your message has been captured. SMTP delivery is ready to be configured on the hosting account.</div>
            <?php endif; ?>
            <label>Name <input name="name" type="text" autocomplete="name" required></label>
            <label>Company <input name="company" type="text" autocomplete="organization"></label>
            <label>Email <input name="email" type="email" autocomplete="email" required></label>
            <label>Phone <input name="phone" type="tel" autocomplete="tel"></label>
            <label class="full">Message <textarea name="message" rows="6" required></textarea></label>
            <!-- TODO: Configure SMTP mail delivery on InterServer using authenticated SMTP or a trusted transactional provider. -->
            <!-- TODO: Add server-side validation, spam protection, and final recipient routing before production form mail is enabled. -->
            <button class="button button-primary" type="submit">Send Message <span aria-hidden="true">&rarr;</span></button>
        </form>
        <aside class="contact-card">
            <h2>Contact Information</h2>
            <p><?= e($site['address']) ?><br><?= e($site['city']) ?></p>
            <p><a href="tel:+18007816632"><?= e($site['phone']) ?></a><br><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></p>
            <p>BTP PraaS is a solution brand of BTP Innovations.</p>
        </aside>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
