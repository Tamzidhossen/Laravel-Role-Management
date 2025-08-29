<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function($user) {
            return $user->hasRole('admin');
        });

        Gate::define('editor', function($user) {
            return $user->hasAnyRole(['admin', 'editor']);
        });

        Gate::define('author', function($user) {
            return $user->hasAnyRole(['admin', 'editor', 'author']);
        });

        Gate::define('secret', function(){
            return request()->input('password') === 'secret';
        });
    }
}
