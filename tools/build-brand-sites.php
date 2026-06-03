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
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }
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

    foreach (['png', 'svg'] as $ext) {
        $logo = $logoRoot . DIRECTORY_SEPARATOR . $slug . '.' . $ext;
        if (is_file($logo)) {
            if (!is_dir($siteRoot . '/assets/images')) {
                mkdir($siteRoot . '/assets/images', 0777, true);
            }
            copy($logo, $siteRoot . '/assets/images/logo.' . $ext);
        }
    }

    foreach (['index' => 'Home', 'about' => 'About', 'services' => 'Services', 'contact' => 'Contact'] as $page => $label) {
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
}

write_file($outputRoot . DIRECTORY_SEPARATOR . 'DESIGN_SYSTEM.md', designSystem());
write_file($outputRoot . DIRECTORY_SEPARATOR . 'README.md', masterReadme($brands));

function page(string $slug, array $brand, string $page, array $brands): string
{
    $titles = [
        'index' => $brand['name'] . ' | ' . $brand['headline'],
        'about' => 'About ' . $brand['name'] . ' | BTP Innovations',
        'services' => $brand['name'] . ' Services | ' . $brand['tagline'],
        'contact' => 'Contact ' . $brand['name'] . ' | Start a Conversation',
    ];
    $descriptions = [
        'index' => $brand['summary'],
        'about' => $brand['name'] . ' is part of the BTP Innovations ecosystem, helping clients solve technology problems through advisory, execution, and lifecycle support.',
        'services' => 'Explore ' . $brand['name'] . ' capabilities, deliverables, engagement process, and business outcomes.',
        'contact' => 'Contact ' . $brand['name'] . ' to discuss business needs, service questions, assessments, sourcing, support, or project planning.',
    ];
    $body = match ($page) {
        'index' => homePage($slug, $brand, $brands),
        'about' => aboutPage($brand, $brands),
        'services' => servicesPage($brand, $brands),
        'contact' => contactPage($brand),
        default => '',
    };
    return "<?php\n\$pageTitle = " . var_export($titles[$page], true) . ";\n\$metaDescription = " . var_export($descriptions[$page], true) . ";\n\$pagePath = " . var_export($page === 'index' ? '/' : '/' . $page, true) . ";\nrequire __DIR__ . '/includes/header.php';\n?>\n" . $body . "\n<?php require __DIR__ . '/includes/footer.php'; ?>\n";
}

function homePage(string $slug, array $brand, array $brands): string
{
    return hero($brand, $brand['cta'], '/contact') . '
<section class="section intro-band"><div class="container executive-grid"><div><p class="eyebrow">Business Model</p><h2>' . h(revenueHeadline($brand)) . '</h2><p>' . h($brand['audience']) . '</p></div>' . revenueCards($brand) . '</div></section>
<section class="section services-preview"><div class="container split-intro"><div class="section-heading sticky-heading"><p class="eyebrow">Core Capabilities</p><h2>Specific service areas built around measurable outcomes.</h2><p>' . h($brand['name']) . ' is structured to reduce uncertainty, control handoffs, and turn technology needs into decisions, deliverables, and accountable next steps.</p><a class="button button-secondary" href="/services">View Services <span aria-hidden="true">&rarr;</span></a></div><div class="card-grid">' . cardList($brand['capabilities'], $brand) . '</div></div></section>
<section class="section journey-band"><div class="container"><div class="section-heading centered"><p class="eyebrow">Customer Journey</p><h2>Built for buyers who need clarity before commitment.</h2><p>Most enterprise decisions are not instant purchases. The site flow supports learning, trust, discovery, proposal alignment, and then a practical sale.</p></div><div class="journey-grid">' . journeyList() . '</div></div></section>
<section class="section process-band"><div class="container"><div class="section-heading centered"><p class="eyebrow">Engagement Process</p><h2>From first conversation to accountable next steps.</h2></div><div class="process-grid">' . processList($brand['process'], $brand) . '</div></div></section>
<section class="section trust-band"><div class="container proof-grid">' . proofList($brand['outcomes']) . '</div></section>
' . relatedSolutions($brand, $brands) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Step</p><h2>Ready to make the technology path clearer?</h2><p>' . h($brand['summary']) . '</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . ' <span aria-hidden="true">&rarr;</span></a></div></section>';
}

