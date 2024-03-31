<?php

namespace Yormy\Repository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            //            $this->publishes([
            //                __DIR__ . '/../config/config.php' => config_path('xid.php'),
            //            ], 'config');
        }

        //        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'xid');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'repository');
    }
}
