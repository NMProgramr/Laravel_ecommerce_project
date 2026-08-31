<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $nav = [];

        if (Schema::hasTable('settings')) {
            $settings = DB::table('settings')->first();

            if ($settings && ! empty($settings->detials)) {
                $nav = json_decode($settings->detials, true) ?? [];
            }
        }

        View::share('NAV', $nav);
    }
}
