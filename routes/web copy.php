<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\OfferController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPaymentsController;
use App\Http\Controllers\DashboardSettingAccountController;
use App\Http\Controllers\DashboardSettingProfileController;
use App\Http\Controllers\DashboardSettingCompanyController;
use App\Http\Controllers\DashboardSettingPostAdsController;

use App\Http\Controllers\ContactFormSingleOfferController;
use App\Http\Controllers\ContactFormAdminisrationController;


Route::get('/', [HomeController::class, 'home']);
Route::get('/catalog', [CatalogController::class, 'showAllCategories']);
Route::get('/catalog/{categorySlug}', [CategoryDetailController::class, 'showCategory']);
Route::get('/catalog/{categorySlug}/{offerSlug}', [OfferController::class, 'showOffer'])->name('offer.show');
Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'privacypolicy'])->name('privacy.policy');

// Auth
Route::get('/registration', [RegistrationController::class, 'registration']);
Route::get('/login', [LoginController::class, 'login']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/dashboard/setting-profile', [DashboardSettingProfileController::class, 'dashboard']);
Route::get('/dashboard/setting-company', [DashboardSettingCompanyController::class, 'dashboard']);
Route::get('/dashboard/post-ads', [DashboardSettingPostAdsController::class, 'dashboard']);
Route::get('/dashboard/payments', [DashboardPaymentsController::class, 'dashboard']);
Route::get('/dashboard/setting-account', [DashboardSettingAccountController::class, 'dashboard']);

// Forms
Route::post('/contact/send-single-offer', [ContactFormSingleOfferController::class, 'send'])->name('contact.send.single.offer');
Route::post('/contact/send-admin', [ContactFormAdminisrationController::class, 'sendContact'])->name('contact.send.admin');
