<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$outputRoot = $root . DIRECTORY_SEPARATOR . 'sites';
$logoRoot = $root . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'brand-logos';

$brands = [
    'praas' => [
        'name' => 'BTP PraaS',
        'short' => 'PraaS',
        'domain' => 'praas.cloudexcelon.com',
        'accent' => '#2AA8FF',
        'accent2' => '#7C3AED',
        'visual' => ['Procurement map', 'Vendor fit', 'License clarity', 'Sourcing path'],
        'cta' => 'Schedule a Sourcing Consultation',
        'tagline' => 'Procurement and sourcing support that simplifies technology acquisition through one coordinated path.',
        'headline' => 'Technology procurement and sourcing support without vendor noise.',
        'summary' => 'BTP PraaS helps organizations source technology products, services, licenses, vendors, and technical resources through one coordinated advisory-led path.',
        'audience' => 'Operations, IT, finance, and business leaders who need better buying decisions, cleaner vendor coordination, and a practical path from need to solution.',
        'problems' => ['Fragmented vendor conversations', 'Unclear software and infrastructure pricing', 'Disconnected procurement and delivery handoffs', 'Underused tools and overlapping services'],
        'capabilities' => ['Technology procurement', 'Vendor sourcing', 'SaaS and licensing review', 'IT cost optimization', 'Partner ecosystem access', 'Resource-as-a-Service alignment'],
        'deliverables' => ['Requirement and budget summary', 'Vendor and option comparison', 'Pricing and feature review', 'Recommended sourcing path', 'Implementation handoff notes'],
        'process' => ['Define the need', 'Map viable providers', 'Compare price and fit', 'Coordinate selection', 'Support the handoff'],
        'outcomes' => ['Faster technology acquisition', 'Better cost visibility', 'Reduced vendor management burden', 'Clearer accountability'],
        'related' => ['techadvisors', 'cloudexcelon', 'managesp'],
    ],
    'techadvisors' => [
        'name' => 'BTP TechAdvisors',
        'short' => 'TechAdvisors',
        'domain' => 'techadvisors.cloudexcelon.com',
        'accent' => '#0067F0',
        'accent2' => '#14B8A6',
        'visual' => ['Decision brief', 'Roadmap', 'Vendor scorecard', 'Executive alignment'],
        'cta' => 'Talk to an Advisor',
        'tagline' => 'Strategic advisory and client engagement for complex technology decisions.',
        'headline' => 'Vendor-neutral guidance for decisions that carry real business risk.',
        'summary' => 'BTP TechAdvisors helps leaders evaluate technology options, clarify tradeoffs, prioritize roadmaps, and move from strategy to accountable execution.',
        'audience' => 'Executives, IT leaders, operations teams, and finance stakeholders making decisions across cloud, cybersecurity, AI, managed IT, communications, and software platforms.',
        'problems' => ['Too many competing vendor claims', 'Technology roadmaps without execution clarity', 'Rising spend across overlapping tools', 'Unclear implementation risk'],
        'capabilities' => ['Technology strategy', 'Vendor-neutral advisory', 'Digital transformation planning', 'IT roadmap development', 'Solution evaluation', 'Cost optimization'],
        'deliverables' => ['Discovery brief', 'Options and tradeoff analysis', 'Roadmap recommendations', 'Vendor-neutral scorecard', 'Execution alignment plan'],
        'process' => ['Listen and discover', 'Identify the gaps', 'Evaluate options', 'Call in the right expert', 'Deliver together'],
        'outcomes' => ['Clearer decisions', 'Reduced technology risk', 'Better executive alignment', 'Practical next steps'],
        'related' => ['praas', 'securiscope', 'cloudexcelon'],
    ],
    'securiscope' => [
        'name' => 'BTP SecuriSCOPE',
        'short' => 'SecuriSCOPE',
        'domain' => 'securiscope.cloudexcelon.com',
        'accent' => '#FF3B30',
        'accent2' => '#7C3AED',
        'visual' => ['Risk exposure', 'Controls', 'Compliance', 'Resilience'],
        'cta' => 'Start Your Assessment',
        'tagline' => 'Cybersecurity strategy, protection, compliance, and resilience for enterprise environments.',
        'headline' => 'Security strategy, visibility, and risk reduction for modern environments.',
        'summary' => 'BTP SecuriSCOPE helps organizations assess exposure, prioritize cybersecurity improvements, implement protection, and strengthen resilience across users, cloud, endpoints, and applications.',
        'audience' => 'Organizations that need stronger security posture, compliance readiness, managed detection, vulnerability visibility, and practical guidance before buying more tools.',
        'problems' => ['Limited visibility across cloud and endpoints', 'Compliance pressure without a clear roadmap', 'Security tools that are not fully operationalized', 'Unprioritized vulnerabilities and threat exposure'],
        'capabilities' => ['Cybersecurity strategy', 'Risk assessment', 'Managed security', 'MDR and SIEM guidance', 'Cloud security', 'Vulnerability management', 'Compliance readiness'],
        'deliverables' => ['Security posture summary', 'Risk and gap register', 'Prioritized remediation roadmap', 'Control and tooling recommendations', 'Managed security transition plan'],
        'process' => ['Assess risk', 'Prioritize exposure', 'Select controls', 'Implement protection', 'Review resilience'],
        'outcomes' => ['Reduced risk exposure', 'Clearer compliance readiness', 'Stronger monitoring posture', 'More resilient operations'],
        'related' => ['cloudexcelon', 'managesp', 'datastaisis'],
    ],
    'managesp' => [
        'name' => 'BTP ManageSP',
        'short' => 'ManageSP',
        'domain' => 'managesp.cloudexcelon.com',
        'accent' => '#2AA8FF',
        'accent2' => '#10B981',
        'visual' => ['Support queue', 'Operations', 'Escalation', 'Lifecycle'],
        'cta' => 'Request Support',
        'tagline' => 'Managed IT services that keep operations supported after deployment.',
        'headline' => 'Managed IT support that keeps business technology stable after launch.',
        'summary' => 'BTP ManageSP provides operational support, infrastructure management, cloud operations, end-user support, vendor coordination, and lifecycle management for business technology environments.',
        'audience' => 'Organizations with limited internal IT capacity, fragmented support providers, growing cloud operations, or systems that need consistent management after deployment.',
        'problems' => ['Inconsistent support coverage', 'Unclear ownership after projects go live', 'Too many vendors managing separate pieces', 'Reactive operations instead of proactive maintenance'],
        'capabilities' => ['Managed IT services', 'IT operations', 'Infrastructure support', 'Cloud operations', 'End-user support', 'Vendor coordination', 'Technology management'],
        'deliverables' => ['Support model definition', 'Operations coverage plan', 'Vendor coordination map', 'Escalation path', 'Lifecycle improvement backlog'],
        'process' => ['Review environment', 'Define support needs', 'Stabilize operations', 'Coordinate vendors', 'Improve continuously'],
        'outcomes' => ['More reliable operations', 'Faster issue routing', 'Clearer ownership', 'Less operational drag'],
        'related' => ['cloudexcelon', 'securiscope', 'praas'],
    ],
    'cloudexcelon' => [
        'name' => 'BTP CloudEXCELON',
        'short' => 'CloudEXCELON',
        'domain' => 'dev.cloudexcelon.com',
        'accent' => '#2AA8FF',
        'accent2' => '#0067F0',
        'visual' => ['Architecture', 'Migration', 'Optimization', 'CloudOps'],
        'cta' => 'Discuss Your Cloud Roadmap',
        'tagline' => 'Cloud architecture and infrastructure built for scalable enterprise environments.',
        'headline' => 'Cloud architecture built for scale, resilience, and operational clarity.',
        'summary' => 'BTP CloudEXCELON helps organizations plan, migrate, modernize, optimize, and manage cloud environments across Azure, AWS, Google Cloud, hybrid infrastructure, and operational platforms.',
        'audience' => 'IT and business teams facing cloud cost pressure, migration uncertainty, architecture gaps, security concerns, or operational complexity across multi-cloud and hybrid environments.',
        'problems' => ['Rising cloud costs', 'Unclear architecture decisions', 'Migration paths without operational planning', 'Performance, security, and resilience gaps'],
        'capabilities' => ['Cloud strategy', 'Cloud migration', 'Cloud optimization', 'Cloud infrastructure', 'Azure advisory', 'AWS advisory', 'Google Cloud advisory', 'Cloud operations'],
        'deliverables' => ['Cloud readiness review', 'Target architecture', 'Migration and modernization roadmap', 'Cost optimization recommendations', 'Operations transition plan'],
        'process' => ['Assess the environment', 'Design the architecture', 'Plan the migration', 'Deploy and validate', 'Optimize operations'],
        'outcomes' => ['Scalable cloud foundations', 'Better cost control', 'Improved resilience', 'Cleaner operations'],
        'related' => ['securiscope', 'managesp', 'datastaisis'],
    ],
    'codeignite' => [
        'name' => 'BTP CodeIGNITE',
        'short' => 'CodeIGNITE',
        'domain' => 'codeignite.cloudexcelon.com',
        'accent' => '#FF3B30',
        'accent2' => '#F59E0B',
        'visual' => ['Product scope', 'APIs', 'Platform build', 'Release path'],
        'cta' => 'Discuss Your Project',
        'tagline' => 'Software development and application engineering for platform innovation.',
        'headline' => 'Software engineering for applications, platforms, workflows, and modernization.',
        'summary' => 'BTP CodeIGNITE helps organizations design, build, modernize, integrate, and improve software that supports operations, customer experience, automation, and platform growth.',
        'audience' => 'Businesses with workflows that outgrew spreadsheets, legacy platforms that slow teams down, integration gaps between systems, or product ideas that need disciplined engineering.',
        'problems' => ['Manual workflows that slow operations', 'Legacy applications that are hard to change', 'Disconnected systems and APIs', 'Ideas without a practical build plan'],
        'capabilities' => ['Software development', 'Web applications', 'Mobile applications', 'Enterprise platforms', 'API integration', 'Automation', 'Blockchain-enabled solutions'],
        'deliverables' => ['Product discovery brief', 'Technical architecture', 'UX and workflow plan', 'Development roadmap', 'Deployment and improvement backlog'],
        'process' => ['Clarify the workflow', 'Design the solution', 'Build the platform', 'Integrate systems', 'Improve after launch'],
        'outcomes' => ['Useful business software', 'More efficient workflows', 'Stronger platform foundations', 'Faster iteration'],
        'related' => ['datastaisis', 'cloudexcelon', 'techadvisors'],
    ],
    'datastaisis' => [
        'name' => 'BTP DatastAIsis',
        'short' => 'DatastAIsis',
        'domain' => 'datastaisis.cloudexcelon.com',
        'accent' => '#2AA8FF',
        'accent2' => '#8B5CF6',
        'visual' => ['Data sources', 'Automation', 'Dashboards', 'AI roadmap'],
        'cta' => 'Plan an AI and Data Session',
        'tagline' => 'AI, automation, analytics, and operational intelligence for business outcomes.',
        'headline' => 'AI, automation, and analytics that turn scattered work into operational intelligence.',
        'summary' => 'BTP DatastAIsis helps organizations structure data, automate repetitive workflows, build analytics, and apply AI to improve decisions and business outcomes.',
        'audience' => 'Teams with scattered reporting, manual processes, inconsistent data, limited visibility, or AI interest that needs practical use cases and controlled implementation.',
        'problems' => ['Data spread across disconnected systems', 'Manual reporting and repetitive workflows', 'AI ideas without business alignment', 'Limited operational visibility'],
        'capabilities' => ['AI solutions', 'Data analytics', 'Workflow automation', 'Business intelligence', 'Workflow optimization', 'Data strategy', 'Operational insights'],
        'deliverables' => ['Data and automation opportunity map', 'Use-case prioritization', 'Dashboard or reporting plan', 'Automation workflow design', 'AI implementation roadmap'],
        'process' => ['Identify use cases', 'Map data sources', 'Prioritize automation', 'Build insight workflows', 'Measure outcomes'],
        'outcomes' => ['Better decisions', 'Less repetitive work', 'Clearer reporting', 'Practical AI adoption'],
        'related' => ['codeignite', 'cloudexcelon', 'securiscope'],
    ],
];

function write_file(string $path, string $content): void
{
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents($path, $content);
}

function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function rrmdir(string $path): void
{
    if (!is_dir($path)) {
        return;
    }
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($it as $item) {
        $item->isDir() ? @rmdir($item->getPathname()) : @unlink($item->getPathname());
    }
    @rmdir($path);
}

