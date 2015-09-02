<?php

namespace Gameday\Providers;

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
        view()->composer(['auth.register'], function ($view) {

            $schools = \Gameday\School::orderBy('name', 'asc')->get();

            $view->with(compact('schools'));

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
