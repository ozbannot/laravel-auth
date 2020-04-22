<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //sql
        /*
        if (config('app.env') !== 'production') {
            DB::listen(function ($query) {
                \Log::info("Query Time:{$query->time}s] $query->sql");
            });
        } */
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
