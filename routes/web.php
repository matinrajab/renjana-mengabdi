<?php

use App\Http\Controllers\Admin\AdminAchievementController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminCompanyController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminHomepageController;
use App\Http\Controllers\Admin\AdminMissionController;
use App\Http\Controllers\Admin\AdminOpenVolunteerController;
use App\Http\Controllers\Admin\AdminPartnershipAndSponsorshipController;
use App\Http\Controllers\Admin\AdminSlideBannerController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminValueController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OpenVolunteerController;
use App\Http\Controllers\PartnershipAndSponsorshipController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');

Route::name('open-volunteers.')->prefix('open-volunteers')->group(function () {
    Route::get('/', [OpenVolunteerController::class, 'index'])->name('index');
    Route::get('{openVolunteer}', [OpenVolunteerController::class, 'show'])->name('show');
});

Route::name('events.')->prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('{event}', [EventController::class, 'show'])->name('show');
});

Route::name('blogs.')->prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('{blog}', [BlogController::class, 'show'])->name('show');
});

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
        Route::prefix('homepage')->group(function () {
            Route::get('/', [AdminHomepageController::class, 'show']);
            Route::get('edit', [AdminHomepageController::class, 'edit']);
            Route::put('update', [AdminHomepageController::class, 'update']);
        });

        Route::prefix('mission')->group(function () {
            Route::get('add', [AdminMissionController::class, 'create']);
            Route::post('store', [AdminMissionController::class, 'store']);
            Route::get('edit/{id}', [AdminMissionController::class, 'edit']);
            Route::put('update/{id}', [AdminMissionController::class, 'update']);
            Route::get('delete/{id}', [AdminMissionController::class, 'destroy']);
        });

        Route::prefix('value')->group(function () {
            Route::get('add', [AdminValueController::class, 'create']);
            Route::post('store', [AdminValueController::class, 'store']);
            Route::get('edit/{id}', [AdminValueController::class, 'edit']);
            Route::put('update/{id}', [AdminValueController::class, 'update']);
            Route::get('delete/{id}', [AdminValueController::class, 'destroy']);
        });

        Route::prefix('slide-banner')->group(function () {
            Route::get('/', [AdminSlideBannerController::class, 'index']);
            Route::get('add', [AdminSlideBannerController::class, 'create']);
            Route::post('store', [AdminSlideBannerController::class, 'store']);
            Route::get('edit/{id}', [AdminSlideBannerController::class, 'edit']);
            Route::put('update/{id}', [AdminSlideBannerController::class, 'update']);
            Route::get('delete/{id}', [AdminSlideBannerController::class, 'destroy']);
        });

        Route::prefix('open-volunteer')->group(function () {
            Route::get('/', [AdminOpenVolunteerController::class, 'index']);
            Route::get('add', [AdminOpenVolunteerController::class, 'create']);
            Route::get('{id}', [AdminOpenVolunteerController::class, 'show']);
            Route::post('store', [AdminOpenVolunteerController::class, 'store']);
            Route::get('edit/{id}', [AdminOpenVolunteerController::class, 'edit']);
            Route::put('update/{id}', [AdminOpenVolunteerController::class, 'update']);
            Route::get('delete/{id}', [AdminOpenVolunteerController::class, 'destroy']);
        });

        Route::prefix('events')->group(function () {
            Route::get('/', [AdminEventController::class, 'index']);
            Route::get('{id}', [AdminEventController::class, 'show']);
        });

        Route::prefix('event')->group(function () {
            Route::get('add', [AdminEventController::class, 'create']);
            Route::post('store', [AdminEventController::class, 'store']);
            Route::get('edit/{id}', [AdminEventController::class, 'edit']);
            Route::put('update/{id}', [AdminEventController::class, 'update']);
            Route::get('delete/{id}', [AdminEventController::class, 'destroy']);
        });

        Route::prefix('gallery')->group(function () {
            Route::get('add/{eventId}', [AdminGalleryController::class, 'create']);
            Route::post('store/{eventId}', [AdminGalleryController::class, 'store']);
            Route::get('edit/{id}', [AdminGalleryController::class, 'edit']);
            Route::put('update/{id}', [AdminGalleryController::class, 'update']);
            Route::get('delete/{id}', [AdminGalleryController::class, 'destroy']);
        });

        Route::prefix('blogs')->group(function () {
            Route::get('/', [AdminBlogController::class, 'index']);
            Route::get('{id}', [AdminBlogController::class, 'show']);
        });

        Route::prefix('blog')->group(function () {
            Route::get('add', [AdminBlogController::class, 'create']);
            Route::post('store', [AdminBlogController::class, 'store']);
            Route::get('edit/{id}', [AdminBlogController::class, 'edit']);
            Route::put('update/{id}', [AdminBlogController::class, 'update']);
            Route::get('delete/{id}', [AdminBlogController::class, 'destroy']);
        });

        Route::prefix('partnership')->group(function () {
            Route::get('/', [AdminPartnershipAndSponsorshipController::class, 'index']);
            Route::get('edit/{id}', [AdminPartnershipAndSponsorshipController::class, 'edit']);
            Route::put('update/{id}', [AdminPartnershipAndSponsorshipController::class, 'update']);
        });

        Route::prefix('company')->group(function () {
            Route::get('/', [AdminCompanyController::class, 'show']);
            Route::get('edit', [AdminCompanyController::class, 'edit']);
            Route::put('update', [AdminCompanyController::class, 'update']);
        });

        Route::prefix('team')->group(function () {
            Route::get('add', [AdminTeamController::class, 'create']);
            Route::post('store', [AdminTeamController::class, 'store']);
            Route::get('edit/{id}', [AdminTeamController::class, 'edit']);
            Route::put('update/{id}', [AdminTeamController::class, 'update']);
            Route::get('delete/{id}', [AdminTeamController::class, 'destroy']);
        });

        Route::prefix('achievement')->group(function () {
            Route::get('add', [AdminAchievementController::class, 'create']);
            Route::post('store', [AdminAchievementController::class, 'store']);
            Route::get('edit/{id}', [AdminAchievementController::class, 'edit']);
            Route::put('update/{id}', [AdminAchievementController::class, 'update']);
            Route::get('delete/{id}', [AdminAchievementController::class, 'destroy']);
        });

        Route::prefix('contact')->group(function () {
            Route::get('/', [AdminContactController::class, 'show']);
            Route::get('edit', [AdminContactController::class, 'edit']);
            Route::put('update', [AdminContactController::class, 'update']);
        });
    });
});
