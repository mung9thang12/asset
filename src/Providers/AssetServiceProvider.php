<?php

namespace Mung9thang12\Assets\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AssetsServiceProvider.
 *
 * @since 22/07/2015 11:23 PM
 */
class AssetServiceProvider extends ServiceProvider
{
    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/asset.php', 'asset');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'asset');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../config/asset.php' => config_path('asset.php')], 'config');
            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/assets')], 'views');
        }
    }
}
