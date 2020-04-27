<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::if('centro', function () {
            return auth()->user()->rolEntidad() === 'centro de atencion';
        });

        Blade::if('control', function () {
            return auth()->user()->rolEntidad() === 'entidad Reguladora';
        });

        Blade::if('acudiente', function () {
            return auth()->user()->rolEntidad() === 'acudiente';
        });

        Blade::if('auxiliar', function () {
            return auth()->user()->rolEntidad() === 'auxiliar';
        });
    }
}
