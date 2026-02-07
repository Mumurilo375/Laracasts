<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Pagination\Paginator;
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
        Model::preventLazyLoading(); //essa funcao evita o lazyLoadin (problema do N+1), quando eu faco muitas queries em um foreach ele da erro pois eu ativei o preventLazyLoading

        // Se eu quiser gerar a pasta com os arquivos de paginacao, devo ir no terminal e digitar: php artisan vendor:publish
        // Paginator::useBootstrapFour();
    }
}
