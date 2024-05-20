<?php

use App\Http\Controllers\Admin\AdminApplicationProccessController;
use App\Http\Controllers\Admin\AdminHomepageController;
use App\Http\Controllers\Admin\AdminMissionController;
use App\Http\Controllers\Admin\AdminOpenVolunteerController;
use App\Http\Controllers\Admin\AdminSlideBannerController;
use App\Http\Controllers\Admin\AdminValueController;
use App\Http\Controllers\Admin\AdminVolunteerRequirementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OpenVolunteerController;
use App\Http\Controllers\PartnershipAndSponsorshipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);
Route::get('open-volunteers', [OpenVolunteerController::class, 'index']);
Route::get('open-volunteers/{id}', [OpenVolunteerController::class, 'show']);
Route::get('events', [EventController::class, 'index']);
Route::get('events/{id}', [EventController::class, 'show']);
Route::get('blogs', [BlogController::class, 'index']);
Route::get('blogs/{id}', [BlogController::class, 'show']);
Route::get('partnership', [PartnershipAndSponsorshipController::class, 'showPartnership']);
Route::get('sponsorship', [PartnershipAndSponsorshipController::class, 'showSponsorship']);
Route::get('company', [CompanyController::class, 'index']);

Route::post('register', [RegisterController::class, 'store']);
Route::post('login', [LoginController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/homepage', [AdminHomepageController::class, 'show']);
        Route::get('/homepage/edit/{id}', [AdminHomepageController::class, 'edit']);
        Route::put('/homepage/update/{id}', [AdminHomepageController::class, 'update']);
        Route::get('/mission/add', [AdminMissionController::class, 'create']);
        Route::get('/mission/edit/{id}', [AdminMissionController::class, 'edit']);
        Route::get('/value/add', [AdminValueController::class, 'create']);
        Route::get('/value/edit/{id}', [AdminValueController::class, 'edit']);
        Route::get('/slide-banner', [AdminSlideBannerController::class, 'index']);
        Route::get('/slide-banner/add', [AdminSlideBannerController::class, 'create']);
        Route::get('/slide-banner/edit/{id}', [AdminSlideBannerController::class, 'edit']);
        Route::get('/open-volunteer', [AdminOpenVolunteerController::class, 'index']);
        Route::get('/open-volunteer/add', [AdminOpenVolunteerController::class, 'create']);
        Route::get('/open-volunteer/{id}', [AdminOpenVolunteerController::class, 'show']);
        Route::get('/open-volunteer/edit/{id}', [AdminOpenVolunteerController::class, 'edit']);
        Route::get('/requirement/add', [AdminVolunteerRequirementController::class, 'create']);
        Route::get('/application-proccess/add', [AdminApplicationProccessController::class, 'create']);
    });
});
