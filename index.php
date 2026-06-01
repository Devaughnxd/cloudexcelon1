<?php
$pageTitle = 'BTP PraaS | Professional-as-a-Service for Modern IT Teams';
$metaDescription = 'Scale instantly with experienced IT professionals backed by a dedicated support team. BTP PraaS delivers Staff Augmentation 2.0 with primary and backup professionals.';
$pagePath = '/';
require __DIR__ . '/includes/header.php';
?>
<section class="hero hero-home">
    <div class="hero-copy">
        <h1>Professional-as-a-Service for Modern <span>IT Teams</span></h1>
        <p>Scale instantly with experienced IT professionals backed by a dedicated support team.</p>
        <div class="actions">
            <a class="button button-primary" href="/contact">Schedule a Consultation <span aria-hidden="true">&rarr;</span></a>
            <a class="button button-outline" href="/services">Explore Services <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="hero-benefits" aria-label="Key PraaS benefits">
            <span><b>Team</b>Continuity</span>
            <span><b>Flexible</b>Scaling</span>
            <span><b>Cost</b>Efficiency</span>
            <span><b>Enterprise</b>Expertise</span>
        </div>
    </div>
    <div class="hero-visual" aria-hidden="true">
        <div class="cloud-shape"></div>
        <div class="diagonal blue"></div>
        <div class="diagonal red"></div>
    </div>
</section>

<section class="stats-band">
    <div class="container stats-card">
        <div><strong>500+</strong><span>IT Professionals</span></div>
        <div><strong>200+</strong><span>Clients Served</span></div>
        <div><strong>99.9%</strong><span>Satisfaction Rate</span></div>
        <div><strong>24/7</strong><span>Support</span></div>
    </div>
</section>

<section class="section services-preview">
    <div class="container split-intro">
        <div class="section-heading">
            <p class="eyebrow">Our Services</p>
            <h2>End-to-End IT Staffing Solutions</h2>
            <p>Comprehensive professional services designed to optimize operations, enhance security, and drive business growth.</p>
            <a class="button button-secondary" href="/services">View All Services <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="card-grid">
            <?php
            $services = [
                ['Cloud Engineering', 'Azure cloud solutions built for performance, security, and scalability.', 'CE'],
                ['Microsoft 365', 'Collaboration and productivity professionals for modern workplace teams.', 'M365'],
                ['SharePoint Solutions', 'SharePoint experts for better document management, workflow, and collaboration.', 'S'],
                ['Power Platform Automation', 'Workflow automation and business apps that drive measurable efficiency.', 'PP'],
                ['Cybersecurity', 'Security professionals for monitoring, controls, hardening, and response support.', 'CS'],
                ['Help Desk & IT Support', '24/7 support coverage to keep business operations running smoothly.', 'HD'],
                ['Infrastructure & Networking', 'Reliable infrastructure and network expertise that scales with demand.', 'IN'],
                ['Project Delivery', 'Project professionals who help deliver IT initiatives on time and on budget.', 'PD'],
            ];
            foreach ($services as $service): ?>
                <article class="service-card">
                    <span class="service-icon"><?= e($service[2]) ?></span>
                    <h3><?= e($service[0]) ?></h3>
                    <p><?= e($service[1]) ?></p>
                    <a href="/services">Learn More <span aria-hidden="true">&rarr;</span></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container two-column">
        <div>
            <p class="eyebrow">Staff Augmentation 2.0</p>
            <h2>One professional in front. A full team behind them.</h2>
        </div>
        <div>
            <p>BTP PraaS modernizes staff augmentation with a Professional-as-a-Service model. Each engagement is built around a skilled primary professional, a trained backup professional, and team support that keeps work moving when availability changes.</p>
            <p>The result is continuity, flexibility, and lower operating cost without sacrificing capability.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container feature-grid">
        <article>
            <img src="/assets/images/flex-staffing.png" alt="Flexible staffing illustration">
            <h3>Flexible Scaling</h3>
            <p>Add or reduce professional capacity as project demand changes. PraaS helps you scale without long hiring cycles or heavy fixed overhead.</p>
        </article>
        <article>
            <img src="/assets/images/team-support.png" alt="Team support illustration">
            <h3>Team Continuity</h3>
            <p>Backup professionals and shared team knowledge reduce the risk of delays, disruption, and single-person dependency.</p>
        </article>
        <article>
            <img src="/assets/images/cost-savings.png" alt="Cost savings illustration">
            <h3>Cost Savings</h3>
            <p>Access qualified talent on demand while reducing recruiting, onboarding, benefits, and idle-capacity costs.</p>
        </article>
    </div>
</section>

<section class="section testimonials">
    <div class="container">
        <div class="section-heading compact">
            <p class="eyebrow">Testimonials</p>
            <h2>What clients say about PraaS</h2>
        </div>
        <div class="testimonial-grid">
            <blockquote>
                <img src="/assets/images/testimonial-1.png" alt="Client testimonial profile">
                <p>&quot;PraaS gave us the extra IT talent we needed without adding another full-time role. The backup model made the service feel reliable from day one.&quot;</p>
                <cite>Technology Operations Leader</cite>
            </blockquote>
            <blockquote>
                <img src="/assets/images/testimonial-2.png" alt="Client testimonial profile">
                <p>&quot;The Professional-as-a-Service model helped us keep projects moving through demand spikes and scheduling changes.&quot;</p>
                <cite>Business Systems Director</cite>
            </blockquote>
            <blockquote>
                <img src="/assets/images/testimonial-3.png" alt="Client testimonial profile">
                <p>&quot;BTP PraaS gave us scalable expertise, a clear support structure, and a better cost profile than traditional hiring.&quot;</p>
                <cite>Executive Sponsor</cite>
            </blockquote>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
