<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [];

    public function boot(): void
    {
        Gate::define('access-admin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('access-teacher', function ($user) {
            return $user->role === 'teacher';
        });

        Gate::define('access-user', function ($user) {
            return $user->role === 'user';
        });
    }
}