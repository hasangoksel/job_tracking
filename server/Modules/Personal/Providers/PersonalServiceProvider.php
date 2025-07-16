<?php

namespace Modules\Personal\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Personal\Models\Personal;
use Modules\Personal\Observers\PersonalObserver;

class PersonalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Migration'ları buradan yükle
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        // Route'u otomatik yükle
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');

        // Observer bağlantısı
        Personal::observe(PersonalObserver::class);
    }

    public function register()
    {
        //
    }
}