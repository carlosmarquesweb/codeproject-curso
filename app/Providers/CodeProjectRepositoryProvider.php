<?php

namespace CodeProject\Providers;

use Illuminate\Support\ServiceProvider;

class CodeProjectRepositoryProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(
            \CodeProject\Repositories\ClientInterface::class,
            \CodeProject\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \CodeProject\Repositories\ProjectInterface::class,
            \CodeProject\Repositories\ProjectRepositoryEloquent::class
        );
    }
}
