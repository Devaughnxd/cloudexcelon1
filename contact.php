<?php
$pageTitle = 'Contact BTP PraaS | Let Us Connect Today';
$metaDescription = 'Contact BTP PraaS for expert IT pros, technology procurement, vendor sourcing, Resource-as-a-Service, SaaS licensing, or staffing support.';
$pagePath = '/contact';
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero page-hero-split contact-hero">
    <div class="container page-hero-grid">
        <div>
            <p class="eyebrow">Contact Us</p>
            <h1>Let's connect today.</h1>
            <p>Whether you have questions, need expert IT pros, or want to simplify technology sourcing, our team is ready to assist you.</p>
        </div>
        <aside class="contact-quick-card">
            <h2>Contact information</h2>
            <p>Connect with BTP PraaS to simplify technology sourcing and align the right resources with your business goals.</p>
            <a href="tel:+18007816632"><?= e($site['phone']) ?></a>
        </aside>
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
            <h2>Feel free to contact us</h2>
            <p><?= e($site['address']) ?><br><?= e($site['city']) ?></p>
            <p><a href="tel:+18007816632"><?= e($site['phone']) ?></a><br><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></p>
            <p>For general inquiries, use the contact form and we'll get back to you as soon as possible.</p>
        </aside>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
