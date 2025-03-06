<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\AuthController;
use Modules\User\Http\Controllers\UserController;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'perform'])->name('perform');

Route::get('logout', function () {
    session()->flush();
    return redirect('login')->with(['success' => ['Logout admin berhasil']]);
})->name('logout');

Route::group([
    'middleware' => ['auth']
], function () {
    Route::get('user', [UserController::class, 'index'])->name('user.index');
});
