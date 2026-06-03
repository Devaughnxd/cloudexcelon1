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
        'contact' => contactPage($brand),
        default => '',
    };
    return "<?php\n\$pageTitle = " . var_export($titles[$page], true) . ";\n\$metaDescription = " . var_export($descriptions[$page], true) . ";\n\$pagePath = " . var_export($page === 'index' ? '/' : '/' . $page, true) . ";\nrequire __DIR__ . '/includes/header.php';\n?>\n" . $body . "\n<?php require __DIR__ . '/includes/footer.php'; ?>\n";
}

function homePage(string $slug, array $brand, array $brands): string
{
    return hero($brand, $brand['cta'], '/contact') . '
<section class="section services-preview"><div class="container"><div class="section-heading centered"><p class="eyebrow">Services</p><h2>Clear service paths without a long discovery maze.</h2></div><div class="card-grid compact">' . cardList(array_slice($brand['capabilities'], 0, 6), $brand) . '</div></div></section>
<section class="section color-band"><div class="container visual-split"><div><p class="eyebrow">Why Choose Us</p><h2>' . h(revenueHeadline($brand)) . '</h2><p>' . h($brand['audience']) . '</p><div class="mini-proof">' . proofList(array_slice($brand['outcomes'], 0, 3)) . '</div></div>' . imageBlock('trust-visual.svg', $brand['short'] . ' trust visual', true) . '</div></section>
<section class="section process-band"><div class="container visual-split reverse">' . imageBlock('process-visual.svg', $brand['short'] . ' process visual', true) . '<div><p class="eyebrow">Process</p><h2>Simple enough to start, structured enough to scale.</h2><div class="process-grid compact">' . processList(array_slice($brand['process'], 0, 4), $brand) . '</div></div></div></section>
' . relatedSolutions($brand, $brands, true) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Step</p><h2>Ready to make the technology path clearer?</h2><p>' . h($brand['summary']) . '</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . ' <span aria-hidden="true">&rarr;</span></a></div></section>';
}

