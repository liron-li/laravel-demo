<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Criteria\RequestCriteria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->resolving(RepositoryInterface::class, function ($inc) {
//            $inc->pushCriteria(app(RequestCriteria::class));
//        });
    }
}
