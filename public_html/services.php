<?php
$pageTitle = 'BTP PraaS Services | IT Professionals On Demand';
$metaDescription = 'Explore BTP PraaS talent categories including cloud engineering, Microsoft 365, SharePoint, Power Platform, cybersecurity, help desk, infrastructure, and project delivery.';
$pagePath = '/services';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container narrow">
        <p class="eyebrow">Services</p>
        <h1>Hire skilled professionals on demand, backed by a dedicated team.</h1>
        <p>PraaS supports technology teams with flexible professionals across high-demand business and IT categories.</p>
    </div>
</section>
<section class="section">
    <div class="container services-list">
        <?php
        $items = [
            ['Cloud Engineering', 'Azure and cloud professionals for architecture, migration, performance, security, and scalability.'],
            ['Microsoft 365', 'Microsoft 365 specialists for Teams, Exchange, identity, productivity, governance, and user adoption.'],
            ['SharePoint Solutions', 'SharePoint professionals for sites, intranets, libraries, permissions, forms, workflows, and collaboration.'],
            ['Power Platform Automation', 'Power Apps, Power Automate, and Power BI professionals who automate processes and improve visibility.'],
            ['Cybersecurity', 'Security professionals for risk reduction, monitoring, hardening, compliance support, and response readiness.'],
            ['Help Desk & IT Support', 'End-user support coverage for day-to-day service needs, escalation, device support, and productivity issues.'],
            ['Infrastructure & Networking', 'Systems and network professionals for reliability, connectivity, implementation, and operational support.'],
            ['Project Delivery', 'Project coordinators, business analysts, and delivery professionals for IT initiatives and operational programs.'],
        ];
        foreach ($items as $item): ?>
            <article class="service-row">
                <div>
                    <span class="service-dot"></span>
                    <h2><?= e($item[0]) ?></h2>
                </div>
                <p><?= e($item[1]) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="section section-dark">
    <div class="container two-column">
        <div>
            <p class="eyebrow">How PraaS Works</p>
            <h2>Primary pro, backup pro, dedicated team support.</h2>
        </div>
        <div class="step-list">
            <p><strong>1. Match:</strong> BTP aligns the professional category, skill level, and scope to your business need.</p>
            <p><strong>2. Support:</strong> Your primary professional works with a backup and a support team to maintain continuity.</p>
            <p><strong>3. Scale:</strong> Capacity can expand or contract as projects, support volume, and budgets change.</p>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
