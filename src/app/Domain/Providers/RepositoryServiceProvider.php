<?php

namespace App\Domain\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Domain\Repositories\Contracts\UserRepository::class,
            \App\Domain\Repositories\Eloquent\UserRepository::class
        );
    }
}
