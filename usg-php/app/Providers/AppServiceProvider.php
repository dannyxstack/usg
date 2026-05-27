<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // 会部署kinsta失败
        // View::share('allCourses', Course::all());

        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
