<?php

use App\Actions\Central\CreateTenantAction;
use App\Actions\Central\TenantLoginAction;
use App\Http\Controllers\Central\Frontend\TenantController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'tenant.' ], function () {
    Route::view('login', 'central.frontend.auth.login')->name('login');
    Route::view('register', 'central.frontend.auth.register')->name('register');

    Route::post('login', TenantLoginAction::class)->name('login');
    Route::post('register', CreateTenantAction::class)->name('register');
});
