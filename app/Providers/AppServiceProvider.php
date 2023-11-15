<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Page;
use App\Models\Service;
use App\Models\Slider;
use App\Settings\SmtpSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Spatie\LaravelSettings\Exceptions\MissingSettings;

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
        if (! app()->runningInConsole()) {
            $this->setMailConfig();
            Paginator::useBootstrap();
            View::share('latestBlog', Blog::latest()->limit(3)->get());
            View::share('latestService', Service::latest()->limit(3)->get());
            View::share('categories', Category::all());
            View::share('sliders', Slider::all());
            View::share('pages', Page::where('is_active', 1)->get());

        }
    }

    public function setMailConfig()
    {
        try {
            if (Schema::hasTable('settings')) {
                $settings = app(SmtpSettings::class);
                $setMail = [
                    'transport' => 'smtp',
                    'host' => $settings->smtp_host,
                    'port' => $settings->smtp_port,
                    'encryption' => $settings->smtp_password_type,
                    'username' => $settings->smtp_user_name,
                    'password' => $settings->smtp_password,
                    'from' => ['name' => $settings->smtp_email, 'address' => $settings->smtp_email],
                ];
                config(['mail.mailers.smtp' => $setMail]);
            }
        } catch (MissingSettings $exception) {
            logger()->warning($exception->getMessage());
        }

    }
}