function aboutPage(array $brand, array $brands): string
{
    return pageHero('About ' . $brand['name'], $brand['summary']) . '
<section class="section"><div class="container visual-split"><div><p class="eyebrow">Who We Are</p><h2>Part of one BTP platform, focused on a specific customer problem.</h2><p>' . h($brand['name']) . ' operates inside the BTP Innovations ecosystem, where advisory, sourcing, engineering, implementation, managed services, and optimization connect through one coordinated delivery model.</p><p>' . h($brand['audience']) . '</p></div>' . imageBlock('trust-visual.svg', $brand['short'] . ' ecosystem visual', true) . '</div></section>
<section class="section muted"><div class="container"><div class="section-heading centered"><p class="eyebrow">Differentiators</p><h2>Advisory-led, execution-ready, and lifecycle aware.</h2></div><div class="card-grid compact">' . aboutCards() . '</div></div></section>
' . relatedSolutions($brand, $brands, true) . '
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Talk With BTP</p><h2>Get clear guidance before the next decision becomes expensive.</h2><p>' . h($brand['tagline']) . '</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function servicesPage(array $brand, array $brands): string
{
    return pageHero($brand['short'] . ' Services', $brand['tagline']) . '
<section class="section"><div class="container visual-split"><div><p class="eyebrow">Overview</p><h2>' . h($brand['headline']) . '</h2><p>' . h($brand['summary']) . '</p><p><strong>Who it helps:</strong> ' . h($brand['audience']) . '</p></div>' . imageBlock('hero-visual.svg', $brand['short'] . ' service visual', true) . '</div></section>
<section class="section muted"><div class="container"><div class="section-heading centered"><p class="eyebrow">Services</p><h2>Summarized clearly for faster evaluation.</h2></div><div class="detail-grid compact">' . detailList(array_slice($brand['capabilities'], 0, 6), $brand['deliverables'], $brand) . '</div></div></section>
<section class="section process-band"><div class="container visual-split reverse">' . imageBlock('process-visual.svg', $brand['short'] . ' engagement visual', true) . '<div><p class="eyebrow">Engagement Process</p><h2>How BTP moves from need to next step.</h2><div class="process-grid compact">' . processList(array_slice($brand['process'], 0, 4), $brand) . '</div></div></div></section>
<section class="section trust-band"><div class="container proof-grid">' . proofList($brand['outcomes']) . '</div></section>
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Steps</p><h2>Discuss the service path that fits your environment.</h2><p>Bring your current goals, constraints, vendors, systems, or project questions. BTP will help clarify the path forward.</p></div><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div></section>';
}

function newsPage(array $brand): string
{
    return pageHero($brand['short'] . ' Insights', 'Short updates and decision guides for leaders evaluating ' . strtolower($brand['tagline'])) . '
<section class="section"><div class="container"><div class="news-grid">' . newsCards($brand) . '</div></div></section>
<section class="section color-band"><div class="container visual-split"><div><p class="eyebrow">Briefing</p><h2>Prefer a direct conversation?</h2><p>Use the contact form to request a focused discussion around your current objective, timeline, and decision path.</p><a class="button button-primary" href="/contact">' . h($brand['cta']) . '</a></div>' . imageBlock('trust-visual.svg', $brand['short'] . ' insight visual', true) . '</div></section>';
}

function contactPage(array $brand): string
{
    return pageHero('Contact ' . $brand['name'], 'Start with one business inquiry. BTP will route the conversation to the right advisory, sourcing, engineering, or support path.') . '
<section class="section contact-section"><div class="container contact-grid"><form id="btp-lead-form" class="contact-form" method="post" action="/contact.php"><input type="hidden" name="brand" value="' . h($brand['name']) . '"><label for="full_name">Name<input id="full_name" name="full_name" autocomplete="name" required></label><label for="company_name">Company<input id="company_name" name="company_name" autocomplete="organization"></label><label for="email">Email<input id="email" type="email" name="email" autocomplete="email" required></label><label for="phone">Phone<input id="phone" name="phone" autocomplete="tel"></label><label class="full" for="message">Message<textarea id="message" name="message" rows="5" required></textarea></label><!-- TODO: Connect this form to Microsoft Forms, Power Automate, Dynamics 365, HubSpot, Salesforce, or SMTP/PHP mail when production routing is selected. --><button class="button button-primary full" type="submit">' . h($brand['cta']) . '</button></form><aside class="contact-panel"><h2>Business Inquiries</h2><p>' . h($brand['tagline']) . '</p><p><strong>Email</strong><br>info@btpinnovations.com</p><p><strong>Phone</strong><br>(800) 781-6632</p><p><strong>Address</strong><br>276 5th Avenue Suite 704<br>New York, NY 10001</p>' . imageBlock('trust-visual.svg', $brand['short'] . ' contact visual', true) . '</aside></div></section>
<section class="section final-cta"><div class="container cta-card"><div><p class="eyebrow">Next Step</p><h2>Send the inquiry and BTP will route it to the right path.</h2><p>Use the form for service questions, assessments, sourcing, projects, or operational support needs.</p></div><a class="button button-primary" href="mailto:info@btpinnovations.com">Email BTP</a></div></section>';
}

function hero(array $brand, string $cta, string $href): string
{
    return '<section class="hero hero-home"><div class="hero-copy"><p class="eyebrow">' . h($brand['name']) . '</p><h1>' . h($brand['headline']) . '</h1><p>' . h($brand['summary']) . '</p><div class="actions"><a class="button button-primary" href="' . h($href) . '">' . h($cta) . ' <span aria-hidden="true">&rarr;</span></a><a class="button button-outline" href="/services">Explore Services <span aria-hidden="true">&rarr;</span></a></div><div class="hero-proof"><span>Advisory-first</span><span>Vendor-aware</span><span>Execution-ready</span></div></div><div class="hero-visual">' . imageBlock('hero-visual.svg', $brand['short'] . ' enterprise service visual') . '</div></section>';
}

function pageHero(string $title, string $copy): string
{
    return '<section class="page-hero"><div class="container"><p class="eyebrow">BTP Innovations</p><h1>' . h($title) . '</h1><p>' . h($copy) . '</p></div></section>';
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
function asset(string $path): string { return '/assets/' . ltrim($path, '/'); }
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
  <meta property="og:image" content="https://<?= e($brand['domain']) ?><?= e(asset('images/logo.png')) ?>">
  <link rel="preload" href="<?= e(asset('css/style.css')) ?>" as="style">
  <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">
  <script src="<?= e(asset('js/main.js')) ?>" defer></script>
  <?php require __DIR__ . '/analytics.php'; ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="/" aria-label="<?= e($brand['name']) ?> home"><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" width="210" height="82"></a>
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
    <li><a href="/news">News</a></li>
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
    <div><img src="<?= e(asset('images/logo.svg')) ?>" alt="<?= e($brand['name']) ?> logo" loading="lazy"><p><?= e($brand['summary']) ?></p></div>
    <div><h3>Pages</h3><a href="/">Home</a><a href="/about">About</a><a href="/services">Services</a><a href="/news">News</a><a href="/contact">Contact</a></div>
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

function visualSvg(array $brand, string $type): string
{
    $accent = h($brand['accent']);
    $accent2 = h($brand['accent2']);
    $title = h($brand['short']);
    $labels = array_map('h', $brand['visual']);
    [$l0, $l1, $l2, $l3] = $labels;
    $heading = match ($type) {
        'process' => 'Decision Workflow',
        'trust' => 'BTP Ecosystem',
        default => 'Enterprise Service Map',
    };
    $heading = h($heading);
    return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="760" height="520" viewBox="0 0 760 520" role="img" aria-labelledby="title desc">
  <title id="title">$title $heading</title>
  <desc id="desc">Abstract enterprise technology visual for $title showing coordinated service blocks.</desc>
  <defs>
    <linearGradient id="g" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="$accent" stop-opacity=".95"/>
      <stop offset="1" stop-color="$accent2" stop-opacity=".9"/>
    </linearGradient>
    <filter id="s" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="14" stdDeviation="16" flood-color="#0f172a" flood-opacity=".16"/>
    </filter>
  </defs>
  <rect width="760" height="520" rx="26" fill="#f8fbff"/>
  <path d="M70 390 C170 250 240 430 354 250 S570 150 690 260" fill="none" stroke="$accent" stroke-width="3" stroke-opacity=".22"/>
  <circle cx="616" cy="112" r="76" fill="$accent" opacity=".12"/>
  <circle cx="132" cy="402" r="58" fill="$accent2" opacity=".12"/>
  <rect x="66" y="58" width="628" height="70" rx="14" fill="#fff" filter="url(#s)"/>
  <rect x="88" y="82" width="104" height="20" rx="10" fill="url(#g)"/>
  <text x="214" y="98" font-family="Segoe UI, Arial" font-size="28" font-weight="800" fill="#000">$heading</text>
  <g filter="url(#s)">
    <rect x="88" y="178" width="220" height="116" rx="16" fill="#fff"/>
    <rect x="88" y="178" width="220" height="7" rx="4" fill="$accent"/>
    <text x="112" y="226" font-family="Segoe UI, Arial" font-size="20" font-weight="800" fill="#000">$l0</text>
    <text x="112" y="258" font-family="Segoe UI, Arial" font-size="14" fill="#586174">Define scope and ownership</text>
    <rect x="372" y="178" width="220" height="116" rx="16" fill="#fff"/>
    <rect x="372" y="178" width="220" height="7" rx="4" fill="$accent2"/>
    <text x="396" y="226" font-family="Segoe UI, Arial" font-size="20" font-weight="800" fill="#000">$l1</text>
    <text x="396" y="258" font-family="Segoe UI, Arial" font-size="14" fill="#586174">Compare options and risk</text>
    <rect x="176" y="340" width="220" height="116" rx="16" fill="#fff"/>
    <rect x="176" y="340" width="220" height="7" rx="4" fill="#000"/>
    <text x="200" y="388" font-family="Segoe UI, Arial" font-size="20" font-weight="800" fill="#000">$l2</text>
    <text x="200" y="420" font-family="Segoe UI, Arial" font-size="14" fill="#586174">Move to a practical path</text>
    <rect x="462" y="340" width="220" height="116" rx="16" fill="#fff"/>
    <rect x="462" y="340" width="220" height="7" rx="4" fill="#ff3b30"/>
    <text x="486" y="388" font-family="Segoe UI, Arial" font-size="20" font-weight="800" fill="#000">$l3</text>
    <text x="486" y="420" font-family="Segoe UI, Arial" font-size="14" fill="#586174">Support next-step execution</text>
  </g>
  <path d="M308 236 H372 M482 294 V340 M286 294 V340" stroke="#94a3b8" stroke-width="2" stroke-dasharray="7 8"/>
</svg>
SVG;
}

function css(array $brand): string
{
    $accent = $brand['accent'];
    $accent2 = $brand['accent2'];
    return <<<CSS
:root{--black:#000;--white:#fff;--blue:#2aa8ff;--blue-deep:#0067f0;--red:#ff3b30;--ink:#111827;--muted:#566172;--line:#e3e8ef;--surface:#f6f9fd;--surface-2:#eaf6ff;--accent:$accent;--accent-2:$accent2;--shadow:0 18px 44px rgba(15,23,42,.12);--radius:8px;--max:1180px}*{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;color:var(--ink);background:#fff;font-family:"Segoe UI",Inter,Arial,sans-serif;line-height:1.55}body.nav-open{overflow:hidden}a{color:inherit;text-decoration:none}img{display:block;max-width:100%;height:auto}.container{width:min(100% - 40px,var(--max));margin-inline:auto}.skip-link{position:absolute;left:-999px}.skip-link:focus{left:12px;top:12px;z-index:1000;padding:10px 14px;color:#fff;background:#000}.site-header{position:sticky;top:0;z-index:100;background:rgba(255,255,255,.97);border-bottom:1px solid var(--line);backdrop-filter:blur(16px)}.header-inner{display:grid;grid-template-columns:auto 1fr auto auto;align-items:center;gap:22px;min-height:92px}.brand img{width:clamp(184px,18vw,260px)}.site-nav{justify-self:center}.nav-menu{display:flex;gap:24px;align-items:center;padding:0;margin:0;list-style:none}.nav-menu a{position:relative;font-size:14px;font-weight:780}.nav-menu a:hover:after{content:"";position:absolute;left:0;right:0;bottom:-10px;height:2px;background:var(--red)}.button{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:12px 18px;border-radius:6px;font-weight:850;line-height:1.15}.button-primary{color:#fff;background:var(--red);box-shadow:0 12px 28px rgba(255,59,48,.22)}.button-secondary{color:#fff;background:var(--blue-deep);box-shadow:0 12px 26px rgba(0,103,240,.2)}.button-outline{border:1px solid #151515;background:#fff}.nav-toggle{display:none}.hero{display:grid;grid-template-columns:minmax(0,1fr) minmax(340px,430px);gap:44px;align-items:center;min-height:560px;padding:clamp(48px,6vw,78px) max(24px,calc((100vw - var(--max))/2));background:linear-gradient(112deg,#fff 0%,#fff 50%,color-mix(in srgb,var(--accent) 10%,#fff) 100%);overflow:hidden}.hero h1,.page-hero h1{max-width:820px;margin:0 0 18px;color:#000;font-size:clamp(36px,4.7vw,58px);line-height:1.06;letter-spacing:0}.hero p,.page-hero p{max-width:700px;margin:0;color:#1f2937;font-size:clamp(17px,1.6vw,19px)}.eyebrow{display:inline-flex;align-items:center;gap:12px;margin:0 0 14px;color:var(--red);font-size:12px;font-weight:900;text-transform:uppercase}.eyebrow:after{content:"";width:42px;height:2px;background:var(--red)}.actions{display:flex;flex-wrap:wrap;gap:14px;margin-top:26px}.hero-proof{display:flex;flex-wrap:wrap;gap:10px;margin-top:24px}.hero-proof span{padding:8px 10px;border:1px solid var(--line);border-radius:999px;background:#fff;color:#243044;font-size:13px;font-weight:800}.hero-visual{position:relative}.hero-visual .visual-card{margin:0}.visual-card{margin:0;padding:14px;border:1px solid var(--line);border-radius:12px;background:#fff;box-shadow:var(--shadow)}.visual-card img{width:100%;border-radius:8px}.section{padding:clamp(48px,5.6vw,76px) 0}.muted{background:var(--surface)}.color-band{background:linear-gradient(130deg,color-mix(in srgb,var(--accent) 12%,#fff),#fff 55%,color-mix(in srgb,var(--accent-2) 10%,#fff))}.page-hero{padding:clamp(58px,7vw,90px) 0;background:linear-gradient(110deg,#fff,color-mix(in srgb,var(--accent) 10%,#fff))}.visual-split,.contact-grid{display:grid;grid-template-columns:.92fr 1.08fr;gap:42px;align-items:center}.visual-split.reverse{grid-template-columns:1fr 1fr}.section h2{margin:0 0 14px;color:#000;font-size:clamp(28px,3.4vw,42px);line-height:1.12}.section h3{margin:0 0 10px;color:#000;line-height:1.18}.section p{color:var(--muted)}.section-heading{max-width:640px}.section-heading.centered{max-width:760px;margin:0 auto 28px;text-align:center}.section-heading.centered .eyebrow{justify-content:center}.card-grid,.detail-grid,.related-grid,.news-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}.compact{gap:16px}.process-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}.service-card,.detail-card,.related-card,.news-card,.contact-form,.contact-panel,.cta-card,.process-grid article,.proof-grid article{padding:22px;border:1px solid var(--line);border-radius:var(--radius);background:#fff;box-shadow:0 10px 26px rgba(15,23,42,.07)}.service-card,.detail-card,.related-card,.news-card{border-top:4px solid var(--accent);transition:transform .18s ease,box-shadow .18s ease}.service-card:hover,.detail-card:hover,.related-card:hover,.news-card:hover{transform:translateY(-2px);box-shadow:var(--shadow)}.service-icon,.process-grid span{display:inline-grid;place-items:center;min-width:42px;height:36px;margin-bottom:12px;color:#fff;background:linear-gradient(135deg,var(--accent),var(--accent-2));border-radius:8px;font-size:12px;font-weight:900}.process-band{background:#050505;color:#fff}.process-band h2,.process-band p,.process-band h3{color:#fff}.process-grid article{background:#111;border-color:#252525;box-shadow:none}.mini-proof{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:22px}.mini-proof article{padding:16px;border-radius:8px;background:#fff;border:1px solid var(--line)}.trust-band{background:var(--surface)}.proof-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:#000}.proof-grid article{border:0;border-radius:0;background:#050505;color:#fff}.proof-grid strong{display:block;font-size:20px;line-height:1.15}.proof-grid span{color:rgba(255,255,255,.72)}.related-solutions{background:#fff}.related-card a,.news-card a{display:inline-flex;margin-top:10px;color:#005bd8;font-weight:900}.final-cta{background:#000}.cta-card{display:flex;justify-content:space-between;align-items:center;gap:24px}.final-cta .cta-card,.footer-cta .cta-card{color:#fff;background:linear-gradient(100deg,#000,#062b4c);border-color:#1f2937}.final-cta h2,.final-cta p,.footer-cta h2,.footer-cta p{color:#fff}.contact-form{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}label{display:grid;gap:8px;font-weight:750}input,textarea{width:100%;padding:12px 14px;font:inherit;border:1px solid #cbd5e1;border-radius:6px}input:focus,textarea:focus{outline:3px solid rgba(42,168,255,.22);border-color:var(--blue-deep)}.full{grid-column:1/-1}.site-footer{color:#fff;background:#050505}.footer-cta{padding:38px 0}.footer-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:34px;padding:40px 0}.footer-grid img{width:190px}.footer-grid a{display:block;margin:0 0 8px;color:rgba(255,255,255,.78)}@media(max-width:1080px){.hero,.visual-split,.visual-split.reverse,.contact-grid{grid-template-columns:1fr}.hero-visual{max-width:520px}.card-grid,.detail-grid,.related-grid,.news-grid{grid-template-columns:repeat(2,1fr)}}@media(max-width:820px){.container{width:min(100% - 28px,var(--max))}.header-inner{grid-template-columns:auto auto;min-height:78px}.brand img{width:172px}.header-cta{display:none}.nav-toggle{display:inline-grid;gap:4px;justify-self:end;width:44px;height:42px;padding:10px;border:1px solid var(--line);border-radius:6px;background:#fff}.nav-toggle span{height:2px;background:#000}.site-nav{display:none;grid-column:1/-1;justify-self:stretch}.nav-open .site-nav{display:block}.nav-menu{flex-direction:column;align-items:flex-start;padding:16px 0}.hero{min-height:auto;padding-top:44px}.hero-visual{display:none}.card-grid,.detail-grid,.related-grid,.process-grid,.proof-grid,.mini-proof,.news-grid{grid-template-columns:1fr}.contact-form{grid-template-columns:1fr}.hero h1,.page-hero h1{font-size:clamp(34px,10vw,48px)}.hero p,.page-hero p{font-size:17px}.section{padding:48px 0}.cta-card{align-items:flex-start;flex-direction:column}}
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
    return "# {$brand['name']}\n\nProduction-ready lightweight PHP 8.3 website for {$brand['domain']}.\n\nDeploy the repository root directly to the Plesk domain folder. `index.php` must be in the domain root.\n\nPages: Home, About, Services, News, Contact.\n";
}

function deployment(string $slug, array $brand): string
{
    $branch = $slug === 'cloudexcelon' ? 'plesk-deploy' : 'deploy-' . $slug;
    return "# Deployment - {$brand['name']}\n\n## GitHub Push\n\n```powershell\ngit add .\ngit commit -m \"Update {$brand['short']} website\"\ngit push origin $branch\n```\n\n## Plesk Git Deployment\n\n1. Open Plesk > Websites & Domains.\n2. Open Git for the target domain.\n3. Use the `$branch` repository branch for this site.\n4. Set deployment path to the domain root, not a nested `public_html` folder.\n5. Deploy repository.\n6. Confirm `index.php` exists directly in the domain folder.\n7. Test `/`, `/about`, `/services`, `/news`, and `/contact`.\n\n## Updates\n\nUse **Update from Remote**, then **Deploy HEAD Commit**.\n\n## Troubleshooting\n\n- 403.14 means `index.php` is missing from the served folder or the wrong deployment path is selected.\n- 404 on `/services` means the deploy did not include `services/index.php` or the wrong folder was deployed.\n- Check Plesk Logs for PHP warnings and IIS errors.\n- Verify asset paths resolve through the `asset()` helper and the domain root contains `assets`, `includes`, and the page files.\n";
}

function designSystem(): string
{
    return "# BTP Design System\n\nTypography: Segoe UI/Inter-style system font, strong enterprise headlines, readable body copy, no viewport-scaled letter spacing.\n\nPalette: black `#000000`, white `#FFFFFF`, blue `#2AA8FF`, deep blue `#0067F0`, red `#FF3B30`, plus controlled brand accent tokens.\n\nAsset system: all CSS, JavaScript, logos, and visuals resolve through the PHP `asset()` helper and root-relative `/assets/...` URLs.\n\nButtons: red primary conversion CTA, blue secondary service action, black-outline discovery action.\n\nCards: 8px radius, light border, subtle shadow, compact enterprise spacing, and color-accented service tops.\n\nSpacing: shorter pages, intentional whitespace, compact card grids, and visual split sections.\n\nHero system: concise executive headline, proof chips, and a brand-specific SVG service visual.\n\nContent system: every site includes hero, service cards, benefits/trust, visual process, ecosystem links, final CTA, News cards, and one lead form.\n\nForms: one lead form only, with CRM-ready field names: `full_name`, `company_name`, `email`, `phone`, `message`, `brand`.\n";
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
