<?php
namespace Whyounes\Mailman;

use Illuminate\Support\ServiceProvider;
use Whyounes\Mailman\Commands\ListenCommand;

class MailmanServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/mailman.php' => config_path('mailman.php'),
        ], 'config');
    }


    public function register()
    {
        $this->app->singleton('mailer', function ($app) {
            return new Mailer();
        });

        $this->mergeConfigFrom(__DIR__.'/../config/mailman.php.php', 'mailman');

        $this->commands([
            ListenCommand::class
        ]);
    }
}