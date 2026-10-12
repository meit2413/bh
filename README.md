# Beezerhost Redesign & Rebuild (2026 Edition)

Welcome to the newly redesigned and rebuilt Beezerhost web platform. Built for optimal performance, top-tier technical SEO, modern 2026 futuristic visual aesthetics, and effortless maintenance.

## 🚀 Tech Stack & Architecture

- **Engine**: PHP 8+ (compatible with standard shared hosting & LAMP/LEMP stacks).
- **Styling**: Modern Vanilla CSS3 with custom design tokens, Flexbox, Bento Grid layout, glassmorphism surfaces, and dark/light mode toggles.
- **Interactivity**: Pure lightweight Vanilla JS for theme state, mobile drawer menu, and FAQ accordions. Zero heavy dependencies (jQuery and legacy frameworks removed).
- **Includes Architecture**:
  - `includes/head.php`: Global HTML `<head>` metadata, Open Graph, Twitter Cards, preloads, and canonical URLs.
  - `includes/header.php`: Sticky glassmorphism header, navigation bar, and theme switcher.
  - `includes/footer.php`: Global site footer, legal links, and client portal access.
  - `includes/schema.php`: JSON-LD structured data generator.
  - `includes/cta-section.php`: Shared Call to Action section.
  - `includes/domain-search.php`: Domain registration lookup component connecting to WHMCS billing.

## 📁 Page Routes Map

- `/index.php` - Home page featuring hosting solutions and domain lookup.
- `/shared-hosting.php` - cPanel Shared Hosting plans and pricing.
- `/reseller-hosting.php` - White-label Reseller Hosting plans.
- `/self-managed-vps.php` - Unmanaged Linux & Windows VPS servers.
- `/full-managed-vps.php` - cPanel & Plesk Managed VPS servers.
- `/iw-full-managed-vps.php` - InterWorx Managed VPS servers.
- `/about.php` - About Beezerhost, mission, and infrastructure metrics.
- `/privacy-policy.php` - Privacy Policy.
- `/terms-of-service.php` - Terms of Service.
- `/404.php` - Custom 404 page.

## ⚙️ Deploy Instructions

1. Upload all files from this directory to the public directory of your PHP hosting server (e.g. `public_html`, `www`, or web root).
2. Ensure `.htaccess` is enabled on Apache/LiteSpeed servers for custom 404 handling and security headers.
3. No build steps required — pure, fast server-rendered PHP!
