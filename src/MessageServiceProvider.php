<?php
namespace Blairt\Message;
use Illuminate\Support\ServiceProvider;
use Nexmo\Voice\Message\Message;

class MessageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // load route from web.php
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'message');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(
            __DIR__.'/config/message.php', 'message'
        );

        $this->publishes([
            __DIR__.'/config/message.php' => config_path('message.php'),
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ]);


    }

    public function register()
    {

    }

}
