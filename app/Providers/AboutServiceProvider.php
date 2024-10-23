<?php

namespace App\Providers;

use App\Interfaces\AboutInterface;
use App\Repositories\AboutRepository;
use Illuminate\Support\ServiceProvider;

class AboutServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AboutInterface::class, AboutRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
