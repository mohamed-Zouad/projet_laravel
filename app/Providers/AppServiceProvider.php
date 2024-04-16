<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\view\composers\MessageCountComposer;
use App\View\Composers\StaticDataComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *  @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *    @return void
     */
    public function boot()
    {
        // //
        // View::composer('*', MessageCountComposer::class);
        // Enregistrez le View Composer pour la vue product.blade.php
        View::composer('product', StaticDataComposer::class);
    }
}

// namespace App\Providers;
// use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\View;
// use App\View\Composers\StaticDataComposer;
// use App\View\Composers\LayoutDataComposer;
// use Illuminate\Pagination\Paginator;
// class AppServiceProvider extends ServiceProvider
// {
// /**
// * Register any application services.
// *
// * @return void
// */
// public function register()
// {
// //
// }
// /**
// * Bootstrap any application services.
// *
// * @return void
// */
// public function boot()
// {
// //
// // View::composer('*', MessageCountComposer::class);
// View::composer('product', StaticDataComposer::class);
// View::composer('*', LayoutDataComposer::class);
// Paginator::useBootstrap();
// }
// }