rrmdir($outputRoot);

foreach ($brands as $slug => $brand) {
    $siteRoot = $outputRoot . DIRECTORY_SEPARATOR . $slug;
    write_file($siteRoot . '/includes/site.php', "<?php\nreturn " . var_export($brand, true) . ";\n");
    write_file($siteRoot . '/includes/analytics.php', analyticsInclude());
    write_file($siteRoot . '/includes/header.php', headerInclude());
    write_file($siteRoot . '/includes/navigation.php', navigationInclude());
    write_file($siteRoot . '/includes/footer.php', footerInclude());
    write_file($siteRoot . '/assets/css/style.css', css($brand));
    write_file($siteRoot . '/assets/js/main.js', js());
    write_file($siteRoot . '/assets/images/hero-visual.svg', visualSvg($brand, 'hero'));
    write_file($siteRoot . '/assets/images/about-visual.svg', visualSvg($brand, 'about'));
    write_file($siteRoot . '/assets/images/services-visual.svg', visualSvg($brand, 'services'));
    write_file($siteRoot . '/assets/images/contact-visual.svg', visualSvg($brand, 'contact'));
    write_file($siteRoot . '/assets/images/news-visual.svg', visualSvg($brand, 'news'));
    write_file($siteRoot . '/assets/images/proof-visual.svg', visualSvg($brand, 'proof'));
    write_file($siteRoot . '/assets/images/process-visual.svg', visualSvg($brand, 'process'));
    write_file($siteRoot . '/assets/images/trust-visual.svg', visualSvg($brand, 'trust'));

    foreach (['png', 'svg'] as $ext) {
        $logo = $logoRoot . DIRECTORY_SEPARATOR . $slug . '.' . $ext;
        if (is_file($logo)) {
            if (!is_dir($siteRoot . '/assets/images')) {
                mkdir($siteRoot . '/assets/images', 0777, true);
            }
            copy($logo, $siteRoot . '/assets/images/logo.' . $ext);
        }
    }

    foreach (['index' => 'Home', 'about' => 'About', 'services' => 'Services', 'news' => 'News', 'contact' => 'Contact'] as $page => $label) {
        $file = $page === 'index' ? 'index.php' : $page . '.php';
        write_file($siteRoot . '/' . $file, page($slug, $brand, $page, $brands));
        if ($page !== 'index') {
            write_file($siteRoot . '/' . $page . '/index.php', "<?php\nrequire __DIR__ . '/../$file';\n");
        }
    }

    write_file($siteRoot . '/robots.txt', robots($brand));
    write_file($siteRoot . '/sitemap.xml', sitemap($brand));
    write_file($siteRoot . '/.htaccess', htaccess());
    write_file($siteRoot . '/web.config', webConfig());
    write_file($siteRoot . '/README.md', readme($slug, $brand));
    write_file($siteRoot . '/DEPLOYMENT.md', deployment($slug, $brand));
    write_file($siteRoot . '/docs/website-audit.md', websiteAudit($slug, $brand));
    write_file($siteRoot . '/docs/competitive-benchmark.md', competitiveBenchmark($slug, $brand));
    write_file($siteRoot . '/docs/qos-checklist.md', qosChecklist($slug, $brand));
    write_file($siteRoot . '/docs/content-source-policy.md', contentSourcePolicy($slug, $brand));
}

write_file($outputRoot . DIRECTORY_SEPARATOR . 'DESIGN_SYSTEM.md', designSystem());
write_file($outputRoot . DIRECTORY_SEPARATOR . 'README.md', masterReadme($brands));

function page(string $slug, array $brand, string $page, array $brands): string
{
    $titles = [
        'index' => $brand['name'] . ' | ' . $brand['headline'],
        'about' => 'About ' . $brand['name'] . ' | BTP Innovations',
        'services' => $brand['name'] . ' Services | ' . $brand['tagline'],
        'news' => $brand['name'] . ' Insights | BTP Innovations',
        'contact' => 'Contact ' . $brand['name'] . ' | Start a Conversation',
    ];
    $descriptions = [
        'index' => $brand['summary'],
        'about' => $brand['name'] . ' is part of the BTP Innovations ecosystem, helping clients solve technology problems through advisory, execution, and lifecycle support.',
        'services' => 'Explore ' . $brand['name'] . ' capabilities, deliverables, engagement process, and business outcomes.',
        'news' => 'Read practical ' . $brand['short'] . ' insights for business and technology leaders evaluating service decisions.',
        'contact' => 'Contact ' . $brand['name'] . ' to discuss business needs, service questions, assessments, sourcing, support, or project planning.',
    ];
    $body = match ($page) {
        'index' => homePage($slug, $brand, $brands),
        'about' => aboutPage($brand, $brands),
        'services' => servicesPage($brand, $brands),
        'news' => newsPage($brand),
        'contact' => contactPage($brand, $brands),
        default => '',
    };
    $body = previewSafeLinks($body);
    return "<?php\n\$pageTitle = " . var_export($titles[$page], true) . ";\n\$metaDescription = " . var_export($descriptions[$page], true) . ";\n\$pagePath = " . var_export($page === 'index' ? '/' : '/' . $page, true) . ";\nrequire __DIR__ . '/includes/header.php';\n?>\n" . $body . "\n<?php require __DIR__ . '/includes/footer.php'; ?>\n";
}

function previewSafeLinks(string $html): string
{
    $routes = [
        '/contact.php' => 'contact.php',
        '/services' => 'services',
        '/contact' => 'contact',
        '/about' => 'about',
        '/news' => 'news',
        '/' => '',
    ];
    foreach ($routes as $literal => $route) {
        $dynamic = "<?= e(site_url(" . var_export($route, true) . ")) ?>";
        $html = str_replace('href="' . $literal . '"', 'href="' . $dynamic . '"', $html);
        $html = str_replace('action="' . $literal . '"', 'action="' . $dynamic . '"', $html);
    }
    return $html;
}

function homePage(string $slug, array $brand, array $brands): string
{
    return hero($brand, $brand['cta'], '/contact') . '
<section class="section service-strip"><div class="container"><div class="section-heading centered"><p class="eyebrow">Core Solutions</p><h2>' . h(serviceIntroHeadline($brand)) . '</h2><p>' . h($brand['tagline']) . '</p></div><div class="card-grid service-grid">' . cardList(array_slice($brand['capabilities'], 0, 6), $brand) . '</div></div></section>
<section class="section feature-dark"><div class="container feature-layout"><div class="feature-copy"><p class="eyebrow">Why Choose ' . h($brand['short']) . '</p><h2>' . h(strengthHeadline($brand)) . '</h2><p>' . h($brand['audience']) . '</p><div class="benefit-grid dark-benefits">' . benefitList($brand) . '</div></div>' . imageBlock('proof-visual.svg', $brand['short'] . ' service workflow visualization', true) . '</div></section>
<section class="section process-light"><div class="container"><div class="section-heading centered"><p class="eyebrow">Proven Process</p><h2>A practical path from need to measurable next step.</h2></div><div class="timeline">' . timelineList($brand['process']) . '</div></div></section>
<section class="section industry-band"><div class="container visual-split reverse">' . imageBlock('process-visual.svg', $brand['short'] . ' industry workflow visual', true) . '<div><p class="eyebrow">Where It Fits</p><h2>' . h(industryHeadline($brand)) . '</h2><p>' . h(whyMatters($brand)) . '</p><div class="pill-list">' . industryList($brand) . '</div></div></div></section>
<section class="trust-wall"><div class="container"><div class="section-heading"><p class="eyebrow">Why Companies Choose BTP</p><h2>Trust built through clarity, structure, and accountable service delivery.</h2></div><div class="trust-grid">' . trustBadges($brand) . '</div></div></section>
' . relatedSolutions($brand, $brands, true) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Step</p><h2>' . h(finalCtaHeadline($brand)) . '</h2><p>' . h($brand['summary']) . '</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . ' <span aria-hidden="true">&rarr;</span></a></div></section>';
}

