<?php

namespace App\Providers;

use League\Flysystem\Dropbox\DropboxAdapter;
use League\Flysystem\Filesystem;
use Storage;
use Dropbox\Client as DropboxClient;
use Illuminate\Support\ServiceProvider;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                'W_FMB_ySCo4AAAAAAAAAJ4S_S51DujGcOl79jsLwnRaYhVFCX2mHpCdUmIomBmC2', 'ca40iune0as1prw'
            );

            return new Filesystem(new DropboxAdapter($client));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
