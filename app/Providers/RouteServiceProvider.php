<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

class RouteServiceProvider extends ServiceProvider {
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/super-admin/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        // if (env('APP_ENV') == 'live' && php_sapi_name() !== 'cli') {
        //     $url = request()->fullurl();

        //     //
        //     // if (str_contains($url, '/index.php') || str_contains($url, '/public') || str_contains($url, 'http://') || str_contains($url, 'www.')) {
        //     // $url = str_replace('/index.php', '', $url);
        //     // $url = str_replace('/public', '', $url);
        //     // $url = str_replace('www.', '', $url);
        //     // $url = str_replace('http://', 'http://', $url);
        //     // header("Location: " . $url, TRUE, 301);
        //     // die();
        //     // }
        // }

        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });

        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }


}