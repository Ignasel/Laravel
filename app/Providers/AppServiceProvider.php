<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gate;
use App\Providers\AuthServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        Gate::define('updateAd', function ($user, $ad) {
            return $user->id === $ad->userID;
        });

        Gate::define('daleteAd', function ($user, $ad) {
            return $user->id === $ad->userID;
        });


    }
}
