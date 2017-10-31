<?php

namespace App\Providers;

use App\Http\Contracts\Blog;
use Illuminate\Support\ServiceProvider;
use App\Http\Repository\ApiRepository;

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
        $this->app->bind(Blog::class,ApiRepository::class);
    }
}
