<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/dashboard', \App\Livewire\Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/{id}', \App\Livewire\Workspace::class)->middleware(['auth', 'verified'])->name('workspace');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/home',\App\Livewire\Landing::class)->name('home');
Route::get('/pricing',\App\Livewire\Pricing::class)->name('pricing');
Route::get('/about',\App\Livewire\About::class)->name('about');
Route::get('/blog',\App\Livewire\Blog::class)->name('blog');
