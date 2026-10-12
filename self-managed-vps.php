<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Self Managed VPS Servers - Root Access & NVMe Power",
    "High performance Self-Managed VPS servers with full root access, KVM virtualization, NVMe SSD storage, and choice of Linux or Windows OS. Starts at $8/mo."
);
require_once __DIR__ . '/includes/header.php';
render_schema_org('Service', [
    'name' => 'Self Managed VPS',
    'description' => 'Unmanaged KVM VPS hosting with root access starting at $8.00 per month.'
]);
?>

<main id="main-content">
    <section class="hero-section">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge">Full Control & Dedicated Resources</span>
            <h1 class="hero-title">Self Managed <span class="text-gradient">VPS Servers</span></h1>
            <p class="hero-subtitle">
                High performance cloud instances built on enterprise hardware. Includes full root access, instant OS reinstallation, and 24/7 network monitoring.
            </p>
        </div>
    </section>

    <!-- VPS Interactive Configurator / Slider Table -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Flexible Specifications</span>
                <h2>Scalable Virtual Private Servers</h2>
                <p>Deploy scalable compute power instantly tailored to your stack.</p>
            </div>

            <div class="table-responsive glass-card" style="padding: 0;">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>CPU Cores</th>
                            <th>Guaranteed RAM</th>
                            <th>NVMe Storage</th>
                            <th>Bandwidth</th>
                            <th>Monthly Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 Core</strong></td>
                            <td>1 GB RAM</td>
                            <td>25 GB NVMe</td>
                            <td>1 TB</td>
                            <td><strong style="color: var(--color-brand-primary); font-size: 1.2rem;">$8.00</strong></td>
                            <td><a href="https://beezerhost.com/panel/cart.php?gid=3" target="_blank" rel="noopener" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;">Order VPS</a></td>
                        </tr>
                        <tr>
                            <td><strong>2 Cores</strong></td>
                            <td>2 GB RAM</td>
                            <td>50 GB NVMe</td>
                            <td>2 TB</td>
                            <td><strong style="color: var(--color-brand-primary); font-size: 1.2rem;">$15.00</strong></td>
                            <td><a href="https://beezerhost.com/panel/cart.php?gid=3" target="_blank" rel="noopener" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;">Order VPS</a></td>
                        </tr>
                        <tr>
                            <td><strong>4 Cores</strong></td>
                            <td>4 GB RAM</td>
                            <td>80 GB NVMe</td>
                            <td>4 TB</td>
                            <td><strong style="color: var(--color-brand-primary); font-size: 1.2rem;">$28.00</strong></td>
                            <td><a href="https://beezerhost.com/panel/cart.php?gid=3" target="_blank" rel="noopener" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;">Order VPS</a></td>
                        </tr>
                        <tr>
                            <td><strong>6 Cores</strong></td>
                            <td>8 GB RAM</td>
                            <td>160 GB NVMe</td>
                            <td>6 TB</td>
                            <td><strong style="color: var(--color-brand-primary); font-size: 1.2rem;">$50.00</strong></td>
                            <td><a href="https://beezerhost.com/panel/cart.php?gid=3" target="_blank" rel="noopener" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;">Order VPS</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
