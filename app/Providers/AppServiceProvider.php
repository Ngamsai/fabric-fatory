<?php

namespace App\Providers;

// use Illuminate\Support\ServiceProvider;

// class AppServiceProvider extends ServiceProvider
// {
//     /**
//      * Register any application services.
//      *
//      * @return void
//      */
//     public function register()
//     {
//         //
//     }
// }

use Illuminate\Support\Facades\Schema;  
class AppServiceProvider extends ServiceProvider
{
    public function boot() 
    {     
        Schema::defaultStringLength(191); 
        }
}