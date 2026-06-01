const { chromium } = require('playwright');

const baseUrl = process.env.SITE_URL || 'http://127.0.0.1:8080';
const pages = [
  { path: '/', title: 'BTP PraaS | Next Generation Staff Augmentation 2.0', h1: 'Next Generation Staffing Augmentation 2.0 with Backup Support' },
  { path: '/about', title: 'About BTP PraaS | Introducing PraaS Pro', h1: 'Revolutionizing staff augmentation service.' },
  { path: '/services', title: 'BTP PraaS Services | Save Time And Money With PraaS Pro', h1: 'Save time and money with PraaS Pro service.' },
  { path: '/news', title: 'BTP PraaS News | IT Staffing Insights', h1: 'Discover insights that matter.' },
  { path: '/contact', title: 'Contact BTP PraaS | Let Us Connect Today', h1: "Let's connect today." },
  { path: '/privacy-policy', title: 'Privacy Policy | BTP PraaS', h1: 'Privacy Policy' },
  { path: '/legal-notice', title: 'Legal Notice | BTP PraaS', h1: 'Legal Notice' },
];

(async () => {
  const browser = await chromium.launch({ headless: true });
  const page = await browser.newPage({ viewport: { width: 1440, height: 1000 } });

  for (const item of pages) {
    const response = await page.goto(`${baseUrl}${item.path}`, { waitUntil: 'networkidle' });
    if (!response || response.status() !== 200) {
      throw new Error(`${item.path} returned ${response ? response.status() : 'no response'}`);
    }

    const title = await page.title();
    if (title !== item.title) {
      throw new Error(`${item.path} title mismatch: ${title}`);
    }

    const h1 = await page.locator('h1').first().innerText();
    if (h1 !== item.h1) {
      throw new Error(`${item.path} h1 mismatch: ${h1}`);
    }
  }

  await page.setViewportSize({ width: 390, height: 844 });
  await page.goto(`${baseUrl}/`, { waitUntil: 'networkidle' });
  const navButton = page.locator('.nav-toggle');
  await navButton.click();
  const expanded = await navButton.getAttribute('aria-expanded');
  if (expanded !== 'true') {
    throw new Error('Mobile navigation did not open');
  }

  await browser.close();
  console.log(`Smoke checked ${pages.length} pages and mobile navigation.`);
})().catch(async (error) => {
  console.error(error);
  process.exit(1);
});
