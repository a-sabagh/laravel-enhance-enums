<?php

namespace Enhance\Enums;

use Illuminate\Support\ServiceProvider;

class EEnumsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'eenums');
    }
}
