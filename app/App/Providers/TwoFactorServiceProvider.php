<?php

namespace Xploro\App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use Xploro\App\TwoFactor\Authy;
use Xploro\App\TwoFactor\TwoFactor;

class TwoFactorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(TwoFactor::class, function () {
            return new Authy(new Client);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
