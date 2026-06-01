<?php
$pageTitle = 'BTP PraaS News | IT Staffing Insights';
$metaDescription = 'Discover BTP PraaS insights on staffing challenges, trends, productivity gaps, continuity, and flexible IT staffing solutions.';
$pagePath = '/news';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero news-hero">
    <div class="container narrow">
        <p class="eyebrow">News</p>
        <h1>Discover insights that matter.</h1>
        <p>Explore challenges, trends, and solutions shaping the future of IT staffing and innovation.</p>
        <div class="news-feature">
            <span>Featured Article</span>
            <strong>The cost of productivity gaps in contract staffing.</strong>
        </div>
    </div>
</section>
<section class="section news-controls-section">
    <div class="container">
        <div class="filter-bar" aria-label="News categories">
            <span class="active">All</span>
            <span>Staffing</span>
            <span>Trends</span>
            <span>Operations</span>
            <span>Cost Savings</span>
        </div>
    </div>
</section>
<section class="section">
    <div class="container news-grid">
        <article>
            <p class="eyebrow">Staffing</p>
            <h2>The cost of productivity gaps in contract staffing</h2>
            <p>Talent gaps can create business costs, missed deadlines, and delivery risk. Backup coverage helps reduce disruption and preserve momentum.</p>
            <a href="/contact">Read more</a>
        </article>
        <article>
            <p class="eyebrow">Trends</p>
            <h2>Why continuity is becoming a staffing priority</h2>
            <p>Teams need flexible professionals who can integrate quickly and operate with backup support when availability changes.</p>
            <a href="/about">Read more</a>
        </article>
        <article>
            <p class="eyebrow">Operations</p>
            <h2>How PraaS support helps complex tasks move forward</h2>
            <p>PraaS Pros can consult the BTP PraaS team for task-specific help, giving clients stronger support than a lone contractor model.</p>
            <a href="/services">Read more</a>
        </article>
    </div>
</section>
<section class="section newsletter-section">
    <div class="container newsletter-card">
        <div>
            <p class="eyebrow">Newsletter</p>
            <h2>Stay current on PraaS staffing and sourcing insights.</h2>
            <p>Get updates on staffing continuity, technology sourcing, Resource-as-a-Service, and practical ways to reduce operational friction.</p>
        </div>
        <form class="newsletter-form" action="/news" method="post">
            <label class="sr-only" for="newsletter-email">Email address</label>
            <input id="newsletter-email" name="email" type="email" placeholder="Business email" autocomplete="email">
            <!-- TODO: Connect newsletter signup to email marketing or CRM platform before production use. -->
            <button class="button button-primary" type="submit">Subscribe</button>
        </form>
    </div>
</section>
<section class="section news-timeline-section">
    <div class="container timeline">
        <div><span>All</span><p>Follow PraaS updates across staffing, trends, highlights, and operations.</p></div>
        <div><span>Subscribe</span><p>Join the newsletter to receive staffing insights and PraaS updates.</p></div>
        <div><span>Next</span><p>More articles can be added as PraaS publishes new guidance.</p></div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
