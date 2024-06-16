<?php

namespace App\Providers;

use App\View\Composers\HeaderComposer;
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
        View::composer(['layouts.guest.master.f-master', 'layouts.guest.master.f-header'], HeaderComposer::class);
    }
}
