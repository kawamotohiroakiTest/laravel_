<?php

namespace App\Providers;

use App\Faker\Product;
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FakerGenerator::class, function ($app) {

            $faker = FakerFactory::create($app['config']->get('app.faker_locale', 'en_US'));
            $faker->addProvider(new Product($faker));
            return $faker;

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}