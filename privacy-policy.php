<?php
$pageTitle = 'Privacy Policy | BTP PraaS';
$metaDescription = 'BTP PraaS privacy policy describing how contact information and website data may be collected and used.';
$pagePath = '/privacy-policy';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero legal-hero privacy-hero"><div class="container narrow"><p class="eyebrow">Privacy</p><h1>Privacy Policy</h1><p>Effective Date: May 2025</p></div></section>
<section class="section legal-copy"><div class="container narrow">
    <p>BTP PraaS respects your privacy. Information submitted through this website may include your name, company, email address, phone number, and message details.</p>
    <h2>How information is used</h2>
    <p>Information is used to respond to inquiries, schedule consultations, provide requested information, and improve the website experience.</p>
    <h2>Sharing</h2>
    <p>BTP PraaS does not sell personal information. Information may be shared with trusted service providers only when needed to operate the website, process communications, or comply with legal obligations.</p>
    <h2>Security</h2>
    <p>Reasonable safeguards are used to protect submitted information. No website transmission or storage system can be guaranteed to be completely secure.</p>
    <h2>Contact</h2>
    <p>Privacy questions may be sent to <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>.</p>
</div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
