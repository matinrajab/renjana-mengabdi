<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\OpenVolunteer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['user.layouts.app', 'user.home.index'], function ($view) {
            $contact = ContactUs::first();
            $lastVolunteers = OpenVolunteer::orderByDesc('id')->limit(2)->get();
            $view->with([
                'contact' => $contact,
                'lastVolunteers' => $lastVolunteers
            ]);
        });
    }
}
