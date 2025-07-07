<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $view->with('navItems', [
                ['name' => 'Home', 'route' => 'home'],
                ['name' => 'Pilihan Desain', 'route' => 'pilihan-desain'],
                ['name' => 'Harga Website', 'route' => 'harga-website'],
                ['name' => 'Tentang Kami', 'route' => 'tentang-kami'],
                ['name' => 'Kontak', 'route' => 'kontak'],
            ]);

            $cards = config('cards.items');
            $view->with('cards', $cards);
        });
    }
}
