<?php

use Illuminate\Support\Facades\Route;
use Modules\Percentage\Http\Controllers\PercentageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => 'auth'
], function () {
    Route::resource('percentage', PercentageController::class)->except('destroy')->names('percentage');
    Route::group([
        'prefix' => 'percentage'
    ], function () {
        Route::get('/delete/{id}', [PercentageController::class, 'delete'])->name('percentage.delete');
    });
});
