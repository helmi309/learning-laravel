<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // register guest
        $this->app->when('App\Http\Controllers\GuestController')
            ->needs('App\Domain\Contracts\GuestContract')
            ->give('App\Domain\Repositories\GuestRepository');


    }
}
