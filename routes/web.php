<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Auth\Login::class)->name('login')->lazy();
    Route::get('/register', App\Livewire\Auth\Register::class)->name('register')->lazy();
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', App\Livewire\Dashboard\User\Index::class)->name('dashboard');

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', App\Livewire\Dashboard\Admin\Index::class)->name('dashboard');
    });
});

Route::get('/tes', App\Livewire\Dashboard\User\Index::class)->lazy();
Route::get('/dashboard/tes', App\Livewire\Dashboard\User\Index::class)->lazy();
