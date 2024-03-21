<?php

namespace Netweb\CommonServices;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Netweb\CommonServices\Components\UploadImages;

class CommonServicesProvider extends ServiceProvider  {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/nwt-common-services.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'common_services');

        Blade::component('upload-images', UploadImages::class);

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {

    }
}
