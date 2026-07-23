<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/status', function () {
    return response()->json([
        'status' => 'OK',
        'port' => env('APP_PORT', 8000),
        'host' => env('APP_HOST', 'localhost'),
        'environment' => app()->environment(),
        'debug' => config('app.debug'),
        'laravel_version' => app()->version(),
        'php_version' => PHP_VERSION,
        'app_name' => config('app.name'),
        'app_url' => config('app.url'),
        'name_servers' => explode(',', env('DB_HOST', '127.0.0.1')),
        'uptime' => round(microtime(true) - (defined('LARAVEL_START') ? LARAVEL_START : microtime(true)), 2) . 's',
        'cache_driver' => config('cache.default'),
        'queue_connection' => config('queue.default'),
        'session_driver' => config('session.driver'),
        'timezone' => config('app.timezone'),
    ]);
});
