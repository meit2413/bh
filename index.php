<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Affordable Web Hosting, Reseller & Managed VPS Servers",
    "Beezerhost offers high-performance shared hosting, reseller hosting, and fully managed VPS servers with 99.9% uptime guarantee and 24/7 support."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('WebSite', [
    'description' => 'Beezerhost high-performance web hosting and VPS provider.'
]);
?>

<main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">Next-Gen Cloud Infrastructure</span>
            <h1 class="hero-title">Ultra-Fast, Secure & <span class="text-gradient">Affordable Hosting</span></h1>
            <p class="hero-subtitle">
                Power your website with SSD NVMe storage, free cPanel, automated backups, and 24/7 expert monitoring. Unmatched speed for personal sites and high-traffic applications.
            </p>
            <div class="hero-cta-group">
                <a href="shared-hosting.php" class="btn btn-primary btn-lg">Explore Shared Hosting</a>
                <a href="full-managed-vps.php" class="btn btn-secondary btn-lg">Managed VPS Plans</a>
            </div>

            <div class="feature-badges-grid">
                <div class="feature-badge-card">
                    <div class="feature-badge-icon">
                        <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div style="text-align: left;">
                        <h4 style="font-size: 0.95rem; margin-bottom: 0.2rem;">Lightning NVMe</h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">20x faster page load speed</p>
                    </div>
                </div>
                <div class="feature-badge-card">
                    <div class="feature-badge-icon">
                        <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div style="text-align: left;">
                        <h4 style="font-size: 0.95rem; margin-bottom: 0.2rem;">99.9% Uptime SLA</h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Guaranteed reliability</p>
                    </div>
                </div>
                <div class="feature-badge-card">
                    <div class="feature-badge-icon">
                        <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <div style="text-align: left;">
                        <h4 style="font-size: 0.95rem; margin-bottom: 0.2rem;">24/7 Expert Support</h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Always here to assist you</p>
                    </div>
                </div>
                <div class="feature-badge-card">
                    <div class="feature-badge-icon">
                        <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <div style="text-align: left;">
                        <h4 style="font-size: 0.95rem; margin-bottom: 0.2rem;">Free SSL & Backups</h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Ironclad security included</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Domain Search Bar -->
    <section class="section-padding-sm">
        <div class="container">
            <?php include __DIR__ . '/includes/domain-search.php'; ?>
        </div>
    </section>

    <!-- Hosting Services Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Solutions</span>
                <h2>Tailored Web Hosting for Every Need</h2>
                <p>Choose the optimal hosting architecture for your business growth.</p>
            </div>

            <div class="bento-grid">
                <div class="glass-card bento-col-6">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;">
                        <div class="feature-badge-icon" style="width: 50px; height: 50px;">
                            <svg width="26" height="26" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.35rem;">Shared Hosting</h3>
                            <p style="font-size: 0.88rem; color: var(--color-brand-primary); font-weight: 600;">Starts from $1.50 / mo</p>
                        </div>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                        Ideal for blogs, personal websites, and small businesses. Includes cPanel control panel, 1-click Softaculous installer, free SSL, and unmetered bandwidth.
                    </p>
                    <a href="shared-hosting.php" class="btn btn-secondary">View Shared Plans &rarr;</a>
                </div>

                <div class="glass-card bento-col-6">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;">
                        <div class="feature-badge-icon" style="width: 50px; height: 50px;">
                            <svg width="26" height="26" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.35rem;">Reseller Hosting</h3>
                            <p style="font-size: 0.88rem; color: var(--color-brand-primary); font-weight: 600;">Starts from $8.00 / mo</p>
                        </div>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                        Start your own web hosting provider brand with white-label WebHost Manager (WHM) access, cPanel for client accounts, and complete server management.
                    </p>
                    <a href="reseller-hosting.php" class="btn btn-secondary">View Reseller Plans &rarr;</a>
                </div>

                <div class="glass-card bento-col-6">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;">
                        <div class="feature-badge-icon" style="width: 50px; height: 50px;">
                            <svg width="26" height="26" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.35rem;">Self Managed VPS</h3>
                            <p style="font-size: 0.88rem; color: var(--color-brand-primary); font-weight: 600;">Starts from $8.00 / mo</p>
                        </div>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                        Full root access with dedicated CPU cores, guaranteed RAM, high-speed NVMe SSDs, and choice of Linux or Windows OS for tech-savvy developers.
                    </p>
                    <a href="self-managed-vps.php" class="btn btn-secondary">View VPS Servers &rarr;</a>
                </div>

                <div class="glass-card bento-col-6">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem; align-items: center;">
                        <div class="feature-badge-icon" style="width: 50px; height: 50px;">
                            <svg width="26" height="26" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h3 style="font-size: 1.35rem;">Full Managed VPS</h3>
                            <p style="font-size: 0.88rem; color: var(--color-brand-primary); font-weight: 600;">Starts from $25.00 / mo</p>
                        </div>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                        Turnkey VPS solution featuring full server administration, control panels (cPanel, Plesk, or InterWorx), proactive monitoring, and 24x7 priority support.
                    </p>
                    <a href="full-managed-vps.php" class="btn btn-secondary">Explore Managed VPS &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Included Features Bento -->
    <section class="section-padding bg-subtle">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Why Beezerhost</span>
                <h2>Enterprise Infrastructure Built Included</h2>
                <p>Every account comes loaded with premium features at no extra cost.</p>
            </div>

            <div class="bento-grid">
                <div class="glass-card bento-col-4">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Domain Manager</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Track, update, transfer, and administer all of your domain names effortlessly from one centralized dashboard.</p>
                </div>
                <div class="glass-card bento-col-4">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Softaculous 1-Click</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Install over 400+ popular web applications including WordPress, Drupal, Joomla, and Magento in a single click.</p>
                </div>
                <div class="glass-card bento-col-4">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Advanced Email Hosting</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Create custom webmail addresses, autoresponders, spam filters, and email forwarders seamlessly.</p>
                </div>
                <div class="glass-card bento-col-4">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">Free Site Migration</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Our migration specialists will transfer your existing website and databases to Beezerhost with zero downtime.</p>
                </div>
                <div class="glass-card bento-col-4">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">DDoS Protection</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Real-time automated DDoS defense systems filter bad traffic to keep your site accessible round the clock.</p>
                </div>
                <div class="glass-card bento-col-4">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.15rem;">30-Day Money Back</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem;">Try our hosting risk-free. If you are not completely satisfied, receive a full refund within 30 days.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action include -->
    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
