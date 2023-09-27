<?php

namespace Soulplus\Posts\Providers;

use Illuminate\Support\ServiceProvider;
use Soulplus\Posts\Console\Commands\PostCommand;

class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes(
            [__DIR__.'/../config/posts.php' => config_path('posts.php'),]
        );
        //$this->mergeConfigFrom(__DIR__.'/../config/posts.php', 'posts');
        $this->loadRoutesFrom(__DIR__.'/../routes/posts.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/posts'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class,
            ]);
        }
    }
}
