<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Livewire\ShowPortofolio;
use App\Livewire\ShowAbout;
use App\Livewire\ShowContact;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',ShowHomePage::class)->name('home');
Route::get('/portofolio',ShowPortofolio::class)->name('portofolio');
Route::get('/about',ShowAbout::class)->name('about');
Route::get('/contact ',ShowContact::class)->name('contact');