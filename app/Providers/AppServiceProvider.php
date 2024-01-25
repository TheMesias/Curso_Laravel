<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        /*View::share([
            'country' => 'Ecuador',
            'city' => 'Quito'
        ]);*/

        //Para limitar las variables compartidas a solo algunas views
        View::composer(['home', 'login'], function($view){
            $view->with('country', 'Ecuador'); 
            $view->with('city', 'Quito'); 
        });
    }
}
