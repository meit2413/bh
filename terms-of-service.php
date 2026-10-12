<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Terms of Service - Beezerhost",
    "Beezerhost terms of service, acceptable use policy, refund policy, SLA guarantees, and account agreements."
);
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="hero-section" style="padding-bottom: 2rem;">
        <div class="container hero-content">
            <h1 class="hero-title">Terms of Service</h1>
            <p class="hero-subtitle">Terms and conditions governing the use of Beezerhost services.</p>
        </div>
    </section>

    <section class="section-padding-sm">
        <div class="container" style="max-width: 850px;">
            <div class="glass-card" style="line-height: 1.8;">
                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">1. Acceptable Use Policy (AUP)</h2>
                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    All services provided by Beezerhost may be used for lawful purposes only. Transmission, storage, or presentation of any information or data in violation of applicable international laws is prohibited. Malicious activities, phishing, outbound spam, or DDoS attacks result in immediate termination.
                </p>

                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">2. 30-Day Money Back Guarantee</h2>
                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    Shared and Reseller hosting plans qualify for a full 30-day money-back guarantee from the date of initial order. Domain registrations, software licenses, and setup fees are non-refundable.
                </p>

                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">3. Service Level Agreement (SLA) & Uptime</h2>
                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    Beezerhost guarantees a 99.9% network uptime SLA for all web hosting and VPS services. Planned maintenance windows announced in advance are excluded from SLA calculations.
                </p>

                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">4. Contact & Support</h2>
                <p style="color: var(--text-muted);">
                    For inquiries or legal notices, contact our administration team via <a href="mailto:contact@beezerhost.com" style="color: var(--color-brand-primary);">contact@beezerhost.com</a>.
                </p>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
