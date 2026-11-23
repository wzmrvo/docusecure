<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

function test($name, $cb) {
    try {
        $out = $cb();
        echo "OK: $name (" . strlen($out) . " bytes)\n";
    } catch (\Throwable $e) {
        echo "FAIL: $name -> " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine() . "\n";
    }
}

test('components.badge', fn() => view('components.badge', ['tier' => 4])->render());
test('components.stat-card', fn() => view('components.stat-card', ['label' => 'Test', 'value' => '10'])->render());
test('components.sidebar', fn() => view('components.sidebar', ['currentRole' => 'admin'])->render());
test('components.topbar', fn() => view('components.topbar', ['currentRole' => 'admin'])->render());
test('layouts.app', fn() => view('layouts.app', ['role' => 'admin'])->render());
test('admin.index', fn() => view('admin.index')->render());
