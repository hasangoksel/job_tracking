<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Personal\Models\Personal;
use Modules\Personal\Observers\PersonalObserver;

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
        Personal::observe(PersonalObserver::class);
    }
}
