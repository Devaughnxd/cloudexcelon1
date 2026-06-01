<?php
$pageTitle = 'Legal Notice | BTP PraaS';
$metaDescription = 'Legal notice for BTP PraaS, a solution brand of BTP Innovations.';
$pagePath = '/legal-notice';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero legal-hero notice-hero"><div class="container narrow"><p class="eyebrow">Legal</p><h1>Legal Notice</h1><p>Effective Date: May 2025</p></div></section>
<section class="section legal-copy"><div class="container narrow">
    <h2>Website owner</h2>
    <p>BTP PraaS<br><?= e($site['brand']) ?><br><?= e($site['address']) ?><br><?= e($site['city']) ?></p>
    <h2>Contact</h2>
    <p>Phone: <a href="tel:+18007816632"><?= e($site['phone']) ?></a><br>Email: <a href="mailto:<?= e($site['legalEmail']) ?>"><?= e($site['legalEmail']) ?></a></p>
    <h2>Use of this website</h2>
    <p>Website content is provided for general business information. Service availability, scope, pricing, and staffing coverage are subject to written agreement.</p>
    <h2>Intellectual property</h2>
    <p>All trademarks, brand marks, images, copy, and design elements are owned by or licensed to their respective owners. Unauthorized reproduction is prohibited.</p>
</div></section>
<?php require __DIR__ . '/includes/footer.php'; ?>
