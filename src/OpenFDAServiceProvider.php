<?php
namespace MeisamMulla\OpenFDA;

use Illuminate\Support\ServiceProvider;

class OpenFDAServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('OpenFDA', function () {
            return new OpenFDA;
        });
    }
}
