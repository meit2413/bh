<?php
http_response_code(404);
require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/schema.php';

render_head(
    "404 - Page Not Found",
    "The page you are looking for does not exist on Beezerhost."
);
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="hero-section text-center" style="padding: 8rem 0;">
        <div class="hero-glow"></div>
        <div class="container hero-content">
            <span class="section-badge" style="color: var(--color-brand-primary);">Error 404</span>
            <h1 class="hero-title">Page Not <span class="text-gradient">Found</span></h1>
            <p class="hero-subtitle">
                The requested page URL could not be found or has been moved to a new location.
            </p>
            <div class="hero-cta-group">
                <a href="index.php" class="btn btn-primary btn-lg">Return to Home</a>
                <a href="shared-hosting.php" class="btn btn-outline btn-lg">View Hosting Plans</a>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
