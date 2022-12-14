<?php

namespace Backpack\Banners;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/banner.php';

    public function boot()
    {
      $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'banner');
    
	    // Migrations
	    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
	    
	    // Routes
    	$this->loadRoutesFrom(__DIR__.'/routes/backpack/routes.php');
    
		  // Config
      $this->publishes([
          self::CONFIG_PATH => config_path('backpack/banners.php'),
      ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'banners'
        );

        $this->app->bind('banner', function () {
            return new Banner();
        });
    }
}
