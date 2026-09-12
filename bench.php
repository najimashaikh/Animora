<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$t0 = microtime(true);
$courses = \Illuminate\Support\Facades\Cache::remember('home_courses_cache', 3600, function() {
    return \App\Models\Course::where('is_featured_home', true)->orderBy('sort_order', 'asc')->get();
});
$t1 = microtime(true);

echo "Courses count: " . $courses->count() . "\n";
echo "Cached Query took: " . round(($t1 - $t0) * 1000, 2) . " ms\n";

