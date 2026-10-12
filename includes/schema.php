<?php
function render_schema_org($type = 'Organization', $data = []) {
    $base_schema = [
        '@context' => 'https://schema.org',
        '@type' => $type,
        'name' => 'Beezerhost',
        'url' => 'https://beezerhost.com',
        'logo' => 'https://beezerhost.com/assets/images/logo.png',
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'email' => 'contact@beezerhost.com',
            'contactType' => 'customer service'
        ]
    ];

    $final_schema = array_merge($base_schema, $data);
    echo '<script type="application/ld+json">' . json_encode($final_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}
?>
