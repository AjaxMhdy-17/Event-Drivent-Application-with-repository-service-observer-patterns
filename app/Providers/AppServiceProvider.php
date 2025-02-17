<?php

namespace App\Providers;

use App\Interfaces\TodoInterfaces;
use App\Models\TodoList;
use App\Observers\TodoListObserver;
use App\Repository\TodoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TodoInterfaces::class, TodoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // TodoList::observe(TodoListObserver::class) ; 
    }
}
