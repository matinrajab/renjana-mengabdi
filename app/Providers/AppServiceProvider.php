<?php

namespace App\Providers;

use App\Models\ContactUs;
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
            $whatsappNumber = ContactUs::first()->phone_number;
            $view->with('whatsappNumber', $whatsappNumber);
        });
    }
}
