<?php

namespace App\Providers;

use App\Interfaces\LabelServiceInterface;
use App\Services\LabelService;
use Illuminate\Support\ServiceProvider;

class LabelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LabelServiceInterface::class, function () {
            return new LabelService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
