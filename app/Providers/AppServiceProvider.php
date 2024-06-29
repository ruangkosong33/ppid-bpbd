<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\View\Composers\HeaderComposer;
use App\View\Composers\SidebarPostComposer;
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
        View::composer(['components.sidebar-post'], SidebarPostComposer::class);
        View::composer(['layouts.guest.master.f-master', 'layouts.guest.master.f-header'], HeaderComposer::class);
    }
}
