<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\OperatingUnitController;
use App\Http\Controllers\App\ProfileController;

Route::get('LoginOtherBrowser', [HomeController::class, 'LoginOtherBrowser']);
Route::get('LogoutByLoginOtherBrowser', [HomeController::class, 'LogoutByLoginOtherBrowser']);

Route::group(['middleware' => ['validateauthsession']], function () {
    Route::get('', [HomeController::class, 'index']);
    Route::get('dashboard', [HomeController::class, 'dashboard']);

    Route::resource('operatingUnit', OperatingUnitController::class);
    Route::get('operatingUnit.show/{id}', [OperatingUnitController::class, 'show'])->name('operatingUnit.show');
    Route::get('operatingUnit.edit/{id}', [OperatingUnitController::class, 'edit'])->name('operatingUnit.edit');

    Route::resource('profile', ProfileController::class);
    Route::get('profile.show/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile.edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
});
