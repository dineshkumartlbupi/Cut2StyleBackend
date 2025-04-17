<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api/v1')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // Admin Routes
            Route::middleware(['web', 'auth', 'admin'])
                ->prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/admin.php'));

            // Vendor Routes
            Route::middleware(['web', 'auth', 'vendor'])
                ->prefix('vendor')
                ->as('vendor.')
                ->group(base_path('routes/vendor.php'));

            // User Routes
            Route::middleware(['web', 'auth', 'user'])
                ->prefix('user')
                ->as('user.')
                ->group(base_path('routes/user.php'));
        });
    }
}
