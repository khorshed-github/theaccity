<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Setting;
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
        View::composer('*', function ($view) {
            $menus = Menu::with('submenus')->latest('id')->get();
            $view->with('menus', $menus);
            
            // Share settings with all views
            $settings = Setting::getAllSettings();
            $view->with('settings', $settings);
            
            // Share statistics
            $statistics = \App\Models\HomepageStatistic::where('status', 1)->orderBy('display_order')->get();
            $view->with('statistics', $statistics);
        });

    }
}
