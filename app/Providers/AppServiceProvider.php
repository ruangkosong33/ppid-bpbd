<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\View\Composers\HeaderComposer;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\SidebarPostComposer;

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
        Paginator::useBootstrap();
        
        View::composer(['components.sidebar-post'], SidebarPostComposer::class);
        View::composer(['layouts.guest.master.f-master', 'layouts.guest.master.f-header'], HeaderComposer::class);
    }
}
