<?php
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "Privacy Policy - Beezerhost",
    "Beezerhost privacy policy detailing data protection, cookie usage, account security, and client privacy compliance."
);
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="hero-section" style="padding-bottom: 2rem;">
        <div class="container hero-content">
            <h1 class="hero-title">Privacy Policy</h1>
            <p class="hero-subtitle">Your privacy and data security are fundamental to our services.</p>
        </div>
    </section>

    <section class="section-padding-sm">
        <div class="container" style="max-width: 850px;">
            <div class="glass-card" style="line-height: 1.8;">
                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">1. Information We Collect</h2>
                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    We collect personal information required to deliver services, process invoices, and maintain security. This includes your name, email address, billing address, IP address, and ticket communications.
                </p>

                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">2. Use of Data</h2>
                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    Information provided is strictly used for order provisioning, billing, technical support, server security, and required system notifications. We never sell or lease your personal data to third parties.
                </p>

                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">3. Data Security & Cookies</h2>
                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    We employ SSL/TLS encryption, secure firewalls, and restricted administrative access to protect your account details. Essential session cookies are utilized for portal login and theme preferences.
                </p>

                <h2 style="font-size: 1.4rem; margin-bottom: 1rem;">4. Contact Privacy Officer</h2>
                <p style="color: var(--text-muted);">
                    If you have questions regarding this Privacy Policy or wish to request data deletion, please submit a ticket via our Client Portal or email <a href="mailto:contact@beezerhost.com" style="color: var(--color-brand-primary);">contact@beezerhost.com</a>.
                </p>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
