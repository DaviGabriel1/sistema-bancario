<?php

namespace App\Providers;

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
        $this->loadRoutesFrom(base_path('routes/web.php'));
        //$this->loadRoutesFrom(base_path('routes/api.php'));
    
        // Carregar as rotas da pasta 'auth'
        foreach (glob(base_path('routes/auth/*.php')) as $file) {
            require $file;
        }
    }
}
