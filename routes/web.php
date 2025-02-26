<?php

use Illuminate\Support\Facades\Route;
use \Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Volt::route('spatie-permissions','pages.spatie-permissions.index')->name('spatie-permissions.index');

Route::prefix('/spatie-permissions')->name('spatie-permissions.')->group(function(){
    Volt::route('','pages.spatie-permissions.index')->name('index');
    Volt::route('model-has-permissions','pages.spatie-permissions.model-has-permissions.index')->name('model-has-permissions.index');
    Volt::route('model-has-roles','pages.spatie-permissions.model-has-roles.index')->name('model-has-roles.index');
    Volt::route('permissions','pages.spatie-permissions.permissions.index')->name('permissions.index');
    Volt::route('role-has-permissions','pages.spatie-permissions.role-has-permissions.index')->name('role-has-permissions.index');
    Volt::route('roles','pages.spatie-permissions.roles.index')->name('roles.index');
});

require __DIR__.'/auth.php';
