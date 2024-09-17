<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\HomePage;
use App\Livewire\ServicePage;
use App\Livewire\AboutPage;
use App\livewire\Tailwind;
use App\livewire\contact;
use App\livewire\Dashboard;

Route::group(['middleware' => 'set_language'], function () {

    Route::get('/', HomePage::class  )->name('home');
    Route::get('/services', ServicePage::class)->name('services');
    Route::get('/about', AboutPage::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact')->middleware('throttle:30,1');;
    Route::get('/tailwind',Tailwind::class )->name('tailwind');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');




    // controllers route
//    Route::get('/', [HomeController::class, 'home'])->name('home');
//
//    Route::get('/services', [HomeController::class, 'services'])->name('services');
//
//    Route::get('/about', [HomeController::class, 'aboutUs'])->name('about');

    Route::get('/language/{language}', [HomeController::class, 'changeLanguage']);
});



