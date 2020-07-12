<?php

namespace App\Providers;

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
        $this->bindBook();
        $this->bindBookStatusTransition();
    }

    private function bindBook()
    {
        $this->app->bind(
            \App\Services\Book\Repositories\BookRepositoryInterface::class,
            \App\Services\Book\Repositories\BookRepository::class
        );
    }

    private function bindBookStatusTransition()
    {
        $this->app->bind(
            \App\Services\BookStatusTransition\Repositories\BookStatusTransitionRepositoryInterface::class,
            \App\Services\BookStatusTransition\Repositories\BookStatusTransitionRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
