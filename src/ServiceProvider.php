<?php

namespace Backpack\Banners;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/config/banners.php';

    public function boot()
    {
      $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'banners');
    
	    // Migrations
	    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
	    
	    // Routes
    	$this->loadRoutesFrom(__DIR__.'/routes/backpack/routes.php');
    	$this->loadRoutesFrom(__DIR__.'/routes/api/banners.php');
    
		  // Config
      $this->publishes([
          self::CONFIG_PATH => config_path('backpack/banners.php'),
      ], 'config');

      $this->publishes([
        self::CONFIG_PATH => config_path('/backpack/banners.php'),
      ], 'config');
      
      $this->publishes([
          __DIR__.'/resources/views' => resource_path('views'),
      ], 'views');
  
      $this->publishes([
          __DIR__.'/database/migrations' => resource_path('database/migrations'),
      ], 'migrations');
  
      $this->publishes([
          __DIR__.'/routes/backpack/routes.php' => resource_path('/routes/backpack/banners/backpack.php'),
          __DIR__.'/routes/api/banners.php' => resource_path('/routes/backpack/banners/banners.php'),
      ], 'routes');

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
