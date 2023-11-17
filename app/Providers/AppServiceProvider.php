<?php

namespace App\Providers;

use App\Http\Requests\Note\noteRequest;
use Illuminate\Support\ServiceProvider;
use Shamaseen\Repository\Utility\AbstractRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $this->app->bind(AbstractRepository::class, noteRequest::class);

//        $this->app->bind(
//            'Shamaseen\Repository\Utility\AbstractRepository',
//            noteRequest::class
//        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
