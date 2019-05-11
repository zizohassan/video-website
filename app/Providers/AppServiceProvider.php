<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Skill;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('categories' , Category::get());
        view()->share('skills' , Skill::get());
        view()->share('pages' , Page::get());
    }
}
