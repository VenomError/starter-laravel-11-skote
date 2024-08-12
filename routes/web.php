<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Landing\Index::class)->name('landingPage');

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Auth\Login::class)->name('login')->lazy();
    Route::get('/register', App\Livewire\Auth\Register::class)->name('register')->lazy();
    Route::get('/forgot-password', App\Livewire\Auth\ForgotPassword::class)->name('forgotPassword')->lazy();
    Route::get('/confirm-mail', App\Livewire\Auth\ConfirmMail::class)->name('auth.confirmMail')->lazy();
    Route::get('/two-step-verification', App\Livewire\Auth\TwoStepVerification::class)->name('auth.twoStepVerification')->lazy();
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\User\Index::class)->name('dashboard');

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', App\Livewire\Dashboard\Admin\Index::class)->name('dashboard');
    });
});

Route::get('/testing', App\Livewire\Dashboard\User\Index::class);
