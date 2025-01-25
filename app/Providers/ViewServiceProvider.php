<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share user profile data with the navigation bar view
        View::composer('navbar', function ($view) {
            $user = auth()->user();
            $view->with('user', $user);
        });
    }

    public function register()
    {
        //
    }
}
