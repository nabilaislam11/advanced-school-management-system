<?php

/**
 * Read-only inventory of controller classes referenced by routes/web.php.
 * Run: php tools/audit-route-controllers.php
 * Exit code 0 means all controller classes exist; 1 means some are absent.
 */
$root = dirname(__DIR__);
$routes = file_get_contents($root . '/routes/web.php');
preg_match_all('/[\x27\x22]([A-Za-z][A-Za-z0-9_]*Controller)(?:@|[\x27\x22])/', $routes, $matches);
$controllers = array_unique($matches[1]);
sort($controllers);
$missing = [];
foreach ($controllers as $controller) {
    $candidates = [
        $root . '/app/Http/Controllers/' . $controller . '.php',
        $root . '/app/Http/Controllers/SupportTeam/' . $controller . '.php',
        $root . '/app/Http/Controllers/SuperAdmin/' . $controller . '.php',
        $root . '/app/Http/Controllers/MyParent/' . $controller . '.php',
    ];
    if (!array_filter($candidates, 'is_file')) {
        $missing[] = $controller;
    }
}
echo "Referenced controller names: " . count($controllers) . PHP_EOL;
echo "Unresolved controller names: " . count($missing) . PHP_EOL;
foreach ($missing as $controller) {
    echo "MISSING: {$controller}" . PHP_EOL;
}
exit(count($missing) ? 1 : 0);
