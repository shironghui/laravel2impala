<?php
namespace Semir\Laravel2impala;
/**
 * Laravel to impala ServiceProvider
 * @author Tris<shironghui@ecsemir.com>
 * Date: 2020-07-07
 */
use Illuminate\Support\ServiceProvider;
use Semir\Laravel2impala\ThriftSQL\Impala as Connection;

class ToimpalaServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = TRUE;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Impala::class, function ($app) {
            return new Connection($app['session']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Impala::class];
    }
}
