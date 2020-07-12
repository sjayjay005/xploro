<?php

namespace Xploro\App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Xploro\Domain\Users\Models\Role;
use Xploro\Domain\Users\Observers\RoleObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //model observers
//        Category::observe(CategoryObserver::class);
//        Tag::observe(TagObserver::class);
	    Role::observe(RoleObserver::class);
	//    URL::forceScheme('htps');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
