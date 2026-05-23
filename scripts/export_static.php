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
        }

        $html = preg_replace('#[A-Za-z]:/[^"\']*/build/#', $exportBase . 'build/', $html);
        $html = preg_replace('#\b(href|src|action)="/(?!/)([^"]*)"#', '$1="' . $exportBase . '$2"', $html);
    }
    file_put_contents($dir . '/index.html', $html);
}

file_put_contents($docsDir . '/.nojekyll', "");

echo "Static export complete in docs/\n";
