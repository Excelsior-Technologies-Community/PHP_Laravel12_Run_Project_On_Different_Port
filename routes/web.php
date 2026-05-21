<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Laravel App Running Successfully!";
});
Route::get('/status', function () {
    return response()->json([
        'status' => 'OK',
        'port' => env('APP_PORT', 8000),
        'environment' => app()->environment(),
    ]);
});