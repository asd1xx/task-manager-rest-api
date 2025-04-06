<?php

namespace App\Providers;

use App\Interfaces\TaskStatusServiceInterface;
use App\Services\TaskStatusService;
use Illuminate\Support\ServiceProvider;

class TaskStatusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(TaskStatusServiceInterface::class, function () {
            return new TaskStatusService();
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
