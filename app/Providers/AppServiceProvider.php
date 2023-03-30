<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
    public function boot(Request $request): void
    {
        //active link for link-bar
        $path = $request->path();
        $path = explode('/',$path);
        $active_url = '';
        if (isset($path[1]) && !empty($path[1])){
            $active_url = $path[1];
        }
        
        View::share('active_url',$active_url);
    }
}
