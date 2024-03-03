<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

// Route::get('/', function (Request $request) {
//     //
// });

Route::get('/counters', function (Request $request) {
    return ['orders_count' => 666];
});

Route::get('/zadarma-loader-phone-fn.js', function (Request $request) {
    return response(file_get_contents(__DIR__ . '/../resources/js/zadarma-loader-phone-fn.js'), 200, [
        'Content-Type' => 'application/javascript',
    ]);
});

