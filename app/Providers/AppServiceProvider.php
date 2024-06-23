<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Validator;

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
        // Validator::extend('PJ001', function ($attribute, $value, $parameters, $validator) {
        //     // Logika validasi Anda
        //     return true; // atau false berdasarkan kondisi
        // });
    }
}