function aboutPage(array $brand, array $brands): string
{
    return pageHero('About ' . $brand['name'], $brand['summary']) . '
<section class="section"><div class="container two-column"><div><p class="eyebrow">Company Role</p><h2>Part of one BTP platform, focused on a specific customer problem.</h2></div><div><p>' . h($brand['name']) . ' operates inside the BTP Innovations ecosystem, where advisory, sourcing, engineering, implementation, managed services, and optimization connect through one coordinated delivery model.</p><p>' . h($brand['audience']) . '</p><p>The advantage is not just access to a service. It is access to a coordinated BTP model that can evaluate the need, bring in the right specialists, connect partner options, and support the lifecycle after the first decision is made.</p></div></div></section>
<section class="section muted"><div class="container"><div class="section-heading centered"><p class="eyebrow">Why Clients Choose BTP</p><h2>Advisory-led, execution-ready, and lifecycle aware.</h2></div><div class="card-grid">' . aboutCards() . '</div></div></section>
<section class="section"><div class="container two-column"><div><p class="eyebrow">Market Position</p><h2>Smaller than the global integrators, more coordinated than a one-off vendor.</h2></div><div><p>Large providers often bring scale, product depth, and broad catalogs. BTP is positioned for organizations that need a practical advisor to clarify requirements, compare options, coordinate specialists, and keep ownership visible from decision through delivery.</p><p>' . h($brand['name']) . ' fits that model by focusing on ' . h(strtolower($brand['tagline'])) . '</p></div></div></section>
' . relatedSolutions($brand, $brands) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Talk With BTP</p><h2>Get clear guidance before the next decision becomes expensive.</h2><p>' . h($brand['tagline']) . '</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function servicesPage(array $brand, array $brands): string
{
    return pageHero($brand['short'] . ' Services', $brand['tagline']) . '
<section class="section"><div class="container two-column"><div><p class="eyebrow">What This Service Is</p><h2>' . h($brand['headline']) . '</h2></div><div><p>' . h($brand['summary']) . '</p><p><strong>Who it helps:</strong> ' . h($brand['audience']) . '</p></div></div></section>
<section class="section muted"><div class="container"><div class="section-heading centered"><p class="eyebrow">Problems Solved</p><h2>Issues that create cost, risk, delay, or decision fatigue.</h2></div><div class="card-grid">' . cardList($brand['problems'], $brand, 'problem') . '</div></div></section>
<section class="section"><div class="container"><div class="section-heading centered"><p class="eyebrow">Core Capabilities</p><h2>Service areas with practical deliverables.</h2></div><div class="detail-grid">' . detailList($brand['capabilities'], $brand['deliverables'], $brand) . '</div></div></section>
<section class="section outcome-section"><div class="container executive-grid"><div><p class="eyebrow">How Revenue Is Created</p><h2>' . h(revenueHeadline($brand)) . '</h2><p>The commercial path is clear: advisory, delivery, support, sourcing, assessment, or implementation work that solves a defined business need.</p></div>' . revenueCards($brand) . '</div></section>
<section class="section process-band"><div class="container"><div class="section-heading centered"><p class="eyebrow">Engagement Process</p><h2>How BTP moves from need to next step.</h2></div><div class="process-grid">' . processList($brand['process'], $brand) . '</div></div></section>
<section class="section trust-band"><div class="container proof-grid">' . proofList($brand['outcomes']) . '</div></section>
' . faqSection($brand) . '
' . relatedSolutions($brand, $brands) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Steps</p><h2>Discuss the service path that fits your environment.</h2><p>Bring your current goals, constraints, vendors, systems, or project questions. BTP will help clarify the path forward.</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function contactPage(array $brand): string
{
    return pageHero('Contact ' . $brand['name'], 'Start with one business inquiry. BTP will route the conversation to the right advisory, sourcing, engineering, or support path.') . '
<section class="section contact-section"><div class="container contact-grid"><form id="btp-lead-form" class="contact-form" method="post" action="/contact.php"><input type="hidden" name="brand" value="' . h($brand['name']) . '"><label for="full_name">Name<input id="full_name" name="full_name" autocomplete="name" required></label><label for="company_name">Company<input id="company_name" name="company_name" autocomplete="organization"></label><label for="email">Email<input id="email" type="email" name="email" autocomplete="email" required></label><label for="phone">Phone<input id="phone" name="phone" autocomplete="tel"></label><label class="full" for="message">Message<textarea id="message" name="message" rows="6" required></textarea></label><!-- TODO: Connect this form to Microsoft Forms, Power Automate, Dynamics 365, HubSpot, Salesforce, or SMTP/PHP mail when production routing is selected. --><button class="button button-primary full" type="submit">' . h($brand['cta']) . '</button></form><aside class="contact-panel"><h2>Business Inquiries</h2><p>' . h($brand['tagline']) . '</p><p><strong>Email</strong><br>info@btpinnovations.com</p><p><strong>Phone</strong><br>(800) 781-6632</p><p><strong>Address</strong><br>276 5th Avenue Suite 704<br>New York, NY 10001</p></aside></div></section>';
}

function hero(array $brand, string $cta, string $href): string
{
    $visual = array_slice($brand['capabilities'], 0, 4);
    return '<section class="hero hero-home"><div class="hero-copy"><p class="eyebrow">' . h($brand['name']) . '</p><h1>' . h($brand['headline']) . '</h1><p>' . h($brand['summary']) . '</p><div class="actions"><a class="button button-primary" href="' . h($href) . '">' . h($cta) . ' <span aria-hidden="true">&rarr;</span></a><a class="button button-outline" href="/services">Explore Services <span aria-hidden="true">&rarr;</span></a></div><div class="hero-proof"><span>Advisory-first</span><span>Vendor-aware</span><span>Execution-ready</span></div></div><div class="hero-visual" aria-hidden="true"><div class="visual-panel"><div class="visual-header"><span></span><span></span><span></span></div><div class="visual-map"><strong>' . h($brand['short']) . '</strong>' . implode('', array_map(fn($x) => '<em>' . h($x) . '</em>', $visual)) . '</div><div class="visual-footer"><span>Discover</span><span>Decide</span><span>Deliver</span></div></div></div></section>';
}

function pageHero(string $title, string $copy): string
{
    return '<section class="page-hero"><div class="container"><p class="eyebrow">BTP Innovations</p><h1>' . h($title) . '</h1><p>' . h($copy) . '</p></div></section>';
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
        $out .= '<article class="detail-card"><h3>' . h($capability) . '</h3><p>' . h(itemDescription($brand, $capability, 'capability')) . '</p><ul><li>' . h($deliverable) . '</li><li>Ownership, risk, and dependency notes</li><li>Recommended next step for decision makers</li></ul></article>';
    }
    return $out;
}

function processList(array $items, array $brand): string
{
    $html = '';
    foreach ($items as $i => $item) {
        $html .= '<article><span>0' . ($i + 1) . '</span><h3>' . h($item) . '</h3><p>' . h(processDescription($brand, $item)) . '</p></article>';
    }
    return $html;
}

function proofList(array $items): string
{
    return implode('', array_map(fn($x) => '<article><strong>' . h($x) . '</strong><span>Outcome-focused support for business and technology leaders.</span></article>', $items));
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
    return "$short turns $item into a structured engagement with discovery, fit analysis, deliverables, and a recommended path forward.";
}

function processDescription(array $brand, string $item): string
{
    return $brand['short'] . ' uses this step to keep stakeholders, requirements, vendors, technical dependencies, and business outcomes aligned.';
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

function relatedSolutions(array $brand, array $brands): string
{
    $cards = '';
    foreach ($brand['related'] as $slug) {
        $other = $brands[$slug];
        $cards .= '<article class="related-card"><p class="eyebrow">' . h($other['short']) . '</p><h3>' . h($other['tagline']) . '</h3><a href="https://' . h($other['domain']) . '/">' . h($other['name']) . ' <span aria-hidden="true">&rarr;</span></a></article>';
    }
    return '<section class="section related-solutions"><div class="container"><div class="section-heading centered"><p class="eyebrow">Related BTP Solutions</p><h2>Keep the work inside one connected ecosystem.</h2></div><div class="related-grid">' . $cards . '</div></div></section>';
}

function headerInclude(): string
{
    return <<<'PHP'
<?php
$brand = require __DIR__ . '/site.php';
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
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
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/main.js" defer></script>
  <?php require __DIR__ . '/analytics.php'; ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="/" aria-label="<?= e($brand['name']) ?> home"><img src="/assets/images/logo.svg" alt="<?= e($brand['name']) ?> logo"></a>
    <?php require __DIR__ . '/navigation.php'; ?>
    <a class="button button-primary header-cta" href="/contact"><?= e($brand['cta']) ?></a>
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
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/services">Services</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
</nav>
PHP;
}

function footerInclude(): string
{
    return <<<'PHP'
</main>
<footer class="site-footer">
  <section class="footer-cta">
    <div class="container cta-card">
      <div>
        <p class="eyebrow">BTP Innovations</p>
        <h2><?= e($brand['tagline']) ?></h2>
      </div>
      <a class="button button-primary" href="/contact"><?= e($brand['cta']) ?></a>
    </div>
  </section>
  <div class="container footer-grid">
    <div><img src="/assets/images/logo.svg" alt="<?= e($brand['name']) ?> logo"><p><?= e($brand['summary']) ?></p></div>
    <div><h3>Pages</h3><a href="/">Home</a><a href="/about">About</a><a href="/services">Services</a><a href="/contact">Contact</a></div>
    <div><h3>Contact</h3><p>info@btpinnovations.com<br>(800) 781-6632</p><p>276 5th Avenue Suite 704<br>New York, NY 10001</p></div>
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
const toggle = document.querySelector('.nav-toggle');
toggle?.addEventListener('click', () => {
  const isOpen = document.body.classList.toggle('nav-open');
  toggle.setAttribute('aria-expanded', String(isOpen));
});
JS;
}

function css(array $brand): string
{
    $accent = $brand['accent'];
    return <<<CSS
:root{--black:#000;--white:#fff;--blue:#2aa8ff;--blue-deep:#0067f0;--red:#ff3b30;--ink:#111827;--muted:#566172;--line:#e4e9f0;--surface:#f5f8fc;--surface-2:#eaf6ff;--accent:$accent;--shadow:0 18px 48px rgba(15,23,42,.12);--radius:8px;--max:1200px}*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;color:var(--ink);background:#fff;font-family:"Segoe UI",Inter,Arial,sans-serif;line-height:1.55}body.nav-open{overflow:hidden}a{color:inherit;text-decoration:none}img{display:block;max-width:100%;height:auto}.container{width:min(100% - 40px,var(--max));margin-inline:auto}.skip-link{position:absolute;left:-999px}.skip-link:focus{left:12px;top:12px;z-index:1000;padding:10px 14px;color:#fff;background:#000}.site-header{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);border-bottom:1px solid var(--line);backdrop-filter:blur(16px)}.header-inner{display:grid;grid-template-columns:auto 1fr auto auto;align-items:center;gap:24px;min-height:88px}.brand img{width:clamp(150px,14vw,210px)}.site-nav{justify-self:center}.nav-menu{display:flex;gap:30px;align-items:center;padding:0;margin:0;list-style:none}.nav-menu a{position:relative;font-size:15px;font-weight:750}.nav-menu a:hover:after{content:"";position:absolute;left:0;right:0;bottom:-10px;height:2px;background:var(--red)}.button{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:12px 18px;border-radius:6px;font-weight:850;line-height:1.15}.button-primary{color:#fff;background:var(--red);box-shadow:0 12px 28px rgba(255,59,48,.22)}.button-secondary{color:#fff;background:var(--blue-deep);box-shadow:0 12px 26px rgba(0,103,240,.2)}.button-outline{border:1px solid #151515;background:#fff}.nav-toggle{display:none}.hero{position:relative;display:grid;grid-template-columns:minmax(0,1fr) minmax(360px,440px);gap:48px;align-items:center;min-height:620px;padding:clamp(58px,7vw,90px) max(24px,calc((100vw - var(--max))/2));overflow:hidden;background:linear-gradient(112deg,#fff 0%,#fff 52%,#edf8ff 100%)}.hero:after{content:"";position:absolute;right:-120px;top:80px;width:420px;height:420px;border:1px solid rgba(42,168,255,.18);border-radius:50%;pointer-events:none}.hero h1,.page-hero h1{max-width:850px;margin:0 0 18px;color:#000;font-size:clamp(38px,5.1vw,64px);line-height:1.05;letter-spacing:0}.hero p,.page-hero p{max-width:720px;margin:0;color:#1f2937;font-size:clamp(18px,1.8vw,20px)}.eyebrow{display:inline-flex;align-items:center;gap:12px;margin:0 0 14px;color:var(--red);font-size:13px;font-weight:900;text-transform:uppercase}.eyebrow:after{content:"";width:48px;height:2px;background:var(--red)}.actions{display:flex;flex-wrap:wrap;gap:14px;margin-top:28px}.hero-proof{display:flex;flex-wrap:wrap;gap:10px;margin-top:28px}.hero-proof span{padding:8px 10px;border:1px solid var(--line);border-radius:999px;background:#fff;color:#243044;font-size:13px;font-weight:800}.hero-visual{position:relative;z-index:1}.visual-panel{padding:20px;border:1px solid rgba(42,168,255,.25);border-radius:12px;background:rgba(255,255,255,.88);box-shadow:var(--shadow)}.visual-header{display:flex;gap:7px;margin-bottom:18px}.visual-header span{width:10px;height:10px;border-radius:50%;background:var(--line)}.visual-header span:nth-child(2){background:var(--blue)}.visual-header span:nth-child(3){background:var(--red)}.visual-map{display:grid;grid-template-columns:1fr 1fr;gap:14px;padding:18px;border-radius:10px;background:linear-gradient(145deg,#06101e,#0b2d4c);color:#fff}.visual-map strong{grid-column:1/-1;padding:16px;border:1px solid rgba(255,255,255,.14);border-radius:8px;background:rgba(255,255,255,.08);font-size:22px}.visual-map em{min-height:78px;padding:14px;border:1px solid rgba(255,255,255,.12);border-radius:8px;background:rgba(255,255,255,.06);font-style:normal;font-weight:750}.visual-footer{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:14px}.visual-footer span{padding:10px;border-radius:8px;background:var(--surface);text-align:center;font-size:13px;font-weight:850}.section{padding:clamp(58px,6.5vw,88px) 0}.muted{background:var(--surface)}.page-hero{padding:clamp(68px,8vw,104px) 0;background:linear-gradient(110deg,#fff,#edf8ff)}.two-column,.split-intro,.contact-grid,.executive-grid{display:grid;grid-template-columns:.82fr 1.18fr;gap:50px;align-items:start}.section h2{margin:0 0 16px;color:#000;font-size:clamp(30px,3.7vw,46px);line-height:1.1}.section h3{margin:0 0 10px;color:#000;line-height:1.18}.section p{color:var(--muted)}.section-heading{max-width:640px}.sticky-heading{position:sticky;top:118px}.section-heading.centered{max-width:790px;margin:0 auto 30px;text-align:center}.section-heading.centered .eyebrow{justify-content:center}.card-grid,.detail-grid,.related-grid,.faq-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}.process-grid,.journey-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:16px}.revenue-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.service-card,.detail-card,.related-card,.contact-form,.contact-panel,.cta-card,.process-grid article,.proof-grid article,.revenue-grid article,.journey-grid article,.faq-grid article{padding:24px;border:1px solid var(--line);border-radius:var(--radius);background:#fff;box-shadow:0 12px 32px rgba(15,23,42,.07)}.service-card,.detail-card,.related-card,.revenue-grid article,.faq-grid article{transition:transform .18s ease,box-shadow .18s ease}.service-card:hover,.detail-card:hover,.related-card:hover,.revenue-grid article:hover,.faq-grid article:hover{transform:translateY(-3px);box-shadow:var(--shadow)}.service-icon,.process-grid span,.revenue-grid span{display:inline-grid;place-items:center;min-width:44px;height:38px;margin-bottom:14px;color:#fff;background:var(--accent);border-radius:8px;font-size:13px;font-weight:900}.detail-card ul{padding-left:20px;color:var(--muted)}.journey-band{background:linear-gradient(180deg,#fff,var(--surface))}.journey-grid article{box-shadow:none}.journey-grid span{display:block;margin-bottom:8px;color:#005bd8;font-weight:900}.process-band{background:#000;color:#fff}.process-band h2,.process-band p{color:#fff}.process-grid article{background:#050505;border-color:#242424}.trust-band{background:var(--surface)}.proof-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:#000}.proof-grid article{border:0;border-radius:0;background:#050505;color:#fff}.proof-grid strong{display:block;font-size:21px;line-height:1.15}.proof-grid span{color:rgba(255,255,255,.72)}.related-card a{display:inline-flex;margin-top:12px;color:#005bd8;font-weight:900}.final-cta{background:#000}.cta-card{display:flex;justify-content:space-between;align-items:center;gap:28px}.final-cta .cta-card,.footer-cta .cta-card{color:#fff;background:linear-gradient(100deg,#000,#062b4c);border-color:#1f2937}.final-cta h2,.final-cta p,.footer-cta h2,.footer-cta p{color:#fff}.contact-form{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}label{display:grid;gap:8px;font-weight:750}input,textarea{width:100%;padding:12px 14px;font:inherit;border:1px solid #cbd5e1;border-radius:6px}input:focus,textarea:focus{outline:3px solid rgba(42,168,255,.2);border-color:var(--blue-deep)}.full{grid-column:1/-1}.site-footer{color:#fff;background:#050505}.footer-cta{padding:44px 0}.footer-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:36px;padding:44px 0}.footer-grid img{width:170px}.footer-grid a{display:block;margin:0 0 8px;color:rgba(255,255,255,.78)}@media(max-width:1100px){.hero{grid-template-columns:1fr}.hero-visual{max-width:520px}.process-grid,.journey-grid{grid-template-columns:repeat(3,1fr)}.card-grid,.detail-grid,.related-grid,.faq-grid,.revenue-grid{grid-template-columns:repeat(2,1fr)}}@media(max-width:820px){.container{width:min(100% - 28px,var(--max))}.header-inner{grid-template-columns:auto auto;min-height:78px}.brand img{width:150px}.header-cta{display:none}.nav-toggle{display:inline-grid;gap:4px;justify-self:end;width:44px;height:42px;padding:10px;border:1px solid var(--line);border-radius:6px;background:#fff}.nav-toggle span{height:2px;background:#000}.site-nav{display:none;grid-column:1/-1;justify-self:stretch}.nav-open .site-nav{display:block}.nav-menu{flex-direction:column;align-items:flex-start;padding:16px 0}.hero,.two-column,.split-intro,.contact-grid,.executive-grid,.cta-card,.footer-grid{grid-template-columns:1fr}.hero{min-height:auto;padding-top:48px}.hero-visual{display:none}.sticky-heading{position:static}.card-grid,.detail-grid,.related-grid,.process-grid,.journey-grid,.proof-grid,.revenue-grid,.faq-grid{grid-template-columns:1fr}.contact-form{grid-template-columns:1fr}.hero h1,.page-hero h1{font-size:clamp(34px,10vw,50px)}.hero p,.page-hero p{font-size:17px}.section{padding:54px 0}.cta-card{align-items:flex-start}}
CSS;
}

function robots(array $brand): string
{
    return "User-agent: *\nAllow: /\n\nSitemap: https://{$brand['domain']}/sitemap.xml\n";
}

function sitemap(array $brand): string
{
    $d = 'https://' . $brand['domain'];
    return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n  <url><loc>$d/</loc></url>\n  <url><loc>$d/about</loc></url>\n  <url><loc>$d/services</loc></url>\n  <url><loc>$d/contact</loc></url>\n</urlset>\n";
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
    return "# {$brand['name']}\n\nProduction-ready lightweight PHP 8.3 website for {$brand['domain']}.\n\nDeploy the repository root directly to the Plesk domain folder. `index.php` must be in the domain root.\n\nPages: Home, About, Services, Contact.\n";
}

function deployment(string $slug, array $brand): string
{
    $branch = $slug === 'cloudexcelon' ? 'plesk-deploy' : 'deploy-' . $slug;
    return "# Deployment - {$brand['name']}\n\n## GitHub Push\n\n```powershell\ngit add .\ngit commit -m \"Update {$brand['short']} website\"\ngit push origin $branch\n```\n\n## Plesk Git Deployment\n\n1. Open Plesk > Websites & Domains.\n2. Open Git for the target domain.\n3. Use the `$branch` repository branch for this site.\n4. Set deployment path to the domain root, not a nested `public_html` folder.\n5. Deploy repository.\n6. Confirm `index.php` exists directly in the domain folder.\n7. Test `/`, `/about`, `/services`, and `/contact`.\n\n## Updates\n\nUse **Update from Remote**, then **Deploy HEAD Commit**.\n\n## Troubleshooting\n\n- 403.14 means `index.php` is missing from the served folder or the wrong deployment path is selected.\n- 404 on `/services` means the deploy did not include `services/index.php` or the wrong folder was deployed.\n- Check Plesk Logs for PHP warnings and IIS errors.\n- Verify asset paths start with `/assets/` and the domain root contains `assets`, `includes`, and the page files.\n";
}

function designSystem(): string
{
    return "# BTP Design System\n\nTypography: Segoe UI/Inter-style system font, strong enterprise headlines, readable body copy, no viewport-scaled letter spacing.\n\nPalette: black `#000000`, white `#FFFFFF`, blue `#2AA8FF`, deep blue `#0067F0`, red `#FF3B30`, plus restrained brand accent tokens.\n\nButtons: red primary conversion CTA, blue secondary service action, black-outline discovery action.\n\nCards: 8px radius, light border, subtle shadow, compact enterprise spacing, hover only where it helps scannability.\n\nSpacing: mobile-first sections using responsive clamp spacing and a 1200px max container. Whitespace separates decisions, not decoration.\n\nHero system: concise executive headline, proof chips, and a CSS-built enterprise workflow visual instead of generic stock photography.\n\nContent system: every site includes value proposition, revenue model, problems solved, capabilities, process, outcomes, FAQ, related BTP solutions, and one lead form.\n\nForms: one lead form only, with CRM-ready field names: `full_name`, `company_name`, `email`, `phone`, `message`, `brand`.\n";
}

function masterReadme(array $brands): string
{
    $lines = ["# BTP Brand Websites", "", "Separate deploy-root PHP websites generated from one BTP design system.", ""];
    foreach ($brands as $slug => $brand) {
        $lines[] = "- `sites/$slug`: {$brand['name']} ({$brand['domain']})";
    }
    return implode("\n", $lines) . "\n";
}

echo "Generated " . count($brands) . " production websites in $outputRoot\n";
