<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');
});
