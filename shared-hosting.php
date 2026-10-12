<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Shared Hosting - Ultra-Fast cPanel Web Hosting",
    "Discover affordable Shared Hosting with NVMe storage, cPanel, free SSL, 1-click installer, and 99.9% uptime. Plans starting from $1.50/mo."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('Service', [
    'name' => 'Shared Hosting',
    'description' => 'Fast and reliable cPanel shared hosting starting at $1.50 per month.'
]);
?>

<main id="main-content">
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">High Performance Web Hosting</span>
            <h1 class="hero-title">cPanel <span class="text-gradient">Shared Hosting</span></h1>
            <p class="hero-subtitle">
                Blazing fast cPanel web hosting powered by NVMe SSD drives, LiteSpeed web server, and automated backups. Perfect for personal sites, blogs, and SMBs.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="pricing-grid">
                <!-- Starter Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Starter</h3>
                        <p class="pricing-desc">Perfect entry-level plan for personal blogs and landing pages.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">1.50</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 1 Hosted Website</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 5 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unmetered Bandwidth</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free SSL Certificates</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> cPanel Control Panel</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 5 Professional Email Accounts</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=1" target="_blank" rel="noopener" class="btn btn-secondary">Order Starter Plan</a>
                </div>

                <!-- Professional Plan -->
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Professional</h3>
                        <p class="pricing-desc">Designed for growing websites that demand higher performance.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">3.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 5 Hosted Websites</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 20 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unmetered Bandwidth</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free SSL & Auto Backups</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> cPanel & Softaculous 1-Click</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unlimited Email Accounts</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=2" target="_blank" rel="noopener" class="btn btn-primary">Order Professional</a>
                </div>

                <!-- Ultimate Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Ultimate</h3>
                        <p class="pricing-desc">Maximum resources and freedom for agencies & webmasters.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">5.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unlimited Websites</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 50 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unmetered Bandwidth</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Priority VIP Support</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free Domain Registration</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Unlimited Databases & Emails</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=3" target="_blank" rel="noopener" class="btn btn-secondary">Order Ultimate Plan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding bg-subtle">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">FAQ</span>
                <h2>Shared Hosting Questions</h2>
            </div>
            <div class="faq-grid">
                <div class="faq-item">
                    <button class="faq-question">What is Shared Hosting? <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                    <div class="faq-answer"><p>Shared hosting allows multiple websites to utilize a single high-performance server. It is the most economical solution for launching blogs and small business websites.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do you offer cPanel with shared hosting? <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></button>
                    <div class="faq-answer"><p>Yes! Every shared hosting account includes full access to industry-standard cPanel control panel for managing files, email accounts, and databases.</p></div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
