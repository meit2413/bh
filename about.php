<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "About Beezerhost - High Speed & Reliable Web Hosting Provider",
    "Learn about Beezerhost mission, infrastructure, data centers, and commitment to providing top-rated affordable web hosting and managed VPS solutions."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('Organization', [
    'name' => 'Beezerhost',
    'description' => 'Managed Hosting Provider offering Shared, Reseller, and Managed VPS.'
]);
?>

<main id="main-content">
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">Empowering Webmasters Since 2019</span>
            <h1 class="hero-title">About <span class="text-gradient">Beezerhost</span></h1>
            <p class="hero-subtitle">
                We are dedicated to offering affordable, rock-solid web hosting and VPS infrastructure backed by enterprise NVMe hardware and expert 24/7 technical support.
            </p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="bento-grid" style="align-items: center;">
                <div class="glass-card bento-col-6">
                    <h2 style="font-size: 1.8rem; margin-bottom: 1rem;">Our Core Infrastructure Mission</h2>
                    <p style="color: var(--text-muted); margin-bottom: 1.25rem;">
                        Beezerhost was built to simplify web hosting without compromising on performance, security, or reliability. Whether you run a personal blog, a busy e-commerce store, or manage client infrastructure, our servers deliver blistering speed with enterprise reliability.
                    </p>
                    <p style="color: var(--text-muted);">
                        With multi-gigabit connectivity, LiteSpeed acceleration, and proactive server administration, we guarantee your applications remain fast and online 24 hours a day, 365 days a year.
                    </p>
                </div>
                <div class="glass-card bento-col-6">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div style="background: var(--bg-surface-elevated); padding: 1.5rem; border-radius: var(--radius-md); text-align: center;">
                            <h3 style="font-size: 2.2rem; color: var(--color-brand-primary);">99.9%</h3>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.2rem;">Uptime SLA Guarantee</p>
                        </div>
                        <div style="background: var(--bg-surface-elevated); padding: 1.5rem; border-radius: var(--radius-md); text-align: center;">
                            <h3 style="font-size: 2.2rem; color: var(--color-brand-primary);">24 / 7</h3>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.2rem;">Expert Support</p>
                        </div>
                        <div style="background: var(--bg-surface-elevated); padding: 1.5rem; border-radius: var(--radius-md); text-align: center;">
                            <h3 style="font-size: 2.2rem; color: var(--color-brand-primary);">100%</h3>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.2rem;">NVMe SSD Storage</p>
                        </div>
                        <div style="background: var(--bg-surface-elevated); padding: 1.5rem; border-radius: var(--radius-md); text-align: center;">
                            <h3 style="font-size: 2.2rem; color: var(--color-brand-primary);">30 Days</h3>
                            <p style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.2rem;">Money Back Guarantee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
