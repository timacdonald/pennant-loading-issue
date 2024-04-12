<?php

namespace App\Providers;

use App\Features\MyFeature;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;

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
        DB::enableQueryLog();

        // Only define one to see if it acts differently...
        Feature::define(MyFeature::class);
    }
}
