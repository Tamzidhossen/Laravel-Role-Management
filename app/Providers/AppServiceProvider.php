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
        Gate::define('xAdmin', function($user) {     //Only Admin Get Access
            return $user->hasRole('admin');
        });

        Gate::define('xEditor', function($user) {    //Admin and Editor Get Access
            return $user->hasAnyRole(['admin', 'editor']);
        });

        Gate::define('xAuthor', function($user) {    //Admin, Editor and Author Get Access
            return $user->hasAnyRole(['admin', 'editor', 'author']);
        });

        Gate::define('xUser', function($user) {    //Admin, Editor, User & Author Get Access
            return $user->hasAnyRole(['admin', 'editor', 'author', 'user']);
        });

        Gate::define('xSecret', function(){          //Only with Secret Password Get Access
            return request()->input('password') === 'secret';
        });
    }
}
