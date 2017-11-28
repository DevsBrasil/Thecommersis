<?php

namespace Dev\Store\DsManager\Services;

use Themosis\Facades\Route;
use Themosis\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Register plugin routes.
     * Define a custom namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Dev\Store\DsManager\Controllers'
        ], function () {
            require themosis_path('plugin.dev.store.ds_manager.resources').'routes.php';
        });
    }
}