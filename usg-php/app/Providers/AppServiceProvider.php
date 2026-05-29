<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

// use BezhanSalleh\FilamentShield\Resources\Roles\RoleResource;

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

        // RoleResource::navigationGroup('System');  // 改成你想要的组名
        // RoleResource::navigationLabel('Roles');  // 顺便改菜单名
        // RoleResource::navigationIcon('heroicon-o-shield-check'); // 改图标
        // RoleResource::navigationSort(1); // 改排序
    
    }
}
