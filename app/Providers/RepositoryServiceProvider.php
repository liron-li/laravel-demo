<?php

namespace App\Providers;

use App\Criteria\PostAuthorCriteria;
use App\Repositories\PostRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\PostRepository::class, function () {
            $repo = $this->app->make(PostRepositoryEloquent::class);
//            $repo->pushCriteria(new PostAuthorCriteria('schroeder.george'));
            return $repo;
        });
        //:end-bindings:
    }
}
