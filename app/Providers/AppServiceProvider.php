<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        if (!app()->runningInConsole()) {
            Paginator::useBootstrap();
            View::share('latestBlog', Blog::latest()->limit(3)->get());
            View::share('latestService', Service::latest()->limit(3)->get());
            View::share('categories', Category::all());
            View::share('sliders', Slider::all());
        }
    }
}
