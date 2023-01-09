<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\UserPolicy;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Category;
use App\Policies\CreatorPolicy;
use App\Policies\CategoryPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
<<<<<<< HEAD
        Category::class => CategoryPolicy::class,
        User::class => CreatorPolicy::class,

=======
        User::class => UserPolicy::class,
>>>>>>> origin/otorisasi
    ];

    public function boot()
    {
<<<<<<< HEAD

=======
        Gate::define('admin', function (User $user) {
            return  $user->roles;
        });
>>>>>>> origin/otorisasi
        $this->registerPolicies();

        //
    }
}