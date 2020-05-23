<?php

namespace DesignByCode\LunaUi;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


class UiServiceProvider extends ServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AuthCommand::class,
                LunaUiCommand::class,
                ControllersCommand::class
            ]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::mixin(new AuthRouteMethods);
    }


}
