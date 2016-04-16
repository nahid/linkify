<?php

namespace Nahid\Linkify;

use Illuminate\Support\ServiceProvider;
use App;

class LinkifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Nahid\Linkify\Linkify');

        App::bind('Linkify', function () {
            return new Linkify();
        });

    }

    public function provides()
    {
        return ['Nahid\Linkify\LinkifyServiceProvider'];
    }
}
