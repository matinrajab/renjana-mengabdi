<?php

use Illuminate\Support\Facades\Route;

Route::get('company', function () {
    return view('company.company');
});

Route::get('blog', function () {
    return view('blog.blog');
});

Route::get('blog-details', function () {
    return view('blog.blog-details');
});

Route::get('event', function () {
    return view('event.event');
});

Route::get('event-details', function () {
    return view('event.event-details');
});

Route::get('open-volunteer', function () {
    return view('volunteer.open-volunteer');
});

Route::get('open-volunteer-details', function () {
    return view('volunteer.open-volunteer-details');
});

Route::get('partnership', function () {
    return view('partnership.partnership');
});

Route::get('sponsorship', function () {
    return view('partnership.sponsorship');
});

Route::get('/', function () {
    return view('home.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
