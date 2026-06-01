<?php
$pageTitle = 'BTP PraaS | Next Generation Staff Augmentation 2.0';
$metaDescription = 'BTP PraaS delivers Professional-as-a-Service staff augmentation, Resource-as-a-Service support, technology procurement guidance, and skilled IT professionals backed by backup coverage.';
$pagePath = '/';
require __DIR__ . '/includes/header.php';
?>
<section class="hero hero-home">
    <div class="hero-copy">
        <p class="eyebrow">Introducing PraaS (Professional-as-a-Service)</p>
        <h1>Next Generation Staffing Augmentation 2.0 with <span>Backup Support</span></h1>
        <p>Practical technology procurement and Resource-as-a-Service solutions for modern businesses, with skilled professionals backed by a team ready to step in seamlessly whenever needed.</p>
        <div class="actions">
            <a class="button button-primary" href="/contact">Get a PraaS Pro <span aria-hidden="true">&rarr;</span></a>
            <a class="button button-outline" href="/about">How It Works <span aria-hidden="true">&rarr;</span></a>
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
        <div class="hero-orbit"></div>
    </div>
</section>

<section class="section intro-band">
    <div class="container two-column">
        <div>
            <p class="eyebrow">BTP Innovations Ecosystem</p>
            <h2>Clearer sourcing, better resource alignment, and less operational friction.</h2>
        </div>
        <div>
            <p>BTP PraaS helps organizations access the technology products, services, and resources they need without adding unnecessary complexity to procurement, vendor management, or project execution.</p>
            <p>Whether a business is purchasing software, evaluating infrastructure options, sourcing technical resources, or planning a broader technology initiative, PraaS creates a clearer path from need to solution.</p>
        </div>
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
            <p class="eyebrow">Why Choose BTP PraaS?</p>
            <h2>Empowering your team with flexible talent.</h2>
            <p>Your partner for scalable staff augmentation, whether for ongoing operational needs or groundbreaking projects.</p>
            <a class="button button-secondary" href="/services">View All Services <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="card-grid">
            <?php
            $services = [
                ['Developers', 'Front-end and back-end professionals who build and maintain robust applications.', 'DEV'],
                ['DBA / Architects', 'Database experts for design, optimization, security, reliability, and performance.', 'DBA'],
                ['DevOps Engineers', 'Specialists who streamline development and operations for scalable workflows.', 'OPS'],
                ['Cybersecurity Specialists', 'Security pros who help protect systems, data, users, and business operations.', 'SEC'],
                ['UI/UX Designers', 'Creative professionals focused on intuitive interfaces and user-centered experiences.', 'UX'],
                ['Cloud Engineers', 'Cloud pros for deploying, managing, and optimizing cloud infrastructure.', 'CLD'],
                ['QA Testers', 'Quality professionals who test applications against business and technical standards.', 'QA'],
                ['Automation Specialists', 'Professionals who streamline processes and reduce manual effort.', 'AUTO'],
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
            <p class="eyebrow">Professional-as-a-Service</p>
            <h2>Flexible staffing tailored to your needs.</h2>
        </div>
        <div>
            <p>Gain access to top professionals backed by a dedicated team for smooth transitions, changing project demands, and task-specific support.</p>
            <p>Each PraaS engagement is designed to preserve continuity, adapt to your workflows, and provide the flexibility traditional staffing often lacks.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container feature-grid">
        <article>
            <img src="/assets/images/flex-staffing.png" alt="Flexible staffing illustration">
            <h3>Flexible Staffing</h3>
            <p>Scale up or down to meet changing project demands while tailoring skillsets to your unique requirements.</p>
        </article>
        <article>
            <img src="/assets/images/team-support.png" alt="Team support illustration">
            <h3>Proactive Team Support</h3>
            <p>Backup professionals, shared team communication, and task-specific support help reduce absence and transition risk.</p>
        </article>
        <article>
            <img src="/assets/images/cost-savings.png" alt="Cost savings illustration">
            <h3>Smart Cost Savings</h3>
            <p>Skip recruitment fees, reduce downtime costs, and avoid cost penalties from rigid staffing models.</p>
        </article>
    </div>
</section>

<section class="section muted">
    <div class="container onboarding-grid">
        <div class="section-heading">
            <p class="eyebrow">Seamless Onboarding</p>
            <h2>Move from staffing need to productive support faster.</h2>
            <p>PraaS is built to reduce the time, confusion, and handoff gaps that slow down traditional staffing and vendor relationships.</p>
        </div>
        <article><span>01</span><h3>Clarify the need</h3><p>Define the role, technology need, project scope, timeline, and operating expectations.</p></article>
        <article><span>02</span><h3>Match the team</h3><p>Align the primary professional, backup coverage, and BTP support resources to the work.</p></article>
        <article><span>03</span><h3>Start with continuity</h3><p>Begin the engagement with shared context, communication rhythm, and backup readiness.</p></article>
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
                <p>&quot;PraaS helped us meet tight deadlines without sacrificing quality, and the proactive support model gave us confidence during absences.&quot;</p>
                <cite>Jessica M., IT Operations Manager</cite>
            </blockquote>
            <blockquote>
                <img src="/assets/images/testimonial-2.png" alt="Client testimonial profile">
                <p>&quot;Knowing that our PraaS Pro can call home for expert assistance gave our team a stronger support structure.&quot;</p>
                <cite>David K., Software Development Lead</cite>
            </blockquote>
            <blockquote>
                <img src="/assets/images/testimonial-3.png" alt="Client testimonial profile">
                <p>&quot;The backup professional support kept productivity moving through transitions, vacations, and schedule changes.&quot;</p>
                <cite>Monica L., Technology Director</cite>
            </blockquote>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