function aboutPage(array $brand, array $brands): string
{
    return pageHero($brand, 'About ' . $brand['name'], $brand['summary'], 'about-visual.svg', 'Who We Are') . '
<section class="section"><div class="container"><div class="belief-grid"><article><p class="eyebrow">Mission</p><h2>Make complex technology decisions easier to buy, launch, support, and improve.</h2><p>' . h($brand['name']) . ' operates inside the BTP Innovations ecosystem, where advisory, sourcing, engineering, implementation, managed services, and optimization connect through one coordinated delivery model.</p></article><article><p class="eyebrow">Vision</p><h2>One BTP ecosystem for the full technology journey.</h2><p>Clients should not have to stitch together disconnected vendors just to define scope, compare options, execute work, and keep systems supported after launch.</p></article><article><p class="eyebrow">Values</p><h2>Clarity, accountability, and practical execution.</h2><p>BTP focuses on fit, transparency, stakeholder alignment, measurable outcomes, and recommendations that can move beyond a slide deck.</p></article></div></div></section>
<section class="section muted"><div class="container visual-split reverse">' . imageBlock('trust-visual.svg', $brand['short'] . ' ecosystem visual', true) . '<div><p class="eyebrow">Why Clients Choose BTP</p><h2>Advisory-led, execution-ready, and lifecycle aware.</h2><p>' . h($brand['audience']) . '</p><div class="benefit-grid">' . aboutCards() . '</div></div></div></section>
<section class="section"><div class="container"><div class="section-heading centered"><p class="eyebrow">How We Work</p><h2>Designed around the buyer journey from learning to proposal.</h2></div><div class="journey-grid">' . journeyList() . '</div></div></section>
' . relatedSolutions($brand, $brands, true) . '
<section class="trust-wall"><div class="container"><div class="section-heading"><p class="eyebrow">Trust Signals</p><h2>Service confidence without inflated claims.</h2></div><div class="trust-grid">' . trustBadges($brand) . '</div></div></section>
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Talk With BTP</p><h2>Get clear guidance before the next decision becomes expensive.</h2><p>' . h($brand['tagline']) . '</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function servicesPage(array $brand, array $brands): string
{
    return pageHero($brand, $brand['short'] . ' Services', $brand['tagline'], 'services-visual.svg', 'Services') . '
<section class="section"><div class="container visual-split"><div><p class="eyebrow">Service Overview</p><h2>' . h($brand['headline']) . '</h2><p>' . h($brand['summary']) . '</p><p><strong>Who it helps:</strong> ' . h($brand['audience']) . '</p></div>' . imageBlock('proof-visual.svg', $brand['short'] . ' service dashboard visual', true) . '</div></section>
<section class="section muted"><div class="container"><div class="section-heading centered"><p class="eyebrow">What Customers Can Buy</p><h2>Clear service options with outcomes and deliverables.</h2></div><div class="service-detail-grid">' . serviceDetailList($brand) . '</div></div></section>
<section class="section process-band"><div class="container"><div class="section-heading centered"><p class="eyebrow">Engagement Process</p><h2>Discover, plan, implement, optimize, and support.</h2></div><div class="timeline timeline-dark">' . timelineList($brand['process']) . '</div></div></section>
<section class="section color-band"><div class="container visual-split reverse">' . imageBlock('process-visual.svg', $brand['short'] . ' industry applications visual', true) . '<div><p class="eyebrow">Why It Matters</p><h2>Technology work gets expensive when scope, ownership, and next steps stay unclear.</h2><p>' . h(whyMatters($brand)) . '</p><div class="pill-list">' . industryList($brand) . '</div></div></div></section>
' . faqSection($brand) . relatedSolutions($brand, $brands, true) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Steps</p><h2>Discuss the service path that fits your environment.</h2><p>Bring your current goals, constraints, vendors, systems, or project questions. BTP will help clarify the path forward.</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function newsPage(array $brand): string
{
    return pageHero($brand, $brand['short'] . ' Insights', 'Short updates and decision guides for leaders evaluating ' . strtolower($brand['tagline']), 'news-visual.svg', 'Insights') . '
<section class="section"><div class="container"><div class="filter-row"><span>Strategy</span><span>Operations</span><span>Risk</span><span>Optimization</span></div><article class="featured-article"><div><p class="eyebrow">Featured Article</p><h2>' . h(featuredNewsTitle($brand)) . '</h2><p>' . h(featuredNewsCopy($brand)) . '</p><a class="button button-secondary" href="/contact">Request a briefing</a></div>' . imageBlock('proof-visual.svg', $brand['short'] . ' featured insight visual', true) . '</article><div class="news-grid">' . newsCards($brand) . '</div></div></section>
<section class="section color-band"><div class="container newsletter-card"><div><p class="eyebrow">Newsletter</p><h2>Get practical BTP decision notes.</h2><p>Use the contact form to request updates tied to your service area, industry, and current technology priorities.</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function contactPage(array $brand, array $brands): string
{
    return pageHero($brand, 'Contact ' . $brand['name'], 'Start with one business inquiry. BTP will route the conversation to the right advisory, sourcing, engineering, or support path.', 'contact-visual.svg', 'Contact') . '
<section class="section contact-section"><div class="container contact-grid"><form id="btp-lead-form" class="contact-form" method="post" action="/contact.php"><input type="hidden" name="brand" value="' . h($brand['name']) . '"><label for="full_name">Name<input id="full_name" name="full_name" autocomplete="name" required></label><label for="company_name">Company<input id="company_name" name="company_name" autocomplete="organization"></label><label for="email">Email<input id="email" type="email" name="email" autocomplete="email" required></label><label for="phone">Phone<input id="phone" name="phone" autocomplete="tel"></label><label class="full" for="message">Message<textarea id="message" name="message" rows="5" required></textarea></label><!-- TODO: Connect this form to Microsoft Forms, Power Automate, Dynamics 365, HubSpot, Salesforce, or SMTP/PHP mail when production routing is selected. --><button class="button button-primary full" type="submit">' . h($brand['cta']) . '</button></form><aside class="contact-panel"><h2>Business Inquiries</h2><p>' . h($brand['tagline']) . '</p><p><strong>Email</strong><br>info@btpinnovations.com</p><p><strong>Phone</strong><br>(800) 781-6632</p><p><strong>Address</strong><br>276 5th Avenue Suite 704<br>New York, NY 10001</p><p><strong>Business Hours</strong><br>Monday-Friday, 8:30 AM-6:00 PM Eastern</p>' . imageBlock('contact-visual.svg', $brand['short'] . ' contact visual', true) . '</aside></div></section>
<section class="section muted"><div class="container"><div class="section-heading centered"><p class="eyebrow">Why Contact Us</p><h2>Use the form when a decision, project, vendor, or support need needs structure.</h2></div><div class="card-grid compact">' . contactReasonCards($brand) . '</div></div></section>
' . relatedSolutions($brand, $brands, true) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Response Expectations</p><h2>Send the inquiry and BTP will route it to the right path.</h2><p>Use the form for service questions, assessments, sourcing, projects, or operational support needs. A BTP representative can use your message to prepare a focused discovery conversation.</p></div><a class="button button-primary" href="mailto:info@btpinnovations.com">Email BTP</a></div></section>';
}

function hero(array $brand, string $cta, string $href): string
{
    return '<section class="hero hero-home"><div class="hero-copy"><p class="eyebrow">' . h(heroKicker($brand)) . '</p><h1>' . h($brand['headline']) . '</h1><p>' . h($brand['summary']) . '</p><div class="actions"><a class="button button-primary" href="' . h($href) . '">' . h($cta) . ' <span aria-hidden="true">&rarr;</span></a><a class="button button-outline hero-outline" href="/services">Our Services <span aria-hidden="true">&rarr;</span></a></div><div class="hero-proof">' . heroProof($brand) . '</div></div><div class="hero-visual">' . imageBlock('hero-visual.svg', $brand['short'] . ' enterprise service visual') . '</div></section>';
}

function pageHero(array $brand, string $title, string $copy, string $visual, string $kicker): string
{
    return '<section class="page-hero"><div class="container page-hero-grid"><div><p class="eyebrow">' . h($kicker) . '</p><h1>' . h($title) . '</h1><p>' . h($copy) . '</p><div class="actions"><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a><a class="button button-outline" href="/services">View Services</a></div></div>' . imageBlock($visual, $brand['short'] . ' page hero visual') . '</div></section>';
}

function imageBlock(string $file, string $alt, bool $lazy = false): string
{
    $loading = $lazy ? ' loading="lazy"' : '';
    return '<figure class="visual-card"><img src="<?= e(asset(\'images/' . h($file) . '\')) ?>" alt="' . h($alt) . '"' . $loading . '></figure>';
}

function cardList(array $items, array $brand, string $kind = 'capability'): string
{
    return implode('', array_map(fn($x) => '<article class="service-card"><span class="service-icon">' . h(iconCode($x)) . '</span><h3>' . h($x) . '</h3><p>' . h(itemDescription($brand, $x, $kind)) . '</p></article>', $items));
}

function detailList(array $capabilities, array $deliverables, array $brand): string
{
    $out = '';
    foreach ($capabilities as $i => $capability) {
        $deliverable = $deliverables[$i % count($deliverables)];
        $out .= '<article class="detail-card"><span class="service-icon">' . h(iconCode($capability)) . '</span><h3>' . h($capability) . '</h3><p>' . h($deliverable) . '</p></article>';
    }
    return $out;
}

function processList(array $items, array $brand): string
{
    $html = '';
    foreach ($items as $i => $item) {
        $html .= '<article><span>0' . ($i + 1) . '</span><h3>' . h($item) . '</h3><p>' . h(shortProcessDescription($item)) . '</p></article>';
    }
    return $html;
}

function proofList(array $items): string
{
    return implode('', array_map(fn($x) => '<article><strong>' . h($x) . '</strong><span>Outcome-focused support.</span></article>', $items));
}

function iconCode(string $label): string
{
    $words = preg_split('/[^A-Za-z0-9]+/', $label, -1, PREG_SPLIT_NO_EMPTY);
    $code = '';
    foreach ($words as $word) {
        $code .= strtoupper(substr($word, 0, 1));
    }
    return substr($code ?: strtoupper($label), 0, 3);
}

function heroKicker(array $brand): string
{
    $map = [
        'PraaS' => 'Procurement. Technology. Results.',
        'TechAdvisors' => 'Strategy. Roadmaps. Better Decisions.',
        'SecuriSCOPE' => 'Security. Compliance. Resilience.',
        'ManageSP' => 'Operations. Support. Continuity.',
        'CloudEXCELON' => 'Cloud. Infrastructure. Scale.',
        'CodeIGNITE' => 'Software. Platforms. Momentum.',
        'DatastAIsis' => 'AI. Automation. Intelligence.',
    ];
    return $map[$brand['short']] ?? $brand['name'];
}

function serviceIntroHeadline(array $brand): string
{
    $map = [
        'PraaS' => 'Strategic procurement support for technology buying, vendor coordination, and spend control.',
        'TechAdvisors' => 'Decision support for leaders who need the right roadmap before committing budget.',
        'SecuriSCOPE' => 'Security services that clarify exposure, compliance priorities, and resilience gaps.',
        'ManageSP' => 'Managed IT operations built to keep environments supported after deployment.',
        'CloudEXCELON' => 'Cloud services for architecture, migration, optimization, and operations.',
        'CodeIGNITE' => 'Application engineering services for workflows, platforms, integrations, and modernization.',
        'DatastAIsis' => 'AI, automation, analytics, and data services for operational intelligence.',
    ];
    return $map[$brand['short']] ?? 'Core BTP services for clear business outcomes.';
}

function heroProof(array $brand): string
{
    $items = array_slice(array_merge($brand['outcomes'], $brand['capabilities']), 0, 4);
    return implode('', array_map(fn($x) => '<span>' . h($x) . '</span>', $items));
}

function benefitList(array $brand): string
{
    $items = array_slice(array_merge($brand['outcomes'], $brand['problems']), 0, 6);
    $html = '';
    foreach ($items as $item) {
        $html .= '<article><span class="service-icon">' . h(iconCode($item)) . '</span><h3>' . h($item) . '</h3><p>' . h(itemDescription($brand, $item, 'problem')) . '</p></article>';
    }
    return $html;
}

function metricList(array $brand): string
{
    return '';
}

function timelineList(array $items): string
{
    $html = '';
    foreach (array_slice($items, 0, 6) as $i => $item) {
        $html .= '<article><span>0' . ($i + 1) . '</span><h3>' . h($item) . '</h3><p>' . h(shortProcessDescription($item)) . '</p></article>';
    }
    return $html;
}

function trustBadges(array $brand): string
{
    $items = [
        ['Dedicated Expertise', 'Specialized guidance aligned to the service lane and business objective.'],
        ['Structured Delivery', 'Discovery, planning, execution, and handoff steps stay visible.'],
        ['Scalable Engagement', 'Support can start focused and expand as scope becomes clearer.'],
        ['Strategic Guidance', 'Recommendations are shaped around fit, risk, and timing.'],
        ['Long-Term Partnership', 'BTP keeps lifecycle support and future optimization in view.'],
        [$brand['short'] . ' Methods', 'Brand-specific workflows support the work customers actually need.'],
    ];
    return implode('', array_map(fn($x) => '<article><span>' . h(iconCode($x[0])) . '</span><div><strong>' . h($x[0]) . '</strong><p>' . h($x[1]) . '</p></div></article>', $items));
}

function strengthHeadline(array $brand): string
{
    $map = [
        'PraaS' => 'Procurement decisions become easier when sourcing, vendors, spend, and handoff are coordinated.',
        'TechAdvisors' => 'Complex decisions need a roadmap, a decision framework, and a clear path to execution.',
        'SecuriSCOPE' => 'Security posture improves when risk, controls, compliance, and monitoring are connected.',
        'ManageSP' => 'Operations become more reliable when support workflows, ownership, and escalation are clear.',
        'CloudEXCELON' => 'Cloud programs work better when architecture, migration, operations, and cost control stay aligned.',
        'CodeIGNITE' => 'Software projects move faster when workflows, architecture, releases, and integrations are sequenced.',
        'DatastAIsis' => 'Data and AI create value when use cases, automation, dashboards, and governance fit the business.',
    ];
    return $map[$brand['short']] ?? $brand['headline'];
}

function industryHeadline(array $brand): string
{
    $map = [
        'PraaS' => 'Designed for teams buying technology across vendors, contracts, licenses, and implementation paths.',
        'TechAdvisors' => 'Designed for leaders who need decision clarity before technology spend becomes hard to unwind.',
        'SecuriSCOPE' => 'Designed for organizations balancing protection, compliance, monitoring, and resilience.',
        'ManageSP' => 'Designed for environments that need dependable support after projects go live.',
        'CloudEXCELON' => 'Designed for hybrid and cloud environments that need scale without operational confusion.',
        'CodeIGNITE' => 'Designed for teams turning manual workflows and platform gaps into business software.',
        'DatastAIsis' => 'Designed for teams turning fragmented data and repetitive work into intelligent operations.',
    ];
    return $map[$brand['short']] ?? $brand['tagline'];
}

function finalCtaHeadline(array $brand): string
{
    $map = [
        'PraaS' => 'Ready to optimize your technology procurement?',
        'TechAdvisors' => 'Ready to make the next technology decision clearer?',
        'SecuriSCOPE' => 'Ready to reduce risk and improve security visibility?',
        'ManageSP' => 'Ready to stabilize and support your technology operations?',
        'CloudEXCELON' => 'Ready to build a cleaner cloud roadmap?',
        'CodeIGNITE' => 'Ready to turn a workflow or platform idea into software?',
        'DatastAIsis' => 'Ready to turn data and automation into measurable outcomes?',
    ];
    return $map[$brand['short']] ?? 'Ready to move forward with BTP?';
}

function serviceDetailList(array $brand): string
{
    $html = '';
    foreach (array_slice($brand['capabilities'], 0, 6) as $i => $capability) {
        $deliverable = $brand['deliverables'][$i % count($brand['deliverables'])];
        $outcome = $brand['outcomes'][$i % count($brand['outcomes'])];
        $problem = $brand['problems'][$i % count($brand['problems'])];
        $html .= '<article class="service-deep-card"><div><span class="service-icon">' . h(iconCode($capability)) . '</span><h3>' . h($capability) . '</h3><p>' . h(itemDescription($brand, $capability, 'capability')) . '</p></div><ul><li><strong>Benefit:</strong> ' . h($outcome) . '</li><li><strong>Deliverable:</strong> ' . h($deliverable) . '</li><li><strong>Use case:</strong> ' . h($problem) . '</li></ul></article>';
    }
    return $html;
}

function whyMatters(array $brand): string
{
    return $brand['short'] . ' gives leaders a clearer way to evaluate needs, compare fit, reduce risk, and move toward an actionable service path without losing accountability between advisory, buying, implementation, and support.';
}

function industryList(array $brand): string
{
    $items = ['Government', 'Healthcare', 'Financial Services', 'Manufacturing', 'Technology', 'Education'];
    return implode('', array_map(fn($x) => '<span>' . h($x) . '</span>', $items));
}

function featuredNewsTitle(array $brand): string
{
    return 'How leaders can evaluate ' . $brand['short'] . ' readiness before budget is committed';
}

function featuredNewsCopy(array $brand): string
{
    return 'A practical look at the questions, risks, stakeholders, and deliverables that should be clarified before a ' . $brand['short'] . ' engagement moves into proposal, vendor selection, or execution.';
}

function contactReasonCards(array $brand): string
{
    $items = [
        ['Clarify Scope', 'Use the form when the business goal is clear but requirements, ownership, or technical dependencies still need structure.'],
        ['Compare Options', 'Ask BTP to help evaluate vendors, service models, delivery paths, or support alternatives before committing budget.'],
        ['Plan Next Steps', 'Share current timing, constraints, and decision pressure so BTP can route the inquiry to the right engagement path.'],
    ];
    return implode('', array_map(fn($x) => '<article class="service-card"><span class="service-icon">' . h(iconCode($x[0])) . '</span><h3>' . h($x[0]) . '</h3><p>' . h($x[1]) . '</p></article>', $items));
}

function revenueHeadline(array $brand): string
{
    $map = [
        'PraaS' => 'Revenue comes from managed sourcing, procurement support, vendor coordination, and resource alignment.',
        'TechAdvisors' => 'Revenue comes from advisory engagements, roadmaps, decision support, and technology planning.',
        'SecuriSCOPE' => 'Revenue comes from assessments, compliance consulting, security strategy, and managed security transition work.',
        'ManageSP' => 'Revenue comes from managed IT operations, support coverage, vendor coordination, and lifecycle management.',
        'CloudEXCELON' => 'Revenue comes from cloud migration, infrastructure architecture, optimization, and managed cloud planning.',
        'CodeIGNITE' => 'Revenue comes from application engineering, modernization, integrations, and platform build projects.',
        'DatastAIsis' => 'Revenue comes from AI use-case planning, automation delivery, analytics, and operational intelligence work.',
    ];
    return $map[$brand['short']] ?? $brand['tagline'];
}

function revenueCards(array $brand): string
{
    $items = array_slice(array_merge($brand['capabilities'], $brand['deliverables']), 0, 3);
    $html = '<div class="revenue-grid">';
    foreach ($items as $item) {
        $html .= '<article><span>' . h(iconCode($item)) . '</span><h3>' . h($item) . '</h3><p>' . h(itemDescription($brand, $item, 'revenue')) . '</p></article>';
    }
    return $html . '</div>';
}

function itemDescription(array $brand, string $item, string $kind): string
{
    $short = $brand['short'];
    if ($kind === 'problem') {
        return "$short addresses this by defining ownership, sequencing the work, and giving leaders a clearer path before cost, risk, or delay expands.";
    }
    if ($kind === 'revenue') {
        return "A practical engagement area for organizations that need measurable progress, not another disconnected vendor conversation.";
    }
    $lower = strtolower($item);
    if (str_contains($lower, 'strategy') || str_contains($lower, 'advisory')) {
        return "Clarifies options, tradeoffs, and executive next steps before teams commit time or budget.";
    }
    if (str_contains($lower, 'migration') || str_contains($lower, 'implementation') || str_contains($lower, 'development')) {
        return "Turns the plan into sequenced work with clearer ownership, dependencies, and delivery checkpoints.";
    }
    if (str_contains($lower, 'security') || str_contains($lower, 'risk') || str_contains($lower, 'compliance')) {
        return "Surfaces exposure, control gaps, and practical remediation priorities for business leaders.";
    }
    if (str_contains($lower, 'support') || str_contains($lower, 'operations') || str_contains($lower, 'managed')) {
        return "Creates a more reliable operating model with routing, coverage, and escalation clarity.";
    }
    if (str_contains($lower, 'automation') || str_contains($lower, 'analytics') || str_contains($lower, 'ai')) {
        return "Connects data, workflows, and decision points so teams can act with better visibility.";
    }
    return "Defines scope, fit, risks, and next actions so the service can move from idea to execution.";
}

function processDescription(array $brand, string $item): string
{
    return $brand['short'] . ' uses this step to keep stakeholders, requirements, vendors, technical dependencies, and business outcomes aligned.';
}

function shortProcessDescription(string $item): string
{
    return 'A focused step that keeps decisions, owners, and next actions visible.';
}

function journeyList(): string
{
    $items = [
        ['Learn', 'Clear service definitions and business outcomes help visitors understand fit quickly.'],
        ['Trust', 'BTP ecosystem positioning, process detail, and deliverables reduce perceived risk.'],
        ['Contact', 'The form captures the business need without forcing a premature technical scope.'],
        ['Discovery Call', 'BTP clarifies goals, urgency, constraints, current vendors, and next-step ownership.'],
        ['Proposal', 'The recommended path is shaped around the service model, delivery plan, and measurable outcome.'],
    ];
    return implode('', array_map(fn($x) => '<article><span>' . h($x[0]) . '</span><p>' . h($x[1]) . '</p></article>', $items));
}

function faqSection(array $brand): string
{
    $questions = [
        ['What does ' . $brand['name'] . ' do?', $brand['summary']],
        ['Who is this service best for?', $brand['audience']],
        ['What should we bring to the first conversation?', 'Bring the business goal, current vendors or systems, timing pressure, known risks, budget constraints if available, and the decision makers who need clarity.'],
        ['How does BTP reduce risk?', 'BTP uses an advisory-first model that clarifies requirements, identifies dependencies, compares fit, and connects delivery or support paths before a recommendation is made.'],
    ];
    $html = '<section class="section faq-section"><div class="container"><div class="section-heading centered"><p class="eyebrow">FAQ</p><h2>Clear answers for executive buyers and AI search.</h2></div><div class="faq-grid">';
    foreach ($questions as $q) {
        $html .= '<article><h3>' . h($q[0]) . '</h3><p>' . h($q[1]) . '</p></article>';
    }
    return $html . '</div></div></section>';
}

function aboutCards(): string
{
    $items = [
        ['Quarterback Model', 'One strategic relationship coordinates the right subject matter experts around each client need.'],
        ['Engineering-First IPC', 'Cross-functional thinking reduces handoff gaps between security, cloud, infrastructure, software, and operations.'],
        ['Vendor-Agnostic Fit', 'Recommendations are shaped around client requirements, not a single vendor agenda.'],
        ['Lifecycle Support', 'BTP stays focused beyond the initial decision so execution, support, and optimization remain connected.'],
    ];
    return implode('', array_map(fn($x) => '<article class="service-card"><span class="service-icon">' . h(strtoupper(substr($x[0], 0, 3))) . '</span><h3>' . h($x[0]) . '</h3><p>' . h($x[1]) . '</p></article>', $items));
}

function newsCards(array $brand): string
{
    $items = [
        ['How to evaluate ' . $brand['short'] . ' readiness', 'A concise guide for leaders deciding whether the current environment, team, or vendor model is ready for change.'],
        ['Reducing risk before the proposal stage', 'Why clearer requirements, ownership, and sequencing make enterprise technology decisions easier to approve.'],
        ['When to bring BTP into the conversation', 'Signals that a project, sourcing need, support gap, or strategy question needs coordinated advisory support.'],
    ];
    return implode('', array_map(fn($x) => '<article class="news-card"><p class="eyebrow">Insight</p><h2>' . h($x[0]) . '</h2><p>' . h($x[1]) . '</p><a href="/contact">Discuss this topic <span aria-hidden="true">&rarr;</span></a></article>', $items));
}

function relatedSolutions(array $brand, array $brands, bool $compact = false): string
{
    $cards = '';
    foreach ($brand['related'] as $slug) {
        $other = $brands[$slug];
        $cards .= '<article class="related-card"><p class="eyebrow">' . h($other['short']) . '</p><h3>' . h($other['tagline']) . '</h3><a href="https://' . h($other['domain']) . '/">' . h($other['name']) . ' <span aria-hidden="true">&rarr;</span></a></article>';
    }
    $heading = $compact ? '<p class="eyebrow">Related BTP Solutions</p><h2>Connected support across the BTP ecosystem.</h2>' : '<p class="eyebrow">Related BTP Solutions</p><h2>Keep the work inside one connected ecosystem.</h2>';
    return '<section class="section related-solutions"><div class="container"><div class="section-heading centered">' . $heading . '</div><div class="related-grid">' . $cards . '</div></div></section>';
}

function headerInclude(): string
{
    return <<<'PHP'
<?php
$brand = require __DIR__ . '/site.php';
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function site_base_path(): string
{
    static $base = null;
    global $brand;
    if ($base !== null) {
        return $base;
    }
    $configured = getenv('BTP_BASE_PATH') ?: '';
    if ($configured !== '') {
        $base = '/' . trim($configured, '/');
        return $base === '/' ? '' : $base;
    }
    $sources = [
        $_SERVER['HTTP_X_ORIGINAL_URL'] ?? '',
        $_SERVER['UNENCODED_URL'] ?? '',
        $_SERVER['REQUEST_URI'] ?? '',
        $_SERVER['SCRIPT_NAME'] ?? '',
    ];
    foreach ($sources as $source) {
        $path = parse_url((string) $source, PHP_URL_PATH) ?: (string) $source;
        if (preg_match('#^(/plesk-site-preview/[^/]+)#', $path, $match)) {
            $base = rtrim($match[1], '/');
            return $base;
        }
    }
    $host = (string) ($_SERVER['HTTP_HOST'] ?? '');
    $host = preg_replace('/:\d+$/', '', $host) ?: $host;
    if (
        isset($brand['domain']) &&
        filter_var($host, FILTER_VALIDATE_IP) &&
        !in_array($host, ['127.0.0.1', '::1'], true)
    ) {
        $base = '/plesk-site-preview/' . $brand['domain'];
        return $base;
    }
    $base = '';
    return $base;
}
function site_url(string $path = ''): string
{
    $base = site_base_path();
    $path = trim($path, '/');
    return ($base === '' ? '' : $base) . ($path === '' ? '/' : '/' . $path);
}
function asset(string $path): string { return site_url('assets/' . ltrim($path, '/')); }
function footerDescription(array $brand): string { return $brand['name'] . ' helps clients clarify needs, compare options, coordinate delivery paths, and move technology work toward accountable next steps.'; }
$canonical = 'https://' . $brand['domain'] . ($pagePath ?? '/');
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($pageTitle ?? $brand['name']) ?></title>
  <meta name="description" content="<?= e($metaDescription ?? $brand['summary']) ?>">
  <link rel="canonical" href="<?= e($canonical) ?>">
  <meta property="og:title" content="<?= e($pageTitle ?? $brand['name']) ?>">
  <meta property="og:description" content="<?= e($metaDescription ?? $brand['summary']) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <meta property="og:image" content="https://<?= e($brand['domain']) ?>/assets/images/logo.png">
  <link rel="preload" href="<?= e(asset('css/style.css')) ?>" as="style">
  <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
  <script src="<?= e(asset('js/main.js')) ?>" defer></script>
  <?php require __DIR__ . '/analytics.php'; ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?= e(site_url()) ?>" aria-label="<?= e($brand['name']) ?> home"><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" width="210" height="82"></a>
    <?php require __DIR__ . '/navigation.php'; ?>
    <a class="button button-primary header-cta" href="<?= e(site_url('contact')) ?>"><?= e($brand['cta']) ?></a>
    <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
PHP;
}

function navigationInclude(): string
{
    return <<<'PHP'
<nav class="site-nav" aria-label="Primary navigation">
  <ul class="nav-menu">
    <li><a href="<?= e(site_url()) ?>">Home</a></li>
    <li><a href="<?= e(site_url('about')) ?>">About</a></li>
    <li><a href="<?= e(site_url('services')) ?>">Services</a></li>
    <li><a href="<?= e(site_url('news')) ?>">News</a></li>
    <li><a href="<?= e(site_url('contact')) ?>">Contact</a></li>
  </ul>
</nav>
PHP;
}

function footerInclude(): string
{
    return <<<'PHP'
</main>
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="footer-logo-panel" href="<?= e(site_url()) ?>" aria-label="<?= e($brand['name']) ?> home"><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" loading="lazy"></a>
      <p><?= e(footerDescription($brand)) ?></p>
      <div class="social-links" aria-label="Social links"><a href="https://www.linkedin.com/company/btp-innovations/" aria-label="LinkedIn">in</a><a href="mailto:info@btpinnovations.com" aria-label="Email">@</a><a href="<?= e(site_url('contact')) ?>" aria-label="Request consultation">→</a></div>
    </div>
    <div><h3>Navigation</h3><a href="<?= e(site_url()) ?>">Home</a><a href="<?= e(site_url('about')) ?>">About</a><a href="<?= e(site_url('services')) ?>">Services</a><a href="<?= e(site_url('news')) ?>">News</a><a href="<?= e(site_url('contact')) ?>">Contact</a></div>
    <div><h3>Services</h3><?php foreach (array_slice($brand['capabilities'], 0, 6) as $capability): ?><a href="<?= e(site_url('services')) ?>"><?= e($capability) ?></a><?php endforeach; ?></div>
    <div class="footer-contact"><h3>Contact</h3><p>info@btpinnovations.com<br>(800) 781-6632</p><p>276 5th Avenue Suite 704<br>New York, NY 10001</p><a class="button button-primary" href="<?= e(site_url('contact')) ?>">Request Consultation</a></div>
  </div>
</footer>
</body>
</html>
PHP;
}

function analyticsInclude(): string
{
    return <<<'PHP'
<?php
// TODO: Add production analytics here when approved:
// Google Analytics, Microsoft Clarity, LinkedIn Insight Tag, or CRM attribution scripts.
?>
PHP;
}

function js(): string
{
    return <<<'JS'
if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}
window.addEventListener('load', () => {
  const navEntries = performance.getEntriesByType?.('navigation') || [];
  const navType = navEntries[0]?.type || performance.navigation?.type;
  if (!location.hash && (navType === 'reload' || navType === 1)) {
    window.scrollTo(0, 0);
  }
});
const toggle = document.querySelector('.nav-toggle');
toggle?.addEventListener('click', () => {
  const isOpen = document.body.classList.toggle('nav-open');
  toggle.setAttribute('aria-expanded', String(isOpen));
});
JS;
}

function visualSvg(array $brand, string $type): string
{
    $accent = h($brand['accent']);
    $accent2 = h($brand['accent2']);
    $title = h($brand['short']);
    $labels = array_map('h', $brand['visual']);
    [$l0, $l1, $l2, $l3] = $labels;
    $heading = match ($type) {
        'about' => 'BTP Ecosystem',
        'services' => 'Service Delivery Map',
        'contact' => 'Inquiry Routing',
        'news' => 'Executive Briefing',
        'proof' => 'Impact Dashboard',
        'process' => 'Decision Workflow',
        'trust' => 'BTP Ecosystem',
        default => 'Enterprise Service Map',
    };
    $heading = h($heading);
    $motif = match ($brand['short']) {
        'PraaS' => <<<SVG
  <g class="motif procurement" transform="translate(345 155)">
    <circle cx="132" cy="112" r="112" fill="none" stroke="$accent" stroke-width="2" stroke-opacity=".55"/>
    <path d="M28 112 H264 M132 8 V224 M54 46 C92 80 170 80 226 46 M54 178 C92 144 170 144 226 178" fill="none" stroke="#66c7ff" stroke-width="2" stroke-opacity=".45"/>
    <g fill="#fff" font-family="Segoe UI, Arial" font-weight="800" font-size="15">
      <rect x="80" y="78" width="104" height="42" rx="8" fill="$accent"/><text x="102" y="105">Vendors</text>
      <rect x="5" y="142" width="122" height="42" rx="8" fill="#071b31" stroke="$accent"/><text x="24" y="168">Contracts</text>
      <rect x="155" y="142" width="114" height="42" rx="8" fill="#071b31" stroke="$accent2"/><text x="181" y="168">Spend</text>
    </g>
  </g>
SVG,
        'TechAdvisors' => <<<SVG
  <g class="motif advisory" transform="translate(342 150)">
    <rect x="0" y="0" width="292" height="230" rx="18" fill="#071b31" stroke="$accent" stroke-opacity=".45"/>
    <path d="M42 55 H246 M42 115 H246 M42 175 H246" stroke="#dbeafe" stroke-opacity=".18"/>
    <path d="M58 178 C92 122 132 152 164 90 S218 72 244 42" fill="none" stroke="$accent" stroke-width="5"/>
    <circle cx="58" cy="178" r="9" fill="$accent2"/><circle cx="164" cy="90" r="9" fill="$accent"/><circle cx="244" cy="42" r="9" fill="#ff3b30"/>
    <rect x="42" y="26" width="92" height="28" rx="6" fill="rgba(255,255,255,.1)"/><rect x="42" y="86" width="126" height="28" rx="6" fill="rgba(255,255,255,.1)"/><rect x="42" y="146" width="168" height="28" rx="6" fill="rgba(255,255,255,.1)"/>
  </g>
SVG,
        'SecuriSCOPE' => <<<SVG
  <g class="motif security" transform="translate(348 142)">
    <circle cx="135" cy="120" r="112" fill="none" stroke="$accent" stroke-width="3" stroke-opacity=".65"/>
    <circle cx="135" cy="120" r="72" fill="none" stroke="$accent2" stroke-width="2" stroke-dasharray="8 8"/>
    <path d="M135 48 L203 76 V121 C203 166 174 196 135 214 C96 196 67 166 67 121 V76 Z" fill="rgba(255,59,48,.18)" stroke="$accent" stroke-width="4"/>
    <path d="M98 122 L124 148 L174 92" fill="none" stroke="#fff" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M135 120 L232 72 M135 120 L44 185 M135 120 L248 176" stroke="#66c7ff" stroke-opacity=".55"/>
  </g>
SVG,
        'ManageSP' => <<<SVG
  <g class="motif ops" transform="translate(338 138)">
    <rect x="0" y="0" width="306" height="244" rx="20" fill="#071b31" stroke="$accent" stroke-opacity=".45"/>
    <rect x="24" y="24" width="258" height="50" rx="10" fill="rgba(255,255,255,.1)"/>
    <rect x="24" y="94" width="124" height="126" rx="12" fill="rgba(42,168,255,.14)" stroke="$accent"/>
    <rect x="166" y="94" width="116" height="32" rx="8" fill="$accent2"/><rect x="166" y="142" width="116" height="32" rx="8" fill="rgba(255,255,255,.12)"/><rect x="166" y="190" width="116" height="32" rx="8" fill="rgba(255,255,255,.12)"/>
    <circle cx="62" cy="135" r="16" fill="$accent"/><circle cx="103" cy="172" r="16" fill="$accent2"/><path d="M78 145 L91 162" stroke="#fff" stroke-width="4"/>
  </g>
SVG,
        'CloudEXCELON' => <<<SVG
  <g class="motif cloud" transform="translate(332 136)">
    <path d="M94 112 C96 70 130 42 173 50 C192 20 246 28 260 69 C300 72 326 101 326 138 C326 179 295 206 250 206 H102 C58 206 28 178 28 139 C28 104 54 113 94 112Z" fill="rgba(42,168,255,.16)" stroke="$accent" stroke-width="4"/>
    <g stroke="#fff" stroke-opacity=".6" stroke-width="2"><path d="M98 210 V252 H252 V210 M176 208 V252 M98 252 H64 M176 252 H176 M252 252 H292"/></g>
    <g fill="$accent"><circle cx="64" cy="252" r="12"/><circle cx="176" cy="252" r="12"/><circle cx="292" cy="252" r="12"/></g>
    <rect x="106" y="104" width="152" height="56" rx="12" fill="#071b31" stroke="$accent2"/><path d="M126 132 H238" stroke="#fff" stroke-width="6" stroke-linecap="round"/>
  </g>
SVG,
        'CodeIGNITE' => <<<SVG
  <g class="motif code" transform="translate(336 132)">
    <rect x="0" y="0" width="316" height="252" rx="20" fill="#071b31" stroke="$accent" stroke-opacity=".5"/>
    <rect x="0" y="0" width="316" height="42" rx="20" fill="rgba(255,255,255,.1)"/>
    <circle cx="30" cy="22" r="6" fill="#ff3b30"/><circle cx="52" cy="22" r="6" fill="$accent2"/><circle cx="74" cy="22" r="6" fill="$accent"/>
    <path d="M64 95 L34 125 L64 155 M252 95 L282 125 L252 155" fill="none" stroke="$accent" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M132 176 H238 M94 78 H214 M94 118 H190 M94 138 H226" stroke="#dbeafe" stroke-width="8" stroke-opacity=".55" stroke-linecap="round"/>
    <path d="M124 218 H274" stroke="$accent2" stroke-width="5" stroke-linecap="round"/>
  </g>
SVG,
        'DatastAIsis' => <<<SVG
  <g class="motif data" transform="translate(332 132)">
    <rect x="0" y="0" width="316" height="252" rx="20" fill="#071b31" stroke="$accent2" stroke-opacity=".5"/>
    <path d="M54 190 V96 M112 190 V62 M170 190 V126 M228 190 V82" stroke="$accent" stroke-width="18" stroke-linecap="round"/>
    <path d="M56 82 C104 18 166 42 202 96 S270 156 292 62" fill="none" stroke="$accent2" stroke-width="5"/>
    <g fill="#fff"><circle cx="56" cy="82" r="8"/><circle cx="202" cy="96" r="8"/><circle cx="292" cy="62" r="8"/></g>
    <path d="M42 214 H278" stroke="#dbeafe" stroke-opacity=".35"/>
  </g>
SVG,
        default => <<<SVG
  <g transform="translate(345 155)"><circle cx="132" cy="112" r="112" fill="none" stroke="$accent" stroke-width="2"/><circle cx="132" cy="112" r="44" fill="$accent" opacity=".3"/></g>
SVG,
    };
    return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="880" height="560" viewBox="0 0 880 560" role="img" aria-labelledby="title desc">
  <title id="title">$title $heading</title>
  <desc id="desc">Brand-specific enterprise technology visual for $title showing the service workflow and supporting diagram.</desc>
  <defs>
    <linearGradient id="g" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="$accent" stop-opacity=".95"/>
      <stop offset="1" stop-color="$accent2" stop-opacity=".9"/>
    </linearGradient>
    <radialGradient id="r" cx=".72" cy=".34" r=".62">
      <stop offset="0" stop-color="$accent" stop-opacity=".42"/>
      <stop offset=".55" stop-color="$accent2" stop-opacity=".16"/>
      <stop offset="1" stop-color="#020817" stop-opacity="0"/>
    </radialGradient>
    <pattern id="grid" width="32" height="32" patternUnits="userSpaceOnUse">
      <path d="M32 0H0V32" fill="none" stroke="#ffffff" stroke-opacity=".06"/>
    </pattern>
    <filter id="s" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="18" stdDeviation="18" flood-color="#000000" flood-opacity=".28"/>
    </filter>
  </defs>
  <rect width="880" height="560" rx="28" fill="#020817"/>
  <rect width="880" height="560" rx="28" fill="url(#grid)"/>
  <rect width="880" height="560" rx="28" fill="url(#r)"/>
  <path d="M54 458 C174 312 255 456 374 282 S640 132 812 256" fill="none" stroke="$accent" stroke-width="3" stroke-opacity=".28"/>
  <g filter="url(#s)">
    <rect x="56" y="54" width="326" height="404" rx="22" fill="rgba(255,255,255,.08)" stroke="rgba(255,255,255,.14)"/>
    <rect x="82" y="84" width="92" height="18" rx="9" fill="url(#g)"/>
    <text x="82" y="142" font-family="Segoe UI, Arial" font-size="32" font-weight="850" fill="#fff">$heading</text>
    <text x="82" y="184" font-family="Segoe UI, Arial" font-size="17" fill="#cbd5e1">$title workflow visualization</text>
    <g font-family="Segoe UI, Arial" font-size="15" font-weight="800" fill="#fff">
      <rect x="82" y="232" width="250" height="42" rx="10" fill="rgba(255,255,255,.08)" stroke="$accent" stroke-opacity=".5"/><text x="104" y="259">$l0</text>
      <rect x="82" y="292" width="250" height="42" rx="10" fill="rgba(255,255,255,.08)" stroke="$accent2" stroke-opacity=".5"/><text x="104" y="319">$l1</text>
      <rect x="82" y="352" width="250" height="42" rx="10" fill="rgba(255,255,255,.08)" stroke="#ff3b30" stroke-opacity=".5"/><text x="104" y="379">$l2</text>
      <rect x="82" y="412" width="250" height="42" rx="10" fill="rgba(255,255,255,.08)" stroke="#ffffff" stroke-opacity=".18"/><text x="104" y="439">$l3</text>
    </g>
  </g>
  $motif
  <circle cx="748" cy="92" r="70" fill="$accent" opacity=".12"/>
  <circle cx="738" cy="466" r="96" fill="$accent2" opacity=".1"/>
</svg>
SVG;
}

function css(array $brand): string
{
    return agencyCss($brand['accent'], $brand['accent2']);
}

function premiumCss(string $accent, string $accent2): string
{
    return agencyCss($accent, $accent2);
}
function agencyCss(string $accent, string $accent2): string
{
    return <<<CSS
:root{--black:#000;--white:#fff;--red:#ff3b30;--blue:#2aa8ff;--ink:#09111f;--muted:#536173;--line:#d9e2ec;--surface:#f4f7fb;--surface-2:#eaf6ff;--navy:#020817;--navy-2:#071a30;--accent:$accent;--accent-2:$accent2;--shadow:0 22px 54px rgba(8,20,36,.16);--radius:8px;--max:1180px}*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;color:var(--ink);background:#fff;font-family:"Segoe UI",Inter,Arial,sans-serif;line-height:1.55}body.nav-open{overflow:hidden}a{color:inherit;text-decoration:none}img{display:block;max-width:100%;height:auto}.container{width:min(100% - 42px,var(--max));margin-inline:auto}.skip-link{position:absolute;left:-999px}.skip-link:focus{left:12px;top:12px;z-index:1000;padding:10px 14px;color:#fff;background:#000}.site-header{position:sticky;top:0;z-index:100;background:#fff;border-bottom:1px solid var(--line);box-shadow:0 10px 28px rgba(15,23,42,.06)}.header-inner{display:grid;grid-template-columns:auto 1fr auto auto;align-items:center;gap:24px;min-height:92px}.brand img{width:clamp(190px,18vw,260px)}.site-nav{justify-self:center}.nav-menu{display:flex;gap:28px;align-items:center;padding:0;margin:0;list-style:none}.nav-menu a{position:relative;font-size:14px;font-weight:850}.nav-menu a:after{content:"";position:absolute;left:0;right:0;bottom:-12px;height:2px;background:var(--accent);transform:scaleX(0);transition:transform .18s ease}.nav-menu a:hover:after{transform:scaleX(1)}.nav-toggle{display:none}.button{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:12px 19px;border-radius:6px;border:0;font-weight:900;line-height:1.1;cursor:pointer}.button-primary{color:#fff;background:linear-gradient(135deg,var(--red),#dc1f18);box-shadow:0 16px 32px rgba(255,59,48,.24)}.button-secondary{color:#fff;background:linear-gradient(135deg,var(--accent),var(--accent-2));box-shadow:0 16px 32px color-mix(in srgb,var(--accent) 26%,transparent)}.button-outline{color:#081525;border:1px solid rgba(8,21,37,.62);background:#fff}.hero-outline{color:#fff;border-color:rgba(255,255,255,.55);background:rgba(255,255,255,.06)}.eyebrow{display:inline-flex;align-items:center;gap:12px;margin:0 0 14px;color:var(--accent);font-size:12px;font-weight:950;letter-spacing:.04em;text-transform:uppercase}.eyebrow:after{content:"";width:42px;height:2px;background:currentColor}.hero{position:relative;display:grid;grid-template-columns:minmax(0,1fr) minmax(420px,560px);gap:48px;align-items:center;min-height:600px;padding:clamp(58px,6vw,88px) max(24px,calc((100vw - var(--max))/2));overflow:hidden;background:radial-gradient(circle at 78% 30%,color-mix(in srgb,var(--accent) 38%,transparent),transparent 31%),linear-gradient(112deg,#020817 0%,#071426 54%,#08233f 100%)}.hero:before{content:"";position:absolute;right:-9%;bottom:-44%;width:48%;height:480px;background:linear-gradient(125deg,color-mix(in srgb,var(--accent) 68%,transparent),color-mix(in srgb,var(--accent-2) 66%,transparent));clip-path:polygon(28% 0,100% 0,73% 100%,0 100%);opacity:.54}.hero-copy,.hero-visual{position:relative;z-index:1}.hero h1,.page-hero h1{max-width:850px;margin:0 0 18px;font-size:clamp(38px,4.9vw,62px);line-height:1.04;letter-spacing:0}.hero h1{color:#fff}.hero p{max-width:710px;margin:0;color:rgba(255,255,255,.88);font-size:clamp(17px,1.45vw,20px)}.actions{display:flex;flex-wrap:wrap;gap:14px;margin-top:28px}.hero-proof{display:flex;flex-wrap:wrap;gap:14px;margin-top:28px}.hero-proof span{display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,.86);font-size:13px;font-weight:850}.hero-proof span:before{content:"";width:8px;height:8px;border-radius:50%;background:var(--accent)}.visual-card{margin:0;padding:0;border:1px solid rgba(148,163,184,.28);border-radius:16px;background:rgba(255,255,255,.05);box-shadow:var(--shadow);overflow:hidden}.visual-card img{width:100%;border-radius:16px}.hero-visual .visual-card{background:rgba(255,255,255,.08);backdrop-filter:blur(8px)}.section{padding:clamp(52px,5.7vw,78px) 0}.section h2{margin:0 0 14px;color:#000;font-size:clamp(28px,3.25vw,42px);line-height:1.12}.section h3{margin:0 0 9px;color:#000;font-size:18px;line-height:1.2}.section p{color:var(--muted)}.section-heading{max-width:720px}.section-heading.centered{max-width:820px;margin:0 auto 30px;text-align:center}.section-heading.centered .eyebrow{justify-content:center}.service-strip{background:#fff}.feature-dark{position:relative;color:#fff;background:linear-gradient(124deg,#020817,#061426 55%,#071f38);overflow:hidden}.feature-dark:before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 78% 30%,color-mix(in srgb,var(--accent) 24%,transparent),transparent 34%),linear-gradient(90deg,rgba(255,255,255,.035) 1px,transparent 1px),linear-gradient(0deg,rgba(255,255,255,.035) 1px,transparent 1px);background-size:auto,36px 36px,36px 36px}.feature-layout{position:relative;display:grid;grid-template-columns:1fr minmax(390px,560px);gap:48px;align-items:center}.feature-dark h2,.feature-dark h3,.feature-dark p,.trust-wall h2,.trust-wall h3,.trust-wall p,.process-band h2,.process-band h3,.process-band p,.final-cta h2,.final-cta p{color:#fff}.feature-dark .visual-card{transform:translateY(18px);box-shadow:0 28px 70px rgba(0,0,0,.34)}.process-light{background:linear-gradient(180deg,#fff 0%,#f1f6fb 100%)}.industry-band{background:linear-gradient(132deg,color-mix(in srgb,var(--accent) 12%,#fff),#fff 48%,color-mix(in srgb,var(--accent-2) 16%,#fff))}.page-hero{padding:clamp(56px,6vw,82px) 0;background:linear-gradient(114deg,#fff 0%,#f7fbff 45%,color-mix(in srgb,var(--accent) 14%,#fff) 100%);border-bottom:1px solid var(--line)}.page-hero-grid,.visual-split,.contact-grid{display:grid;grid-template-columns:1fr minmax(360px,500px);gap:44px;align-items:center}.visual-split.reverse{grid-template-columns:minmax(360px,520px) 1fr}.page-hero p{max-width:760px;margin:0;color:#243044;font-size:18px}.card-grid,.related-grid,.news-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}.service-grid{grid-template-columns:repeat(6,1fr)}.service-card,.related-card,.news-card,.contact-form,.contact-panel,.cta-card,.belief-grid article,.journey-grid article,.service-deep-card,.faq-grid article,.featured-article,.newsletter-card{padding:22px;border:1px solid var(--line);border-radius:var(--radius);background:#fff;box-shadow:0 10px 28px rgba(15,23,42,.075)}.service-card,.related-card,.news-card,.service-deep-card{border-top:4px solid var(--accent);transition:transform .18s ease,box-shadow .18s ease}.service-card:hover,.related-card:hover,.news-card:hover,.service-deep-card:hover{transform:translateY(-3px);box-shadow:var(--shadow)}.service-card p,.related-card p,.news-card p,.service-deep-card p{font-size:14.5px}.service-icon{display:inline-grid;place-items:center;min-width:42px;height:38px;margin-bottom:13px;padding:0 9px;color:#fff;background:linear-gradient(135deg,var(--accent),var(--accent-2));border-radius:8px;font-size:12px;font-weight:950}.benefit-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:24px}.benefit-grid article{padding:16px;border:1px solid color-mix(in srgb,var(--accent) 24%,var(--line));border-radius:8px;background:rgba(255,255,255,.78)}.benefit-grid h3{font-size:15px}.benefit-grid p{margin-bottom:0;font-size:13.5px}.dark-benefits article{background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.12);backdrop-filter:blur(6px)}.timeline{display:grid;grid-template-columns:repeat(5,1fr);gap:16px}.timeline article{padding:20px 12px;text-align:center}.timeline span{display:inline-grid;place-items:center;width:58px;height:58px;margin-bottom:13px;color:#fff;border-radius:50%;background:linear-gradient(135deg,var(--accent),var(--accent-2));font-weight:950;box-shadow:0 12px 22px color-mix(in srgb,var(--accent) 25%,transparent)}.timeline h3{font-size:15px}.timeline p{font-size:13.5px}.process-band{background:#020817}.timeline-dark article{border:1px solid rgba(255,255,255,.12);border-radius:8px;background:rgba(255,255,255,.05)}.trust-wall{padding:48px 0;color:#fff;background:radial-gradient(circle at 18% 20%,color-mix(in srgb,var(--accent) 20%,transparent),transparent 32%),#020817}.trust-wall .section-heading{margin-bottom:24px}.trust-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.trust-grid article{display:flex;gap:14px;min-height:112px;padding:18px;border:1px solid rgba(255,255,255,.14);border-radius:8px;background:rgba(255,255,255,.055)}.trust-grid span{display:grid;place-items:center;min-width:42px;height:42px;border-radius:8px;color:#fff;background:linear-gradient(135deg,var(--accent),var(--accent-2));font-size:11px;font-weight:950}.trust-grid strong{display:block;margin-bottom:5px;color:#fff}.trust-grid p{margin:0;color:rgba(255,255,255,.72);font-size:13.5px}.related-solutions{background:#fff}.related-card a,.news-card a{display:inline-flex;margin-top:8px;color:#005bd8;font-weight:900}.final-cta{background:#000}.cta-card,.newsletter-card{display:flex;align-items:center;justify-content:space-between;gap:24px}.final-cta .cta-card{color:#fff;background:linear-gradient(100deg,#000,#06233f 55%,color-mix(in srgb,var(--accent) 30%,#06233f));border-color:#1f2937}.belief-grid{display:grid;grid-template-columns:1.15fr 1fr 1fr;gap:18px}.belief-grid article:first-child{background:linear-gradient(130deg,color-mix(in srgb,var(--accent) 12%,#fff),#fff)}.muted{background:#f4f7fb}.journey-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:14px}.journey-grid span{display:inline-flex;margin-bottom:10px;color:var(--red);font-weight:950}.service-detail-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px}.service-deep-card{display:grid;gap:12px}.service-deep-card ul{padding-left:20px;margin:0;color:#3d4858}.service-deep-card li{margin:7px 0}.pill-list{display:flex;flex-wrap:wrap;gap:10px;margin-top:20px}.pill-list span,.filter-row span{padding:8px 12px;border:1px solid color-mix(in srgb,var(--accent) 30%,var(--line));border-radius:999px;background:#fff;color:#102033;font-size:13px;font-weight:850}.faq-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}.filter-row{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:22px}.featured-article{display:grid;grid-template-columns:1fr minmax(320px,460px);gap:30px;align-items:center;margin-bottom:22px;background:linear-gradient(130deg,#fff,color-mix(in srgb,var(--accent) 9%,#fff))}.contact-form{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}.contact-panel{background:linear-gradient(140deg,#fff,color-mix(in srgb,var(--accent) 8%,#fff))}label{display:grid;gap:8px;font-weight:800}input,textarea{width:100%;padding:12px 14px;font:inherit;border:1px solid #cbd5e1;border-radius:6px;background:#fff}input:focus,textarea:focus{outline:3px solid color-mix(in srgb,var(--accent) 24%,transparent);border-color:var(--accent)}.full{grid-column:1/-1}.site-footer{position:relative;color:#fff;background:#020817;overflow:hidden}.site-footer:before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 78% 15%,color-mix(in srgb,var(--accent) 20%,transparent),transparent 32%);pointer-events:none}.footer-grid{position:relative;display:grid;grid-template-columns:1.3fr .8fr 1fr 1.05fr;gap:34px;padding:46px 0}.footer-logo-panel{display:inline-flex;align-items:center;justify-content:center;padding:12px 14px;margin-bottom:16px;border-radius:8px;background:#fff;box-shadow:0 14px 36px rgba(0,0,0,.28)}.footer-logo-panel img{width:210px}.footer-grid p{color:rgba(255,255,255,.76)}.footer-grid a{display:block;margin:0 0 8px;color:rgba(255,255,255,.82)}.footer-grid h3{margin:0 0 14px;color:#fff}.social-links{display:flex;gap:10px;margin-top:18px}.social-links a{display:grid;place-items:center;width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.08);color:#fff;font-weight:900}.footer-contact .button{display:inline-flex;margin-top:8px}@media(max-width:1180px){.service-grid{grid-template-columns:repeat(3,1fr)}.footer-grid{grid-template-columns:1fr 1fr}}@media(max-width:980px){.hero,.page-hero-grid,.visual-split,.visual-split.reverse,.contact-grid,.feature-layout,.featured-article{grid-template-columns:1fr}.hero-visual{max-width:620px}.card-grid,.related-grid,.news-grid,.service-detail-grid,.belief-grid,.faq-grid{grid-template-columns:repeat(2,1fr)}.timeline,.journey-grid{grid-template-columns:repeat(2,1fr)}.trust-grid{grid-template-columns:1fr 1fr}}@media(max-width:760px){.container{width:min(100% - 28px,var(--max))}.header-inner{grid-template-columns:auto auto;min-height:76px}.brand img{width:174px}.header-cta{display:none}.nav-toggle{display:inline-grid;justify-self:end;gap:4px;width:44px;height:42px;padding:10px;border:1px solid var(--line);border-radius:6px;background:#fff}.nav-toggle span{height:2px;background:#000}.site-nav{display:none;grid-column:1/-1;justify-self:stretch}.nav-open .site-nav{display:block}.nav-menu{flex-direction:column;align-items:flex-start;gap:14px;padding:14px 0 18px}.hero{min-height:auto;padding-top:42px}.hero:before{opacity:.22}.hero-visual{display:none}.hero h1,.page-hero h1{font-size:clamp(34px,10vw,48px)}.hero p,.page-hero p{font-size:17px}.section{padding:46px 0}.service-grid,.card-grid,.related-grid,.news-grid,.service-detail-grid,.belief-grid,.faq-grid,.benefit-grid,.trust-grid,.timeline,.journey-grid,.footer-grid{grid-template-columns:1fr}.contact-form{grid-template-columns:1fr}.cta-card,.newsletter-card{align-items:flex-start;flex-direction:column}.footer-logo-panel img{width:190px}}
CSS;
}

function robots(array $brand): string
{
    return "User-agent: *\nAllow: /\n\nSitemap: https://{$brand['domain']}/sitemap.xml\n";
}

function sitemap(array $brand): string
{
    $d = 'https://' . $brand['domain'];
    return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n  <url><loc>$d/</loc></url>\n  <url><loc>$d/about</loc></url>\n  <url><loc>$d/services</loc></url>\n  <url><loc>$d/news</loc></url>\n  <url><loc>$d/contact</loc></url>\n</urlset>\n";
}

function htaccess(): string
{
    return "Options -Indexes\nDirectoryIndex index.php\n<IfModule mod_rewrite.c>\nRewriteEngine On\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteCond %{REQUEST_FILENAME}\\.php -f\nRewriteRule ^(.+?)/?$ $1.php [L]\n</IfModule>\n";
}

function webConfig(): string
{
    return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<configuration><system.webServer><defaultDocument enabled=\"true\"><files><clear /><add value=\"index.php\" /><add value=\"index.html\" /></files></defaultDocument><directoryBrowse enabled=\"false\" /></system.webServer></configuration>\n";
}

function readme(string $slug, array $brand): string
{
    return "# {$brand['name']}\n\nProduction-ready lightweight PHP 8.3 website for {$brand['domain']}.\n\nDeploy the repository root directly to the Plesk domain folder. `index.php` must be in the domain root.\n\nPages: Home, About, Services, News, Contact.\n\n## Quality Process\n\n- `docs/website-audit.md`: running issue log. Log issues before fixing them.\n- `docs/competitive-benchmark.md`: visual, UX, and information architecture benchmark guide.\n- `docs/content-source-policy.md`: BTP-only factual content policy.\n- `docs/qos-checklist.md`: pre-deployment quality checklist.\n\nCompetitor sites may be used to judge design quality, service-page structure, and conversion flow. They must not be used as factual sources for BTP claims or service copy.\n";
}

function deployment(string $slug, array $brand): string
{
    $branch = 'deploy-' . $slug;
    return "# Deployment - {$brand['name']}\n\n## GitHub Push\n\n```powershell\ngit add .\ngit commit -m \"Update {$brand['short']} website\"\ngit push origin $branch\n```\n\n## Pre-Deployment QOS\n\nFrom the main repository, run:\n\n```powershell\npowershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1\n```\n\nReview `docs/website-audit.md`, `docs/competitive-benchmark.md`, `docs/content-source-policy.md`, and `docs/qos-checklist.md` before refreshing the deploy branch.\n\n## Plesk Git Deployment\n\n1. Open Plesk > Websites & Domains.\n2. Open Git for the target domain.\n3. Use the `$branch` repository branch for this site.\n4. Set deployment path to the domain root, not a nested `public_html` folder.\n5. Deploy repository.\n6. Confirm `index.php` exists directly in the domain folder.\n7. Test `/`, `/about`, `/services`, `/news`, and `/contact`.\n\n## Updates\n\nUse **Update from Remote**, then **Deploy HEAD Commit**.\n\n## Troubleshooting\n\n- 403.14 means `index.php` is missing from the served folder or the wrong deployment path is selected.\n- 404 on `/services` means the deploy did not include `services/index.php` or the wrong folder was deployed.\n- Check Plesk Logs for PHP warnings and IIS errors.\n- Verify asset paths resolve through the `asset()` helper and the domain root contains `assets`, `includes`, and the page files.\n";
}

function websiteAudit(string $slug, array $brand): string
{
    $date = '2026-06-03';
    return "# Website Audit - {$brand['name']}\n\n" .
        "This file is the running improvement log for {$brand['name']}. Before future website issues are fixed, log the issue here with the date, affected area, severity, planned correction, and verification result.\n\n" .
        "## Audit Protocol\n\n" .
        "- Log every discovered issue before applying the fix.\n" .
        "- Track broken assets, weak CTAs, outdated service descriptions, SEO gaps, design problems, deployment issues, accessibility gaps, and content accuracy problems.\n" .
        "- Keep entries factual. Do not invent metrics, certifications, ownership status, or proof points.\n" .
        "- After the fix is applied, update the same entry with the files changed and the verification performed.\n\n" .
        "## Current Improvement Log\n\n" .
        "### {$date} - Visual rhythm was too static and overly white\n" .
        "- Severity: High\n" .
        "- Affected area: Home, About, Services, News, Contact shared layout system\n" .
        "- Finding: Page sections relied too heavily on white backgrounds and card blocks, making the sites feel template-like instead of custom enterprise consulting websites.\n" .
        "- Planned correction: Alternate dark, light, gradient, image-led, trust, CTA, and footer sections with stronger visual movement.\n" .
        "- Fix applied: Updated the generated design system to include dark feature sections, light process sections, branded gradient industry sections, dark trust sections, and a redesigned dark footer.\n" .
        "- Verification: Regenerate site, lint PHP, smoke-test all routes/assets, and visually inspect local pages.\n\n" .
        "### {$date} - Footer logo visibility and footer content quality needed correction\n" .
        "- Severity: High\n" .
        "- Affected area: Footer include\n" .
        "- Finding: The previous footer repeated generic tagline/CTA content and risked poor logo visibility on dark backgrounds.\n" .
        "- Planned correction: Remove the generic footer CTA block, place the dark logo on a dedicated white logo panel, and add useful navigation, services, contact information, social links, and one Request Consultation CTA.\n" .
        "- Fix applied: Rebuilt the generated footer include with a visible logo panel and practical footer columns.\n" .
        "- Verification: Confirm logo displays in header/footer and footer no longer contains the removed generic tagline block.\n\n" .
        "### {$date} - Fake trust metrics and incorrect ownership claim\n" .
        "- Severity: High\n" .
        "- Affected area: Home trust and impact sections\n" .
        "- Finding: Invented metrics such as client counts, dollar amounts, retention percentages, and a Veteran-Owned Business claim were not verified by BTP documentation.\n" .
        "- Planned correction: Remove fake numbers and unverified ownership claims. Replace with methodology-based trust language.\n" .
        "- Fix applied: Removed business impact metrics and replaced trust content with dedicated expertise, structured delivery, scalable engagement, strategic guidance, long-term partnership, and brand-specific methods.\n" .
        "- Verification: Search generated files for removed claims and metrics.\n\n" .
        "### {$date} - Visuals were not service-specific enough\n" .
        "- Severity: Medium\n" .
        "- Affected area: SVG visual library\n" .
        "- Finding: Visuals were too similar across brands and did not sufficiently complement each service category.\n" .
        "- Planned correction: Generate brand-specific visual systems that support the service story.\n" .
        "- Fix applied: Updated generated SVG visuals by brand: procurement workflows for PraaS, roadmaps for TechAdvisors, security/risk visuals for SecuriSCOPE, support operations for ManageSP, cloud topology for CloudEXCELON, code pipelines for CodeIGNITE, and AI/data workflows for DatastAIsis.\n" .
        "- Verification: Confirm each site loads its generated SVG visual assets over HTTP.\n\n" .
        "### {$date} - CloudEXCELON deployment branch naming needed correction\n" .
        "- Severity: Medium\n" .
        "- Affected area: Git deployment branches and deployment documentation\n" .
        "- Finding: CloudEXCELON was deployed from `plesk-deploy`, but the desired branch name is `deploy-cloudexcelon`.\n" .
        "- Planned correction: Rename deployment branch to `deploy-cloudexcelon`, remove `plesk-deploy`, and update deployment documentation.\n" .
        "- Fix applied: Updated deployment documentation and branch workflow to use `deploy-cloudexcelon`; old `plesk-deploy` is removed during the final remote branch refresh.\n" .
        "- Verification: Confirm remote has `deploy-cloudexcelon` and no `plesk-deploy` branch.\n\n" .
        "### {$date} - Competitor benchmarking needed documented guardrails\n" .
        "- Severity: Medium\n" .
        "- Affected area: Creative direction, UX review, content governance, and SEO/AIO strategy\n" .
        "- Finding: Competitor comparison is useful for visual quality, navigation clarity, page flow, and service explanation standards, but it needed a clear rule that BTP site content must remain sourced from BTP-owned materials only.\n" .
        "- Planned correction: Add a competitive benchmark document and a content source policy for each site.\n" .
        "- Fix applied: Added `docs/competitive-benchmark.md` and `docs/content-source-policy.md` to the generated site root. Competitors are benchmarks for layout, UX, information architecture, and conversion quality only.\n" .
        "- Verification: Confirm generated docs exist in every site and no competitor factual claims are introduced into page copy.\n\n" .
        "### {$date} - QOS verification needed a repeatable repository gate\n" .
        "- Severity: High\n" .
        "- Affected area: PHP quality, route health, asset loading, Plesk readiness, accessibility, and content hygiene\n" .
        "- Finding: Visual and deployment changes needed a consistent verification process before refreshing deployment branches.\n" .
        "- Planned correction: Add a QOS checklist per site and a root verification script that lint-checks PHP, checks content/path hygiene, and smoke-tests site routes/assets locally.\n" .
        "- Fix applied: Added `docs/qos-checklist.md` to every generated site and introduced `tools/verify-sites.ps1` as the pre-deployment gate.\n" .
        "- Verification: Run `powershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1` before pushing deploy branches.\n\n" .
        "### {$date} - Plesk preview and reload behavior caused inconsistent loading perception\n" .
        "- Severity: High\n" .
        "- Affected area: Header include, navigation include, footer include, generated page links, asset helper, JavaScript reload handling\n" .
        "- Finding: Plesk preview serves the site under `/plesk-site-preview/{domain}/`, but root-relative links and assets can resolve outside the preview path. Browser scroll restoration can also reload the page at the previous scroll position, making the site appear to load directly into lower sections or the footer.\n" .
        "- Planned correction: Replace hardcoded root links with a dynamic `site_url()` helper, make `asset()` preview-aware, convert generated page links/forms to helper-based URLs, and reset scroll to the top on reload when no hash is present.\n" .
        "- Fix applied: Added preview-safe routing helpers, updated shared header/navigation/footer links, converted generated body links, and added reload scroll restoration handling in `assets/js/main.js`.\n" .
        "- Verification: Regenerate sites, confirm active HTML/PHP contains no hardcoded root internal links, lint PHP, and smoke-test all routes/assets.\n\n";
}

function competitorSet(string $slug): array
{
    return match ($slug) {
        'praas' => ['CDW', 'Insight', 'SHI', 'Microsoft partner procurement pages'],
        'techadvisors' => ['Accenture technology consulting', 'Deloitte technology strategy', 'Slalom advisory', 'CDW advisory services'],
        'securiscope' => ['CrowdStrike', 'Palo Alto Networks', 'Arctic Wolf', 'Microsoft Security'],
        'managesp' => ['Rackspace managed services', 'CDW managed services', 'Ntiva', 'enterprise MSP operations pages'],
        'cloudexcelon' => ['Rackspace cloud services', 'CDW cloud', 'Insight cloud', 'Microsoft Azure partner pages'],
        'codeignite' => ['Thoughtworks', 'Slalom Build', 'EPAM', 'Accenture software engineering'],
        'datastaisis' => ['Microsoft Fabric', 'Databricks', 'Snowflake', 'Accenture data and AI'],
        default => ['enterprise consulting websites', 'Microsoft partner websites', 'managed technology service providers'],
    };
}

function competitiveBenchmark(string $slug, array $brand): string
{
    $competitors = implode(', ', competitorSet($slug));
    return "# Competitive Benchmark - {$brand['name']}\n\n" .
        "Purpose: keep {$brand['name']} visually and structurally competitive with enterprise technology websites while preserving BTP-owned messaging and factual accuracy.\n\n" .
        "## Benchmark Scope\n\n" .
        "Compare against: {$competitors}.\n\n" .
        "Use competitor and peer websites only to evaluate:\n\n" .
        "- Above-the-fold clarity and first-five-second comprehension.\n" .
        "- Visual hierarchy, section rhythm, contrast, and premium enterprise polish.\n" .
        "- Navigation clarity, page length, CTA placement, and scanning behavior.\n" .
        "- Service explanation depth, FAQ quality, and information architecture.\n" .
        "- Trust-building patterns that do not rely on invented metrics.\n" .
        "- Mobile layout quality, footer clarity, and contact conversion flow.\n\n" .
        "## Content Guardrail\n\n" .
        "Competitor websites are not approved sources for BTP factual copy. Do not copy competitor wording, claims, service descriptions, statistics, client names, certifications, pricing, or proof points.\n\n" .
        "Approved BTP content sources are documented in `docs/content-source-policy.md`. If a claim is not supported by BTP materials, write conservative value-focused copy instead of inventing specifics.\n\n" .
        "## Brand-Specific Comparison Focus\n\n" .
        "- Primary revenue lane: {$brand['tagline']}\n" .
        "- Buyer question to answer quickly: How does {$brand['short']} help a decision maker reduce risk, save time, or improve execution?\n" .
        "- Visual standard: the page should feel custom-built for {$brand['short']}, not like a generic card template with swapped text.\n" .
        "- Information standard: service cards should define what can be bought, who it helps, problems solved, deliverables, and next steps.\n\n" .
        "## Review Checklist\n\n" .
        "- Hero explains the service lane in under five seconds.\n" .
        "- Primary CTA is visible in under one second.\n" .
        "- Service cards are specific to {$brand['short']} and not generic consulting language.\n" .
        "- Visuals support the service story instead of decorating the page.\n" .
        "- Process section explains how a buyer moves from inquiry to next step.\n" .
        "- Trust section uses methods, clarity, and delivery discipline instead of fake numbers.\n" .
        "- Related BTP Solutions keep visitors inside the BTP ecosystem.\n" .
        "- Footer logo remains visible and the footer includes useful contact paths.\n" .
        "- Mobile page is readable, compact, and easy to navigate.\n\n" .
        "## Update Rule\n\n" .
        "When the benchmark exposes a gap, log it first in `docs/website-audit.md`, then update the site using BTP-owned content only. After the update, run the QOS checklist and verification script from the main repo.\n";
}

function qosChecklist(string $slug, array $brand): string
{
    return "# QOS Checklist - {$brand['name']}\n\n" .
        "QOS for this website means reliability, performance, deployment readiness, accessibility, SEO/AIO clarity, and maintainable lead-generation quality.\n\n" .
        "## Pre-Deployment Gate\n\n" .
        "Run from the main repository before refreshing deploy branches:\n\n" .
        "```powershell\npowershell -ExecutionPolicy Bypass -File tools/verify-sites.ps1\n```\n\n" .
        "The verification gate checks PHP linting, route availability, asset availability, content hygiene, and common Plesk path issues.\n\n" .
        "## Route And Asset Health\n\n" .
        "- `/`, `/about`, `/services`, `/news`, and `/contact` load without 404s.\n" .
        "- `/docs/website-audit.md`, `/docs/competitive-benchmark.md`, `/docs/qos-checklist.md`, and `/docs/content-source-policy.md` exist in the generated site root.\n" .
        "- `/assets/css/style.css` loads.\n" .
        "- `/assets/js/main.js` loads.\n" .
        "- `/assets/images/logo.svg` loads and remains readable in header and footer.\n" .
        "- Service visuals load from `/assets/images/*.svg` with no broken image references.\n" .
        "- Route wrappers such as `/services/index.php` are present for IIS/Plesk friendly URLs.\n\n" .
        "## Content And Trust Hygiene\n\n" .
        "- No lorem ipsum, placeholder sections, fake metrics, fake certifications, or unverified ownership claims.\n" .
        "- Copy is sourced from BTP-owned websites, BTP documents, or conservative service language derived from BTP materials.\n" .
        "- Competitor research informs structure and quality only, not factual content.\n" .
        "- CTA wording matches {$brand['short']} and guides the user to a contact conversation.\n" .
        "- Contact form fields use CRM-ready names: `full_name`, `company_name`, `email`, `phone`, `message`, `brand`.\n\n" .
        "## Performance And Accessibility\n\n" .
        "- PHP 8.3 compatible with no database dependency.\n" .
        "- No React, Next.js, Node runtime, WordPress, or heavy animation libraries.\n" .
        "- SVG visuals are lightweight and loaded from the local asset folder.\n" .
        "- Non-critical visuals use lazy loading where applicable.\n" .
        "- Mobile navigation opens and closes with JavaScript enabled.\n" .
        "- Headings follow a clear hierarchy and body text has readable contrast.\n" .
        "- Forms have labels and focus states.\n\n" .
        "## Plesk Readiness\n\n" .
        "- `index.php` exists directly in the deploy branch root.\n" .
        "- Do not deploy a nested `public_html` folder.\n" .
        "- `.htaccess` and `web.config` are present for Apache/IIS-style Plesk environments.\n" .
        "- If a deployed domain shows `403.14`, confirm Plesk is pointed at the branch root and `index.php` is present.\n" .
        "- If `/services` shows `404`, confirm `services/index.php` exists and the correct deploy branch was selected.\n\n" .
        "## Owner Review\n\n" .
        "Before Plesk deployment, visually check the homepage and child pages against the benchmark doc and ask whether a CIO, CTO, procurement leader, or business owner would understand the offer and trust the next step.\n";
}

function contentSourcePolicy(string $slug, array $brand): string
{
    return "# Content Source Policy - {$brand['name']}\n\n" .
        "This policy protects BTP from inaccurate claims while still allowing the sites to improve visually and strategically against competitor standards.\n\n" .
        "## Approved Content Sources\n\n" .
        "- BTP-owned websites, including the existing PraaS website and BTP Innovations public web properties.\n" .
        "- BTP Desktop folder assets, documents, PDFs, presentations, Word documents, service descriptions, logos, and marketing materials.\n" .
        "- Existing generated BTP website repositories and their documented audit findings.\n" .
        "- Conservative service copy derived from the approved BTP materials when the exact wording needs to be clearer for customers.\n\n" .
        "## Not Approved For Factual Copy\n\n" .
        "- Competitor websites.\n" .
        "- Generic marketing templates.\n" .
        "- AI-invented claims, numbers, awards, certifications, partnerships, case studies, or ownership status.\n" .
        "- Placeholder testimonials or performance metrics.\n\n" .
        "## Competitor Use Rule\n\n" .
        "Competitors may be reviewed for design quality, visual rhythm, service-page structure, CTA strategy, and information architecture. They must not be used as the factual source for what BTP claims to do, who BTP has served, what BTP has achieved, or what credentials BTP holds.\n\n" .
        "## Claim Standard\n\n" .
        "Every specific claim should be traceable to BTP-owned materials. If the source is unclear, keep the wording practical and non-specific, such as \"structured delivery,\" \"vendor coordination,\" \"roadmap planning,\" or \"support transition,\" rather than inventing a result.\n\n" .
        "## {$brand['short']} Content Boundaries\n\n" .
        "- Service lane: {$brand['tagline']}\n" .
        "- Approved service capabilities: " . implode(', ', $brand['capabilities']) . ".\n" .
        "- Approved outcome language: " . implode(', ', $brand['outcomes']) . ".\n" .
        "- Approved deliverable language: " . implode(', ', $brand['deliverables']) . ".\n\n" .
        "## Change Process\n\n" .
        "Before changing service copy, log the issue in `docs/website-audit.md`, identify the BTP source used, update the page, then run the QOS verification gate.\n";
}

function designSystem(): string
{
    return "# BTP Design System\n\nTypography: Segoe UI/Inter-style system font, strong enterprise headlines, readable body copy, no viewport-scaled letter spacing.\n\nPalette: black `#000000`, white `#FFFFFF`, blue `#2AA8FF`, deep blue `#0067F0`, red `#FF3B30`, plus controlled brand accent tokens.\n\nAsset system: all CSS, JavaScript, logos, visuals, internal links, and form actions resolve through PHP `asset()` and `site_url()` helpers so the same files work on the live domain root and under Plesk preview paths.\n\nButtons: red primary conversion CTA, blue secondary service action, black-outline discovery action.\n\nCards: 8px radius, light border, subtle shadow, compact enterprise spacing, and color-accented service tops.\n\nSpacing: shorter pages, intentional whitespace, compact card grids, and visual split sections.\n\nHero system: concise executive headline, proof chips, and a brand-specific SVG service visual.\n\nContent system: every site includes hero, service cards, benefits/trust, visual process, ecosystem links, final CTA, News cards, and one lead form.\n\nForms: one lead form only, with CRM-ready field names: `full_name`, `company_name`, `email`, `phone`, `message`, `brand`.\n\nBenchmarking: competitor and peer websites are reviewed for visual quality, UX flow, information architecture, CTA strategy, and scanability only. Page copy and factual claims must come from BTP-owned sources.\n\nQOS: run `tools/verify-sites.ps1` before pushing deploy branches. Each site includes `docs/website-audit.md`, `docs/competitive-benchmark.md`, `docs/qos-checklist.md`, and `docs/content-source-policy.md`.\n";
}

function masterReadme(array $brands): string
{
    $lines = ["# BTP Brand Websites", "", "Separate deploy-root PHP websites generated from one BTP design system.", "", "Each site includes audit, competitive benchmark, content-source, and QOS documentation under `docs/`.", ""];
    foreach ($brands as $slug => $brand) {
        $lines[] = "- `sites/$slug`: {$brand['name']} ({$brand['domain']})";
    }
    return implode("\n", $lines) . "\n";
}

echo "Generated " . count($brands) . " production websites in $outputRoot\n";
