<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;

class HomeController extends BaseController
{
    public function index()
    {
        $uptime = round(microtime(true) - (defined('\LARAVEL_START') ? \LARAVEL_START : microtime(true)), 2);

        return view('dashboard', [
            'appName' => config('app.name'),
            'environment' => app()->environment(),
            'debug' => config('app.debug'),
            'port' => env('APP_PORT', 8000),
            'host' => env('APP_HOST', 'localhost'),
            'url' => config('app.url'),
            'phpVersion' => PHP_VERSION,
            'laravelVersion' => app()->version(),
            'os' => PHP_OS,
            'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'PHP CLI',
            'protocol' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http',
        ]);
    }
}
