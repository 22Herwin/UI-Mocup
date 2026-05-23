<?php

use Illuminate\Contracts\Console\Kernel;

$root = dirname(__DIR__);

require $root . '/vendor/autoload.php';
$app = require $root . '/bootstrap/app.php';

$kernel = $app->make(Kernel::class);
$kernel->bootstrap();

$exportBase = getenv('EXPORT_BASE') ?: '';
$exportBase = trim($exportBase);
$repoSlugEnv = getenv('REPO_SLUG') ?: '';

if ($repoSlugEnv !== '') {
    $repoSlugEnv = trim($repoSlugEnv, '/');
    $exportBase = '/' . $repoSlugEnv . '/';
}

if ($exportBase !== '') {
    if (str_starts_with($exportBase, 'http')) {
        $path = parse_url($exportBase, PHP_URL_PATH) ?: '/';
        $exportBase = $path;
    }

    if (!str_starts_with($exportBase, '/')) {
        $exportBase = '/' . $exportBase;
    }

    $exportBase = rtrim($exportBase, '/') . '/';
    $assetBase = rtrim($exportBase, '/');
    $repoSlug = trim($exportBase, '/');

    config([
        'app.url' => $assetBase,
        'app.asset_url' => $assetBase,
        'vite.asset_url' => $assetBase,
    ]);
}

$pages = [
    '' => 'pages.landing',
    'login' => 'pages.login',
    'student' => 'pages.student',
    'student/session' => 'pages.session',
    'projects' => 'pages.projects',
    'documents' => 'pages.documents',
    'reports' => 'pages.reports',
    'lecturer' => 'pages.lecturer',
    'admin/tenant' => 'pages.tenant',
    'integrations' => 'pages.integrations',
];

$tailwindScript = '<script data-export="mockup" src="https://cdn.tailwindcss.com"></script>';
$customCss = <<<'CSS'
<style data-export="mockup">
:root {
    --ink: #0f172a;
    --paper: #fbf7ef;
    --accent: #0f766e;
    --accent-warm: #b45309;
    --ember: #f97316;
    --grid: rgba(15, 23, 42, 0.06);
}

body {
    font-family: "Space Grotesk", ui-sans-serif, system-ui, sans-serif;
    background-color: var(--paper);
    color: var(--ink);
}

h1,
h2,
h3,
h4 {
    font-family: "Fraunces", serif;
    letter-spacing: -0.01em;
}

a,
button {
    cursor: pointer;
}

.page-shell {
    background-image: radial-gradient(circle at 20% 20%, rgba(15, 118, 110, 0.08), transparent 45%),
        radial-gradient(circle at 80% 10%, rgba(251, 191, 36, 0.12), transparent 40%),
        linear-gradient(120deg, rgba(15, 23, 42, 0.04), transparent 60%),
        linear-gradient(var(--grid) 1px, transparent 1px),
        linear-gradient(90deg, var(--grid) 1px, transparent 1px);
    background-size: auto, auto, auto, 28px 28px, 28px 28px;
    background-position: center, center, center, -1px -1px, -1px -1px;
}

.glass {
    background: rgba(255, 255, 255, 0.82);
    border: 1px solid rgba(15, 23, 42, 0.12);
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
}

.panel {
    background: rgba(255, 255, 255, 0.9);
    border: 1px solid rgba(15, 23, 42, 0.1);
    box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
}

.chip {
    border: 1px solid rgba(15, 23, 42, 0.12);
    background: rgba(255, 255, 255, 0.9);
}

.tag-ink {
    background: rgba(15, 23, 42, 0.08);
    color: rgba(15, 23, 42, 0.85);
}

.tag-accent {
    background: rgba(15, 118, 110, 0.12);
    color: #0f766e;
}

.tag-warm {
    background: rgba(180, 83, 9, 0.12);
    color: #b45309;
}

.animate-fade-up {
    animation: fade-up 0.65s ease both;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes fade-up {
    from {
        opacity: 0;
        transform: translateY(16px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%,
    100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-8px);
    }
}
</style>
CSS;

$docsDir = $root . '/docs';
if (!is_dir($docsDir)) {
    mkdir($docsDir, 0777, true);
}

foreach ($pages as $path => $view) {
    $dir = $docsDir . ($path ? '/' . $path : '');
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    $html = view($view)->render();

    if ($exportBase !== '') {
        if (!empty($repoSlug)) {
            $prefixPattern = '#//?(?:[A-Za-z]:|[a-z])/[^"\']*/' . preg_quote($repoSlug, '#') . '/#';
            $html = preg_replace($prefixPattern, '/' . $repoSlug . '/', $html);
            $html = str_replace('/' . $repoSlug . '/' . $repoSlug . '/', '/' . $repoSlug . '/', $html);
        }

        $html = preg_replace('#[A-Za-z]:/[^"\']*/build/#', $exportBase . 'build/', $html);
        $html = preg_replace('#\b(href|src|action)="/(?!/)([^"]*)"#', '$1="' . $exportBase . '$2"', $html);
    }

    $html = preg_replace('#<link[^>]*build/assets[^>]*>#i', '', $html);
    $html = preg_replace('#<script[^>]*build/assets[^>]*></script>#i', '', $html);
    $html = preg_replace('#<script[^>]*tailwindcss[^>]*></script>#i', '', $html);
    $html = preg_replace('#<style[^>]*data-export="mockup"[^>]*>.*?</style>#is', '', $html);
    $html = str_replace('</head>', $tailwindScript . $customCss . '</head>', $html);
    file_put_contents($dir . '/index.html', $html);
}

file_put_contents($docsDir . '/.nojekyll', "");

if (is_dir($docsDir . '/build')) {
    $buildDir = new RecursiveDirectoryIterator($docsDir . '/build', RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($buildDir, RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($files as $file) {
        $file->isDir() ? rmdir($file->getRealPath()) : unlink($file->getRealPath());
    }
    rmdir($docsDir . '/build');
}

echo "Static export complete in docs/\n";
