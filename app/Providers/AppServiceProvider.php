<?php

namespace App\Providers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (User $user) {
            return  $user->roles;
        });
        Paginator::useBootstrap();
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
    }
}