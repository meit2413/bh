<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Full Managed VPS - cPanel & Plesk Server Management",
    "Turnkey Fully Managed VPS Hosting with cPanel or Plesk control panel, 24/7 proactive monitoring, security updates, and instant support. Starts at $25/mo."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('Service', [
    'name' => 'Full Managed VPS',
    'description' => 'Turnkey cPanel & Plesk managed VPS hosting starting at $25.00 per month.'
]);
?>

<main id="main-content">
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">Peace of Mind Hosting</span>
            <h1 class="hero-title">Fully Managed <span class="text-gradient">VPS Servers</span></h1>
            <p class="hero-subtitle">
                Hassle-free VPS administration. We handle security hardening, OS updates, backups, control panel setup, and 24/7 proactive technical support so you can focus on growing your site.
            </p>
        </div>
    </section>

    <!-- cPanel / Plesk Managed VPS Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Control Panel Included</span>
                <h2>cPanel & Plesk Managed VPS Plans</h2>
                <p>Looking for InterWorx panel? <a href="iw-full-managed-vps.php" style="color: var(--color-brand-primary); font-weight: 600;">Click here to view InterWorx Managed VPS starting at $25/mo</a>.</p>
            </div>

            <div class="pricing-grid">
                <!-- Managed 1 -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Managed VPS Lite</h3>
                        <p class="pricing-desc">Great for growing web applications and busy stores.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">35.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 2 CPU Cores</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 4 GB Guaranteed RAM</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 60 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> cPanel / Plesk License Included</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Full Proactive Management</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=12" target="_blank" rel="noopener" class="btn btn-secondary">Order Managed Lite</a>
                </div>

                <!-- Managed Pro -->
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Managed VPS Pro</h3>
                        <p class="pricing-desc">Our most popular managed server for digital agencies.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">55.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 4 CPU Cores</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 8 GB Guaranteed RAM</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 120 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> cPanel / Plesk Control Panel</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Free Weekly Automated Backups</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=13" target="_blank" rel="noopener" class="btn btn-primary">Order Managed Pro</a>
                </div>

                <!-- Managed Enterprise -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Managed Enterprise</h3>
                        <p class="pricing-desc">Heavy-duty compute power for mission-critical apps.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">85.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 8 CPU Cores</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 16 GB Guaranteed RAM</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 240 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> cPanel / Plesk + Dedicated Admin</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> VIP Priority 24x7 SLA</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=14" target="_blank" rel="noopener" class="btn btn-secondary">Order Enterprise</a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
