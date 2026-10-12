<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "InterWorx Managed VPS - High Performance Control Panel",
    "Fully Managed VPS with InterWorx control panel starting at $25/mo. Includes user-friendly Nodeworx & Siteworx dashboard, security hardening, and 24/7 expert management."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('Service', [
    'name' => 'InterWorx Managed VPS',
    'description' => 'Affordable InterWorx managed VPS hosting starting at $25.00 per month.'
]);
?>

<main id="main-content">
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">Cost-Effective Management</span>
            <h1 class="hero-title">InterWorx Managed <span class="text-gradient">VPS Hosting</span></h1>
            <p class="hero-subtitle">
                High-performance managed VPS featuring the InterWorx control panel (NodeWorx & SiteWorx). Unbeatable value starting from just $25/month.
            </p>
        </div>
    </section>

    <!-- Pricing Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">InterWorx Powered</span>
                <h2>Choose Your InterWorx Managed Plan</h2>
                <p>Prefer cPanel or Plesk instead? <a href="full-managed-vps.php" style="color: var(--color-brand-primary); font-weight: 600;">Click here to view cPanel & Plesk Managed VPS</a>.</p>
            </div>

            <div class="pricing-grid">
                <!-- IW VPS 1 -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">IW Managed 1</h3>
                        <p class="pricing-desc">Ultra affordable managed server solution.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">25.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 2 CPU Cores</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 2 GB RAM</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 40 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> InterWorx Control Panel</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 24/7 Management Included</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=18" target="_blank" rel="noopener" class="btn btn-secondary">Order IW Plan 1</a>
                </div>

                <!-- IW VPS 2 -->
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3 class="pricing-title">IW Managed 2</h3>
                        <p class="pricing-desc">More power for growing client websites.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">40.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 4 CPU Cores</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 4 GB RAM</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 80 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> InterWorx Control Panel</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 24/7 Management Included</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=19" target="_blank" rel="noopener" class="btn btn-primary">Order IW Plan 2</a>
                </div>

                <!-- IW VPS 3 -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-title">IW Managed 3</h3>
                        <p class="pricing-desc">Maximum resources with full management.</p>
                        <div class="pricing-price">
                            <span class="pricing-currency">$</span>
                            <span class="pricing-amount">60.00</span>
                            <span class="pricing-period">/ mo</span>
                        </div>
                    </div>
                    <ul class="pricing-features">
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 6 CPU Cores</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 8 GB RAM</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> 160 GB NVMe Storage</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> InterWorx Control Panel</li>
                        <li><svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Priority VIP Server Care</li>
                    </ul>
                    <a href="https://beezerhost.com/panel/cart.php?a=add&pid=20" target="_blank" rel="noopener" class="btn btn-secondary">Order IW Plan 3</a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
