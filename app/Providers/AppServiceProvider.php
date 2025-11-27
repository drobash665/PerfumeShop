<?php

namespace App\Providers;

use App\Models\Fragrance;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::defaultView('pagination::default');

        Gate::define('destory-fragrances', function (User $user, Fragrance $fragrance) {
            return $user->is_admin;
        });
    }
}
