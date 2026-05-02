<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
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
        Collection::macro('paginate', function ($perPage = 15, $page = null, $options = []) {
            $page = $page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage)->values(), // Grab items for the current page
                $this->count(), // Total items
                $perPage, // Items per page
                $page, // Current page
                array_merge(['path' => LengthAwarePaginator::resolveCurrentPath()], $options)
            );
        });
    }
}
