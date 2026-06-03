<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$outputRoot = $root . DIRECTORY_SEPARATOR . 'brand-sites';

$brands = [
    'praas' => [
        'name' => 'BTP PraaS',
        'domain' => 'praas.cloudexcelon.com',
        'tagline' => 'Procurement and sourcing support that simplifies technology acquisition through one coordinated path.',
        'headline' => 'Practical technology procurement and Resource-as-a-Service solutions for modern businesses.',
        'summary' => 'BTP PraaS helps organizations access the technology products, services, and resources they need without adding unnecessary complexity to procurement, vendor management, or project execution.',
        'about' => [
            'As part of the BTP Innovations ecosystem, PraaS supports businesses that need a more efficient way to source technology, compare options, coordinate vendors, and connect the right resources to the right business priorities.',
            'Many organizations lose time and money managing fragmented providers, unclear pricing, underused tools, and disconnected service relationships. BTP PraaS helps simplify that process by bringing advisory, sourcing, partner access, and execution support into a more coordinated model.',
            'Whether an organization is purchasing software, evaluating infrastructure options, sourcing technical resources, or planning a broader technology initiative, PraaS helps create a clearer path from need to solution.',
        ],
        'services' => ['Technology Procurement', 'Vendor Sourcing', 'Resource-as-a-Service', 'SaaS and Licensing', 'IT Cost Optimization', 'Partner Ecosystem Access'],
        'cta' => 'Connect with BTP PraaS to simplify technology sourcing and align the right resources with your business goals.',
        'accent' => '#2AA8FF',
    ],
    'techadvisors' => [
        'name' => 'BTP TechAdvisors',
        'domain' => 'techadvisors.cloudexcelon.com',
        'tagline' => 'Strategic advisory and client engagement for complex technology decisions.',
        'headline' => 'Vendor-neutral technology advisory for smarter business decisions.',
        'summary' => 'BTP TechAdvisors helps organizations make clearer, smarter, and more cost-effective technology decisions.',
        'about' => [
            'We work with businesses that need guidance across cloud, cybersecurity, connectivity, software, AI, managed IT, and broader digital transformation priorities.',
            'Technology decisions are often complicated by too many vendors, overlapping tools, rising costs, and unclear implementation paths. BTP TechAdvisors brings structure to that process by combining practical advisory support with access to the broader BTP Innovations ecosystem.',
            'We are advisory-first, but not advisory-only. Through BTP solution brands and partner networks, we help clients move from recommendations to execution.',
        ],
        'services' => ['Technology Strategy', 'Vendor-Neutral Advisory', 'Digital Transformation', 'IT Roadmapping', 'Solution Evaluation', 'Cost Optimization'],
        'cta' => 'Connect with BTP TechAdvisors when your business needs clearer technology decisions and a practical path to execution.',
        'accent' => '#2AA8FF',
    ],
    'securiscope' => [
        'name' => 'BTP SecuriSCOPE',
        'domain' => 'securiscope.cloudexcelon.com',
        'tagline' => 'Cybersecurity strategy, protection, compliance, and resilience for enterprise environments.',
        'headline' => 'Cybersecurity advisory, protection, and risk reduction for modern organizations.',
        'summary' => 'BTP SecuriSCOPE helps organizations strengthen cybersecurity, reduce risk, and protect critical systems and data.',
        'about' => [
            'As part of the BTP Innovations ecosystem, SecuriSCOPE supports businesses across cybersecurity assessment, security strategy, managed security, threat visibility, compliance readiness, and security solution implementation.',
            'Cybersecurity is no longer a single tool or one-time project. Organizations need practical guidance, reliable protection, and ongoing visibility across users, networks, cloud platforms, endpoints, and business-critical applications.',
            'BTP SecuriSCOPE helps clients understand risk exposure, identify security gaps, prioritize improvements, and deploy the right solutions for their environment.',
        ],
        'services' => ['Cybersecurity Strategy', 'Risk Assessment', 'Managed Security', 'MDR and SIEM', 'Cloud Security', 'Vulnerability Management', 'Compliance Readiness'],
        'cta' => 'Connect with BTP SecuriSCOPE to assess risk, strengthen protection, and build a more resilient security posture.',
        'accent' => '#FF3B30',
    ],
    'managesp' => [
        'name' => 'BTP ManageSP',
        'domain' => 'managesp.cloudexcelon.com',
        'tagline' => 'Managed IT services that keep operations supported after deployment.',
        'headline' => 'Managed IT services and operational support for stable, secure technology environments.',
        'summary' => 'BTP ManageSP helps organizations keep their technology environments stable, secure, optimized, and ready to support the business.',
        'about' => [
            'As part of the BTP Innovations ecosystem, ManageSP provides managed services and operational support across IT infrastructure, cloud environments, endpoints, networks, systems, and business technology platforms.',
            'Many organizations depend on technology every day but struggle with limited internal resources, inconsistent support, vendor fragmentation, and growing operational demands.',
            'BTP ManageSP provides structured support, proactive management, and access to broader advisory and solution expertise.',
        ],
        'services' => ['Managed IT Services', 'IT Operations', 'Infrastructure Support', 'Cloud Operations', 'End-User Support', 'Vendor Coordination', 'Technology Management'],
        'cta' => 'Connect with BTP ManageSP to improve technology operations and keep your business environment running with confidence.',
        'accent' => '#2AA8FF',
    ],
    'cloudexcelon' => [
        'name' => 'BTP CloudEXCELON',
        'domain' => 'dev.cloudexcelon.com',
        'tagline' => 'Cloud architecture and infrastructure built for scalable enterprise environments.',
        'headline' => 'Cloud strategy, migration, optimization, and operations for scalable business growth.',
        'summary' => 'BTP CloudEXCELON helps organizations plan, modernize, optimize, and manage cloud environments that support real business needs.',
        'about' => [
            'As part of the BTP Innovations ecosystem, CloudEXCELON supports businesses across cloud advisory, migration, infrastructure design, cost optimization, resilience planning, and ongoing cloud operations.',
            'Cloud decisions can become complicated quickly. Organizations often face rising costs, unclear architecture, underused services, security concerns, and uncertainty about which platform or migration path is right for them.',
            'BTP CloudEXCELON helps clients evaluate current environments, define the right cloud strategy, deploy scalable solutions, and optimize performance over time.',
        ],
        'services' => ['Cloud Strategy', 'Cloud Migration', 'Cloud Optimization', 'Cloud Infrastructure', 'Azure', 'AWS', 'Google Cloud', 'Cloud Operations'],
        'cta' => 'Connect with BTP CloudEXCELON to plan, optimize, or modernize your cloud environment with a clearer path forward.',
        'accent' => '#2AA8FF',
    ],
    'codeignite' => [
        'name' => 'BTP CodeIGNITE',
        'domain' => 'codeignite.cloudexcelon.com',
        'tagline' => 'Software development and application engineering for platform innovation.',
        'headline' => 'Software, platform, and application development built for scale and practical business value.',
        'summary' => 'BTP CodeIGNITE helps organizations design, build, and modernize software solutions that support growth, efficiency, and long-term value.',
        'about' => [
            'As part of the BTP Innovations ecosystem, CodeIGNITE supports web, mobile, enterprise, automation, and platform development initiatives for businesses that need reliable technology execution.',
            'Many organizations have ideas, workflows, or operational challenges that require more than off-the-shelf tools.',
            'BTP CodeIGNITE supports clients from concept and architecture through build, integration, deployment, and ongoing improvement.',
        ],
        'services' => ['Software Development', 'Web Applications', 'Mobile Applications', 'Enterprise Platforms', 'API Integration', 'Automation', 'Blockchain-Enabled Solutions'],
        'cta' => 'Connect with BTP CodeIGNITE to build or modernize software that moves your business forward.',
        'accent' => '#FF3B30',
    ],
    'datastaisis' => [
        'name' => 'BTP DatastAIsis',
        'domain' => 'datastaisis.cloudexcelon.com',
        'tagline' => 'AI, automation, analytics, and operational intelligence for business outcomes.',
        'headline' => 'AI, data, and automation solutions for smarter decisions and more efficient operations.',
        'summary' => 'BTP DatastAIsis helps organizations use data, AI, and automation to improve decisions, streamline workflows, and unlock more value from their technology environment.',
        'about' => [
            'As part of the BTP Innovations ecosystem, DatastAIsis supports businesses across data strategy, analytics, workflow automation, AI-enabled solutions, reporting, and operational intelligence.',
            'Many organizations have valuable data but struggle to organize it, interpret it, or turn it into meaningful action.',
            'BTP DatastAIsis helps clients move from scattered information and manual processes to clearer insights and more efficient operations.',
        ],
        'services' => ['AI Solutions', 'Data Analytics', 'Automation', 'Business Intelligence', 'Workflow Optimization', 'Data Strategy', 'Operational Insights'],
        'cta' => 'Connect with BTP DatastAIsis to turn data, AI, and automation into practical business value.',
        'accent' => '#2AA8FF',
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

$logoSource = $root . DIRECTORY_SEPARATOR . 'btp-sitejet-build' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'btp-logo.png';
if (!is_file($logoSource)) {
    $logoSource = 'C:\\Users\\DEVAU\\OneDrive\\Desktop\\BTP\\BTP Logo.png';
}
$generatedLogoRoot = $root . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'brand-logos';

foreach ($brands as $slug => $brand) {
    $siteRoot = $outputRoot . DIRECTORY_SEPARATOR . $slug . DIRECTORY_SEPARATOR . 'public_html';
    if (is_dir($siteRoot)) {
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($siteRoot, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($it as $file) {
            if (!$file->isDir()) {
                unlink($file->getPathname());
            }
        }
    }

    $brandPhp = var_export($brand, true);
    write_file($siteRoot . '/includes/site.php', "<?php\nreturn $brandPhp;\n");
    write_file($siteRoot . '/assets/css/style.css', css($brand));
    write_file($siteRoot . '/assets/js/main.js', js());
    $brandLogoSource = $generatedLogoRoot . DIRECTORY_SEPARATOR . $slug . '.png';
    if (!is_file($brandLogoSource)) {
        $brandLogoSource = $slug === 'praas' ? 'C:\\Users\\DEVAU\\OneDrive\\Desktop\\BTP\\BTP_PraaS-WM29r4HBIJTLGZI4w3hFMw.png' : $logoSource;
    }
    if (is_file($brandLogoSource)) {
        if (!is_dir($siteRoot . '/assets/images')) {
            mkdir($siteRoot . '/assets/images', 0777, true);
        }
        copy($brandLogoSource, $siteRoot . '/assets/images/btp-logo.png');
    }

    foreach (['index' => 'Home', 'about' => 'About Us', 'services' => 'Services', 'news' => 'News', 'contact' => 'Contact'] as $page => $label) {
        write_file($siteRoot . '/' . ($page === 'index' ? 'index' : $page) . '.php', page($brand, $page));
    }
    write_file($siteRoot . '/privacy-policy.php', legal($brand, 'Privacy Policy'));
    write_file($siteRoot . '/legal-notice.php', legal($brand, 'Legal Notice'));
    foreach (['about', 'services', 'news', 'contact', 'privacy-policy', 'legal-notice'] as $route) {
        $target = $route . '.php';
        write_file($siteRoot . '/' . $route . '/index.php', "<?php\nrequire __DIR__ . '/../$target';\n");
    }
    write_file($siteRoot . '/robots.txt', "User-agent: *\nAllow: /\n\nSitemap: https://{$brand['domain']}/sitemap.xml\n");
    write_file($siteRoot . '/sitemap.xml', sitemap($brand));
    write_file($siteRoot . '/.htaccess', htaccess());
    write_file($siteRoot . '/web.config', webConfig());
    write_file($outputRoot . DIRECTORY_SEPARATOR . $slug . DIRECTORY_SEPARATOR . 'README.md', readme($brand, $slug));
}

write_file($outputRoot . DIRECTORY_SEPARATOR . 'README.md', masterReadme($brands));

function layout(array $brand, string $title, string $description, string $body): string
{
    $nav = '<a href="/">Home</a><a href="/about">About</a><a href="/services">Services</a><a href="/news">News</a><a href="/contact">Contact</a>';
    $domain = h($brand['domain']);
    return <<<PHP
<?php \$brand = require __DIR__ . '/includes/site.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{$title}</title>
  <meta name="description" content="{$description}">
  <link rel="canonical" href="https://{$domain}/">
  <meta property="og:title" content="{$title}">
  <meta property="og:description" content="{$description}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://{$domain}/">
  <meta property="og:image" content="https://{$domain}/assets/images/btp-logo.png">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/main.js" defer></script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="header">
  <a class="logo" href="/"><img src="/assets/images/btp-logo.png" alt="BTP Innovations"></a>
  <button class="menu" type="button" aria-expanded="false">Menu</button>
  <nav>{$nav}</nav>
  <a class="top-cta" href="/contact">Start a Conversation</a>
</header>
<main id="main">{$body}</main>
<footer>
  <section class="footer-cta"><div><p class="eyebrow">BTP Innovations Ecosystem</p><h2>{$brand['cta']}</h2></div><a class="btn red" href="/contact">Contact {$brand['name']}</a></section>
  <div class="footer-grid"><div><img src="/assets/images/btp-logo.png" alt="BTP Innovations"><p>{$brand['tagline']}</p></div><div><h3>Pages</h3>{$nav}</div><div><h3>Contact</h3><p>276 5th Avenue Suite 704<br>New York, NY 10001</p><p>(800) 781-6632<br>info@{$domain}</p></div></div>
</footer>
</body>
</html>
PHP;
}

function page(array $brand, string $page): string
{
    $title = h($brand['name'] . ' | ' . ($page === 'index' ? $brand['headline'] : ucfirst($page)));
    $description = h($brand['summary']);
    $name = h($brand['name']);
    $headline = h($brand['headline']);
    $summary = h($brand['summary']);
    $tagline = h($brand['tagline']);
    $cta = h($brand['cta']);
    $services = $brand['services'];
    $about = $brand['about'];

    if ($page === 'index') {
        $cards = cards($services);
        $lifecycle = lifecycleCards();
        $body = <<<HTML
<section class="hero"><div><p class="eyebrow">{$name}</p><h1>{$headline}</h1><p>{$summary}</p><div class="actions"><a class="btn red" href="/contact">Start a Conversation</a><a class="btn outline" href="/services">Explore Services</a></div></div><aside><span>Strategic Focus</span><strong>{$tagline}</strong></aside></section>
<section class="section split"><div><p class="eyebrow">What We Do</p><h2>One coordinated path from technology need to business outcome.</h2></div><div><p>{$about[0]}</p><p>{$about[1]}</p></div></section>
<section class="section dark split"><div><p class="eyebrow">One Platform. Multiple Solutions.</p><h2>BTP connects advisory, sourcing, engineering, implementation, managed services, and optimization through one strategic ecosystem.</h2></div><div><p>BTP Innovations serves as the connective tissue between technology, people, infrastructure, operations, and business processes. Each solution brand plugs into a broader delivery model so clients do not have to manage disconnected vendors, siloed technical teams, or unclear handoffs.</p><p>That platform approach helps organizations move from decision-making to execution with one relationship and a clearer path to measurable outcomes.</p></div></section>
<section class="section muted"><div class="section-head"><p class="eyebrow">Core Services</p><h2>Focused capabilities for modern business technology.</h2></div><div class="cards">{$cards}</div></section>
<section class="section"><div class="section-head"><p class="eyebrow">Technology Lifecycle</p><h2>Support across the full lifecycle: build, source, deploy, manage, and optimize.</h2></div><div class="process">{$lifecycle}</div></section>
<section class="section proof"><div><strong>Advisory-first</strong><span>Practical guidance before technology decisions.</span></div><div><strong>Execution-ready</strong><span>Support from planning through implementation.</span></div><div><strong>Lifecycle support</strong><span>Help after deployment, optimization, and growth.</span></div></section>
HTML;
        return layout($brand, $title, $description, $body);
    }

    if ($page === 'about') {
        $paras = implode('', array_map(fn($p) => '<p>' . h($p) . '</p>', $about));
        $models = modelCards($brand);
        $body = <<<HTML
<section class="page-hero"><p class="eyebrow">About {$name}</p><h1>{$headline}</h1><p>{$summary}</p></section>
<section class="section split"><div><p class="eyebrow">BTP Innovations Ecosystem</p><h2>Built to reduce complexity and move decisions into execution.</h2></div><div>{$paras}</div></section>
<section class="section muted"><div class="section-head"><p class="eyebrow">Delivery Model</p><h2>How BTP turns strategy into accountable execution.</h2></div><div class="cards">{$models}</div></section>
<section class="section muted process"><article><span>01</span><h3>Assess</h3><p>Clarify goals, current environment, constraints, priorities, and business impact.</p></article><article><span>02</span><h3>Align</h3><p>Match the right strategy, resources, partners, and solution path.</p></article><article><span>03</span><h3>Execute</h3><p>Move from recommendation to implementation with practical support.</p></article></section>
HTML;
        return layout($brand, $title, $description, $body);
    }

    if ($page === 'services') {
        $cards = detailCards($services);
        $advisory = advisoryProcessCards();
        $body = <<<HTML
<section class="page-hero"><p class="eyebrow">Services</p><h1>{$tagline}</h1><p>{$summary}</p></section>
<section class="section"><div class="section-head"><p class="eyebrow">Capabilities</p><h2>Services designed for practical business outcomes.</h2></div><div class="detail-cards">{$cards}</div></section>
<section class="section muted"><div class="section-head"><p class="eyebrow">Advisory Process</p><h2>Objective analysis before recommendation and delivery.</h2></div><div class="process">{$advisory}</div></section>
<section class="section dark split"><div><p class="eyebrow">Why It Matters</p><h2>Technology decisions are easier when advisory, sourcing, and execution work together.</h2></div><div><p>{$about[1]}</p><p>BTP applies a consistent discovery, market mapping, feature and pricing analysis, partner vetting, and delivery recommendation process across solution categories.</p><p>{$cta}</p><a class="btn red" href="/contact">Talk With {$name}</a></div></section>
HTML;
        return layout($brand, $title, $description, $body);
    }

    if ($page === 'news') {
        $articles = newsCards($brand);
        $body = <<<HTML
<section class="page-hero"><p class="eyebrow">News</p><h1>Insights from {$name}.</h1><p>Practical updates on {$tagline}</p></section>
<section class="section split"><div><p class="eyebrow">Featured Insight</p><h2>How coordinated technology decisions reduce cost, risk, and operational drag.</h2></div><div><p>{$about[1]}</p><p>BTP's Quarterback model orchestrates the right expertise around each client need, from discovery and gap identification to expert engagement and delivery accountability.</p><p>{$cta}</p><div class="actions"><a class="btn red" href="/contact">Discuss Your Priorities</a><a class="btn outline" href="/services">View Services</a></div></div></section>
<section class="section muted"><div class="section-head"><p class="eyebrow">Articles</p><h2>Current focus areas for business leaders.</h2></div><div class="cards">{$articles}</div></section>
<section class="section newsletter"><div><p class="eyebrow">Stay Connected</p><h2>Get practical technology guidance from the BTP Innovations ecosystem.</h2></div><div class="cta-panel"><p>For updates, sales conversations, discovery requests, and project support, use the contact page so BTP can route the request through one intake path.</p><a class="btn red" href="/contact">Contact {$name}</a></div></section>
HTML;
        return layout($brand, $title, $description, $body);
    }

    $body = <<<HTML
<section class="page-hero"><p class="eyebrow">Contact</p><h1>Start a conversation with {$name}.</h1><p>{$cta}</p></section>
<section class="section contact"><form method="post" action="/contact"><label>Name<input name="name" required></label><label>Company<input name="company"></label><label>Email<input type="email" name="email" required></label><label>Phone<input name="phone"></label><label class="full">Message<textarea name="message" rows="6" required></textarea></label><!-- TODO: Configure SMTP/PHP mail on hosting before production form delivery. --><button class="btn red" type="submit">Send Message</button></form><aside><h2>Contact Information</h2><p>276 5th Avenue Suite 704<br>New York, NY 10001</p><p>(800) 781-6632<br>info@{$brand['domain']}</p><p>{$tagline}</p></aside></section>
HTML;
    return layout($brand, $title, $description, $body);
}

function cards(array $items): string
{
    return implode('', array_map(fn($x) => '<article><span>' . h(strtoupper(substr($x, 0, 2))) . '</span><h3>' . h($x) . '</h3><p>Practical support aligned to business goals, environment needs, and execution priorities.</p></article>', $items));
}

function lifecycleCards(): string
{
    $items = [
        ['Build', 'Architecture and engineering for platforms, applications, and technical foundations.'],
        ['Source', 'Procurement, vendor access, partner selection, and infrastructure distribution.'],
        ['Deploy', 'Implementation, integration, migration, and rollout support.'],
        ['Manage', 'Managed services, support, operational continuity, and vendor coordination.'],
        ['Optimize', 'AI, automation, cost reduction, reporting, and lifecycle improvement.'],
    ];
    return implode('', array_map(fn($x) => '<article><span>' . h(substr($x[0], 0, 2)) . '</span><h3>' . h($x[0]) . '</h3><p>' . h($x[1]) . '</p></article>', $items));
}

function advisoryProcessCards(): string
{
    $items = [
        ['Discovery & Scoping', 'Document requirements, constraints, budget, risks, and success criteria before any vendor or solution is considered.'],
        ['Market Mapping', 'Map the solution landscape across providers, partners, competitors, and implementation options for the specific use case.'],
        ['Feature & Pricing Analysis', 'Compare service features, SLAs, capability gaps, monthly and non-recurring costs, and strategic differentiators.'],
        ['Partner Vetting', 'Layer in real customer satisfaction signals, delivery experience, support quality, and partner fit.'],
        ['Recommendation & Delivery', 'Provide a clear recommendation, roadmap, quotes where applicable, and BTP as the accountable delivery relationship.'],
    ];
    return implode('', array_map(fn($x) => '<article><span>' . h(substr($x[0], 0, 2)) . '</span><h3>' . h($x[0]) . '</h3><p>' . h($x[1]) . '</p></article>', $items));
}

function modelCards(array $brand): string
{
    $items = [
        ['Engineering-First IPC Model', 'Cross-functional engineering teams work together from day one so security, infrastructure, cloud, application, and operations decisions are not handled in silos.'],
        ['BTP Quarterback Model', 'A dedicated strategic advisor orchestrates the right subject matter experts around the client need, then keeps the engagement aligned through delivery.'],
        ['Strategic Partnership Model', 'Executive alignment, account management, partner selection, and feedback loops keep recommendations tied to business outcomes instead of vendor pressure.'],
        ['Enablement & Knowledge Base', $brand['name'] . ' benefits from BTP-approved messaging, reusable delivery playbooks, technical runbooks, and reference architectures.'],
    ];
    return implode('', array_map(fn($x) => '<article><span>' . h(substr($x[0], 0, 2)) . '</span><h3>' . h($x[0]) . '</h3><p>' . h($x[1]) . '</p></article>', $items));
}

function detailCards(array $items): string
{
    return implode('', array_map(fn($x) => '<article><h3>' . h($x) . '</h3><p>Structured planning, selection, implementation support, and lifecycle guidance for organizations that need practical technology outcomes without adding vendor noise or operational confusion.</p><ul><li>Current-state review and priority mapping</li><li>Option evaluation against budget, risk, and fit</li><li>Implementation coordination and follow-through</li></ul></article>', $items));
}

function newsCards(array $brand): string
{
    $items = [
        ['Strategy', 'Making technology decisions with fewer blind spots', $brand['summary']],
        ['Operations', 'Why execution support matters after recommendations', $brand['about'][2] ?? $brand['cta']],
        ['Ecosystem', 'Using one coordinated path across advisory, partners, and delivery', $brand['about'][0]],
    ];
    return implode('', array_map(fn($x) => '<article><span>' . h(strtoupper(substr($x[0], 0, 2))) . '</span><h3>' . h($x[1]) . '</h3><p>' . h($x[2]) . '</p><a class="text-link" href="/contact">Talk about this</a></article>', $items));
}

function legal(array $brand, string $type): string
{
    $title = h($type . ' | ' . $brand['name']);
    $name = h($brand['name']);
    $body = '<section class="page-hero"><p class="eyebrow">Legal</p><h1>' . h($type) . '</h1><p>Effective date: 2026</p></section><section class="section legal"><p>' . $name . ' is part of the BTP Innovations ecosystem. This page provides general website information and does not modify any written service agreement.</p><p>For questions, contact info@' . h($brand['domain']) . '.</p></section>';
    return layout($brand, $title, h($type . ' for ' . $brand['name']), $body);
}

function sitemap(array $brand): string
{
    $d = 'https://' . $brand['domain'];
    return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n  <url><loc>$d/</loc></url>\n  <url><loc>$d/about</loc></url>\n  <url><loc>$d/services</loc></url>\n  <url><loc>$d/news</loc></url>\n  <url><loc>$d/contact</loc></url>\n  <url><loc>$d/privacy-policy</loc></url>\n  <url><loc>$d/legal-notice</loc></url>\n</urlset>\n";
}

function htaccess(): string
{
    return "Options -Indexes\nDirectoryIndex index.php\n<IfModule mod_rewrite.c>\nRewriteEngine On\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteCond %{REQUEST_FILENAME}\\.php -f\nRewriteRule ^(.+?)/?$ $1.php [L]\n</IfModule>\n";
}

function webConfig(): string
{
    return <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
  <system.webServer>
    <defaultDocument enabled="true">
      <files>
        <clear />
        <add value="index.php" />
        <add value="index.html" />
      </files>
    </defaultDocument>
    <directoryBrowse enabled="false" />
  </system.webServer>
</configuration>
XML;
}

function readme(array $brand, string $slug): string
{
    return "# {$brand['name']}\n\nDeployable PHP 8.3 website for {$brand['domain']}.\n\nUpload the contents of `public_html` to the domain document root or deploy from the matching Git branch `deploy-$slug`.\n\nFor Plesk, set the deployment path to the website document root so `index.php` lands directly in the served folder.\n";
}

function masterReadme(array $brands): string
{
    $lines = ["# BTP Brand Websites", "", "Generated deployable websites for the BTP Innovations brand ecosystem.", ""];
    foreach ($brands as $slug => $brand) {
        $lines[] = "- `$slug`: {$brand['name']} ({$brand['domain']})";
    }
    return implode("\n", $lines) . "\n";
}

function js(): string
{
    return "document.querySelector('.menu')?.addEventListener('click',()=>{document.body.classList.toggle('nav-open');});\n";
}

function css(array $brand): string
{
    $accent = $brand['accent'];
    return <<<CSS
:root{--black:#000;--white:#fff;--blue:#2AA8FF;--red:#FF3B30;--ink:#111827;--muted:#5b6472;--line:#e5e9f0;--surface:#f6f9fc;--accent:$accent;--max:1180px;--shadow:0 20px 55px rgba(15,23,42,.12)}*{box-sizing:border-box}body{margin:0;font-family:"Segoe UI",Arial,sans-serif;color:var(--ink);line-height:1.55;background:#fff}a{text-decoration:none;color:inherit}.skip{position:absolute;left:-999px}.header{position:sticky;top:0;z-index:10;display:grid;grid-template-columns:auto 1fr auto;gap:28px;align-items:center;min-height:92px;padding:12px max(24px,calc((100vw - var(--max))/2));background:rgba(255,255,255,.96);border-bottom:1px solid var(--line);backdrop-filter:blur(14px)}.logo img{width:190px;max-width:34vw}nav{display:flex;justify-content:center;gap:28px;font-weight:750}.top-cta,.btn{display:inline-flex;align-items:center;justify-content:center;min-height:46px;padding:12px 18px;border-radius:6px;font-weight:800}.top-cta,.btn.red{color:#fff;background:var(--red);box-shadow:0 14px 26px rgba(255,59,48,.2)}.btn.outline{border:1px solid #111;background:#fff}.text-link{display:inline-flex;margin-top:10px;color:#005bd8;font-weight:850}.menu{display:none}.hero,.page-hero{padding:clamp(70px,8vw,120px) max(24px,calc((100vw - var(--max))/2));background:linear-gradient(105deg,#fff 0%,#fff 50%,#eaf6ff 100%)}.hero{display:grid;grid-template-columns:1fr 380px;gap:56px;align-items:center}.hero h1,.page-hero h1{max-width:850px;margin:0 0 18px;font-size:clamp(42px,6vw,72px);line-height:1.04;letter-spacing:0}.hero p,.page-hero p{max-width:700px;font-size:20px;color:#202938}.hero aside{padding:30px;border:1px solid rgba(42,168,255,.25);border-top:5px solid var(--accent);border-radius:8px;background:#fff;box-shadow:var(--shadow)}.hero aside span,.eyebrow{display:inline-flex;gap:12px;align-items:center;margin:0 0 12px;color:var(--red);font-size:13px;font-weight:900;text-transform:uppercase}.eyebrow:after{content:"";width:44px;height:2px;background:var(--red)}.hero aside strong{display:block;font-size:28px;line-height:1.14}.actions{display:flex;flex-wrap:wrap;gap:14px;margin-top:28px}.section{padding:clamp(64px,7vw,100px) max(24px,calc((100vw - var(--max))/2))}.muted{background:var(--surface)}.dark{color:#fff;background:#000}.dark h2,.dark p{color:#fff}.split,.newsletter{display:grid;grid-template-columns:.8fr 1.2fr;gap:54px;align-items:start}.section h2{margin:0 0 16px;font-size:clamp(30px,4vw,48px);line-height:1.08}.section p{color:var(--muted)}.dark p{color:rgba(255,255,255,.78)}.cards,.detail-cards,.process{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}.cards article,.detail-cards article,.process article,form,aside,.cta-panel{padding:26px;background:#fff;border:1px solid var(--line);border-radius:8px;box-shadow:0 12px 32px rgba(15,23,42,.07)}.cards span,.process span{display:inline-grid;place-items:center;min-width:42px;height:38px;margin-bottom:14px;color:#fff;background:var(--accent);border-radius:8px;font-weight:900}.detail-cards ul{padding-left:20px;color:var(--muted)}.proof{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:#000;color:#fff}.proof div{padding:32px;background:#050505}.proof strong{display:block;font-size:28px}.proof span{color:rgba(255,255,255,.75)}.contact{display:grid;grid-template-columns:1fr 360px;gap:28px}form{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}label{display:grid;gap:8px;font-weight:750}input,textarea{width:100%;padding:12px 14px;font:inherit;border:1px solid #cbd5e1;border-radius:6px}.full,form button{grid-column:1/-1}footer{color:#fff;background:#050505}.footer-cta{display:flex;justify-content:space-between;gap:28px;align-items:center;padding:46px max(24px,calc((100vw - var(--max))/2));background:linear-gradient(100deg,#000,#062b4c)}.footer-cta h2{max-width:850px;margin:0;font-size:clamp(26px,4vw,42px);line-height:1.1}.footer-grid{display:grid;grid-template-columns:1.2fr 1fr 1fr;gap:36px;padding:48px max(24px,calc((100vw - var(--max))/2))}.footer-grid img{width:170px;background:#fff;border-radius:6px;padding:8px}.footer-grid a{display:block;margin:0 0 8px;color:rgba(255,255,255,.78)}@media(max-width:880px){.header{grid-template-columns:auto auto}.top-cta{display:none}.menu{display:inline-flex;justify-content:center;min-height:42px;padding:9px 13px;border:1px solid var(--line);background:#fff;border-radius:6px}nav{display:none;grid-column:1/-1;justify-content:start;flex-direction:column}.nav-open nav{display:flex}.hero,.split,.newsletter,.cards,.detail-cards,.process,.proof,.contact,.footer-cta,.footer-grid{grid-template-columns:1fr;display:grid}form{grid-template-columns:1fr}.hero h1,.page-hero h1{font-size:clamp(36px,10vw,54px)}}
CSS;
}

echo "Generated " . count($brands) . " brand websites in $outputRoot\n";
