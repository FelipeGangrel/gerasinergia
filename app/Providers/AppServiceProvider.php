<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(\App\Repositories\UserRepositoryInterface::class, function($app) {
        $this->app->bind(\App\Repositories\Contracts\UsuarioRepositoryContract::class, function($app) {
            return new \App\Repositories\UsuarioRepository(
                $app['em'],
                $app['em']->getClassMetaData(\App\Entities\Usuario::class)
            );
        });
    }
}
