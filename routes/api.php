<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\{PaintController, PainterController, CountryController};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->middleware(['devHeaderToken', 'client'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::resource('paints', PaintController::class);
    });
        
    Route::resource('painters', PainterController::class)->only([
        'index'
    ]);

    Route::resource('countries', CountryController::class)->only([
        'index'
    ]);
});

