<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Reseller Hosting - White Label cPanel & WHM Solutions",
    "Launch your own hosting brand with Beezerhost Reseller Hosting. Includes WHM control panel, unlimited cPanel accounts, white label branding, and 24/7 support."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('Service', [
    'name' => 'Reseller Hosting',
    'description' => 'White label Reseller Hosting with WebHost Manager starting at $8.00 per month.'
]);
?>

<main id="main-content">
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">Turnkey Hosting Business</span>
            <h1 class="hero-title">White Label <span class="text-gradient">Reseller Hosting</span></h1>
            <p class="hero-subtitle">
                Create and manage custom hosting packages for your clients with WebHost Manager (WHM) and individual cPanel logins. White-labeled private nameservers included.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="pricing-grid">
                <!-- Bronze Reseller -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Reseller Bronze</h3>
                        <p class="pricing-desc">Great for freelancers and small web design agencies.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">8.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 20 cPanel Accounts</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 30 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 500 GB Monthly Bandwidth</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> WHM Control Panel</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free Private Nameservers</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=4" target="_blank" rel="noopener" class="btn btn-secondary">Order Bronze</a>
                </div>

                <!-- Silver Reseller -->
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Reseller Silver</h3>
                        <p class="pricing-desc">Expanded resources for growing client portfolios.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">15.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 50 cPanel Accounts</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 75 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 1,500 GB Monthly Bandwidth</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> WHM & Free SSL for Clients</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free Private Nameservers</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=5" target="_blank" rel="noopener" class="btn btn-primary">Order Silver</a>
                </div>

                <!-- Gold Reseller -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Reseller Gold</h3>
                        <p class="pricing-desc">Maximum scale for established hosting providers.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">25.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 100 cPanel Accounts</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 150 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 3,000 GB Monthly Bandwidth</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> WHM + Priority Ticket Support</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free WHMCS Billing Integration</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=6" target="_blank" rel="noopener" class="btn btn-secondary">Order Gold</a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
