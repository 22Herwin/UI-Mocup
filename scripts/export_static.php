<?php

use Illuminate\Contracts\Console\Kernel;

$root = dirname(__DIR__);

require $root . '/vendor/autoload.php';
$app = require $root . '/bootstrap/app.php';

$kernel = $app->make(Kernel::class);
$kernel->bootstrap();

$exportBase = getenv('EXPORT_BASE') ?: '';
if ($exportBase !== '') {
    $exportBase = rtrim($exportBase, '/') . '/';
    config([
        'app.url' => rtrim($exportBase, '/'),
        'app.asset_url' => rtrim($exportBase, '/'),
        'vite.asset_url' => rtrim($exportBase, '/'),
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
        $html = preg_replace('#[A-Za-z]:/[^"\']*/build/#', $exportBase . 'build/', $html);
    }
    file_put_contents($dir . '/index.html', $html);
}

file_put_contents($docsDir . '/.nojekyll', "");

echo "Static export complete in docs/\n";
