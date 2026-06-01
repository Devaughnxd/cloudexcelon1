<?php
$pageTitle = 'BTP PraaS Services | Save Time And Money With PraaS Pro';
$metaDescription = 'Explore BTP PraaS services, cost-saving advantages, and PraaS Pro talent categories including developers, DBA architects, DevOps, cybersecurity, UX, cloud, QA, support, and automation.';
$pagePath = '/services';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero page-hero-split services-hero">
    <div class="container page-hero-grid">
        <div>
            <p class="eyebrow">Services</p>
            <h1>Save time and money with PraaS Pro service.</h1>
            <p>Discover the cost-saving advantages of BTP PraaS, designed to streamline workforce needs with efficiency, continuity, and savings.</p>
        </div>
        <div class="service-stack" aria-label="Service coverage areas">
            <span>Recruitment Savings</span>
            <span>Continuity</span>
            <span>Team Support</span>
            <span>Scalability</span>
            <span>Backup Pros</span>
            <span>Flexible Terms</span>
        </div>
    </div>
</section>
<section class="section">
    <div class="container services-list">
        <?php
        $items = [
            ['Developers', 'Front-end and back-end professionals who build and maintain robust applications.'],
            ['DBA / Architects', 'Experts in database design, buildout, optimization, performance, security, and reliability.'],
            ['DevOps Engineers', 'Specialists in streamlining development and operations for efficient, scalable workflows.'],
            ['Cybersecurity Specialists', 'Experts who help safeguard systems against threats and protect data.'],
            ['UI / UX Designers', 'Creative professionals focused on user-centered interfaces and experiences.'],
            ['Cloud Engineers', 'Professionals skilled in deploying, managing, and optimizing cloud infrastructure.'],
            ['QA Testers', 'Detail-oriented professionals who help ensure applications meet quality standards.'],
            ['IT Support Specialists', 'End-user support professionals who maintain systems and support smooth daily operations.'],
            ['Automation Specialists', 'Professionals who streamline processes, boost efficiency, and reduce manual effort.'],
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
<section class="section muted">
    <div class="container engagement-grid">
        <div class="section-heading">
            <p class="eyebrow">Cost-Saving Advantages</p>
            <h2>Four ways PraaS improves traditional staffing.</h2>
        </div>
        <article><h3>Recruitment</h3><p>Skip third-party staffing fees with direct access to top-tier professionals.</p></article>
        <article><h3>Continuity</h3><p>Maintain momentum with backup professionals ready to step in when needed.</p></article>
        <article><h3>Scalability</h3><p>Adjust team size to meet project demands without long-term commitments.</p></article>
    </div>
</section>
<section class="section section-dark">
    <div class="container two-column">
        <div>
            <p class="eyebrow">Your Gateway To Top Professionals</p>
            <h2>Discover expert PraaS Pros ready to elevate your projects and operations.</h2>
        </div>
        <div class="step-list">
            <p><strong>1. Match:</strong> BTP aligns the professional category, skill level, and scope to your business need.</p>
            <p><strong>2. Support:</strong> Your primary professional works with a backup and a support team to maintain continuity.</p>
            <p><strong>3. Scale:</strong> Capacity can expand or contract as projects, support volume, and budgets change.</p>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
