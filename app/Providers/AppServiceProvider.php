<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

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
        RateLimiter::for('application', function (Request $request) {
            // ключ: IP + user-agent (чуть лучше, чем один IP)
            $key = 'application:' . $request->ip() . ':' . substr((string) $request->userAgent(), 0, 80);

            return [
                // 10 запросов за 10 минут
                Limit::perMinutes(10, 10)->by($key),

                // и доп. страховка: 30 в час
                Limit::perHour(30)->by($key),
            ];
        });
    }
}
