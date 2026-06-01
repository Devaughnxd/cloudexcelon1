<?php
$pageTitle = 'BTP PraaS Services | Save Time And Money With PraaS Pro';
$metaDescription = 'Explore BTP PraaS services including recruitment savings, continuity, support, scalability, technology procurement, vendor sourcing, Resource-as-a-Service, SaaS licensing, and IT talent categories.';
$pagePath = '/services';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero page-hero-split services-hero">
    <div class="container page-hero-grid">
        <div>
            <p class="eyebrow">Services</p>
            <h1>Save time and money with PraaS Pro service.</h1>
            <p>Discover the cost-saving advantages of BTP PraaS, designed to streamline workforce needs, technology sourcing, vendor coordination, and resource alignment.</p>
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
    <div class="container service-outcomes">
        <div class="section-heading compact">
            <p class="eyebrow">PraaS Advantages</p>
            <h2>Staffing support built around continuity, savings, and speed.</h2>
            <p>BTP PraaS gives you access to skilled professionals without the usual friction of recruiting, vendor coordination, or single-resource dependency.</p>
        </div>
        <div class="outcome-grid">
            <article><span>01</span><h3>Recruitment Savings</h3><p>Reduce the time, cost, and administrative burden of sourcing specialized technical talent through traditional hiring channels.</p></article>
            <article><span>02</span><h3>Continuity Coverage</h3><p>Primary professionals are supported by backup coverage so vacations, transitions, or unexpected absences do not stall critical work.</p></article>
            <article><span>03</span><h3>Expert Team Support</h3><p>PraaS Pros can call home to the BTP support structure for task-specific expertise, peer review, and practical guidance.</p></article>
            <article><span>04</span><h3>Flexible Scaling</h3><p>Scale capacity up or down as project needs, support volume, budgets, or timelines change.</p></article>
        </div>
    </div>
</section>

<section class="section muted talent-section">
    <div class="container">
        <div class="section-heading compact">
            <p class="eyebrow">Talent Categories</p>
            <h2>Expert PraaS Pros for the work your team needs done.</h2>
            <p>Each category can support ongoing operations, project delivery, modernization, troubleshooting, or specialized execution.</p>
        </div>
        <div class="talent-grid">
            <?php
            $talent = [
                ['DEV', 'Developers', 'Front-end and back-end professionals who build, enhance, integrate, and maintain business applications.', ['Application builds', 'API integrations', 'Feature delivery']],
                ['DBA', 'DBA / Architects', 'Database experts for data architecture, design, optimization, backup planning, security, reliability, and performance.', ['Database design', 'Performance tuning', 'Data reliability']],
                ['OPS', 'DevOps Engineers', 'Engineers who streamline development and operations through automation, CI/CD, release practices, and environment reliability.', ['CI/CD pipelines', 'Environment automation', 'Release support']],
                ['SEC', 'Cybersecurity Specialists', 'Security professionals who help assess risk, harden systems, monitor threats, improve controls, and protect business data.', ['Risk reduction', 'Security monitoring', 'Control hardening']],
                ['UX', 'UI / UX Designers', 'Design professionals who create intuitive interfaces, user journeys, wireframes, prototypes, and customer-friendly digital experiences.', ['Product flows', 'Interface design', 'User experience reviews']],
                ['CLD', 'Cloud Engineers', 'Cloud professionals skilled in deploying, managing, optimizing, and securing cloud infrastructure and services.', ['Cloud migration', 'Azure operations', 'Cost optimization']],
                ['QA', 'QA Testers', 'Quality professionals who validate application behavior, document defects, improve releases, and support stronger user acceptance.', ['Test plans', 'Regression testing', 'UAT support']],
                ['SUP', 'IT Support Specialists', 'End-user and operations support professionals who help maintain systems, resolve issues, and keep employees productive.', ['Help desk coverage', 'Escalation support', 'User productivity']],
                ['AUTO', 'Automation Specialists', 'Process automation professionals who reduce manual effort, connect systems, improve workflows, and increase operational efficiency.', ['Workflow automation', 'Process improvement', 'Manual task reduction']],
            ];
            foreach ($talent as $item): ?>
                <article class="talent-card">
                    <div class="talent-top">
                        <span class="service-icon"><?= e($item[0]) ?></span>
                        <h3><?= e($item[1]) ?></h3>
                    </div>
                    <p><?= e($item[2]) ?></p>
                    <div class="best-for">
                        <strong>Best for</strong>
                        <?php foreach ($item[3] as $tag): ?>
                            <span><?= e($tag) ?></span>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading compact">
            <p class="eyebrow">Specialties</p>
            <h2>Technology sourcing and Resource-as-a-Service support.</h2>
            <p>BTP PraaS also helps organizations make better buying and sourcing decisions across technology products, services, licensing, and resource needs.</p>
        </div>
        <div class="card-grid specialty-grid">
            <article class="service-card"><span class="service-icon">TP</span><h3>Technology Procurement</h3><p>Support for sourcing technology products and services with less confusion and better business alignment.</p><a href="/contact">Start Sourcing <span aria-hidden="true">&rarr;</span></a></article>
            <article class="service-card"><span class="service-icon">VS</span><h3>Vendor Sourcing</h3><p>Help comparing options, coordinating vendors, and reducing the friction of disconnected service relationships.</p><a href="/contact">Discuss Vendors <span aria-hidden="true">&rarr;</span></a></article>
            <article class="service-card"><span class="service-icon">SAAS</span><h3>SaaS & Licensing</h3><p>Guidance for software purchasing, licensing decisions, underused tools, and value optimization.</p><a href="/contact">Review Licensing <span aria-hidden="true">&rarr;</span></a></article>
            <article class="service-card"><span class="service-icon">IT</span><h3>IT Cost Optimization</h3><p>Practical support to reduce waste, clarify pricing, and align technology spend with priorities.</p><a href="/contact">Optimize Costs <span aria-hidden="true">&rarr;</span></a></article>
        </div>
    </div>
</section>
<section class="section section-dark">
    <div class="container two-column">
        <div>
            <p class="eyebrow">Your Gateway To Top Professionals</p>
            <h2>Discover expert PraaS Pros ready to elevate your projects and operations.</h2>
        </div>
        <div class="engagement-steps">
            <article><strong>1. Discover</strong><p>We clarify your business need, technology environment, resource gap, timeline, and success criteria.</p></article>
            <article><strong>2. Match</strong><p>BTP aligns the professional category, skill level, backup coverage, and scope to the engagement.</p></article>
            <article><strong>3. Operate</strong><p>Your PraaS Pro starts with team support, escalation access, and a continuity plan.</p></article>
            <article><strong>4. Scale</strong><p>Capacity can expand or contract as projects, support volume, budget, or priorities change.</p></article>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
