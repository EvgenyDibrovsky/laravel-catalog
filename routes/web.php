<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactsController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get(LaravelLocalization::transRoute('routes.home'), [HomeController::class, 'home'])->name('home');
        Route::get(LaravelLocalization::transRoute('routes.catalog'), [CatalogController::class, 'showAllCategories'])->name('catalog');
        Route::get(LaravelLocalization::transRoute('routes.contacts'), [ContactsController::class, 'contacts'])->name('contacts');


        Route::fallback(function () {
            return view('errors.404');
        });
    }
);
