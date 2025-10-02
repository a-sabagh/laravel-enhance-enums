<?php

namespace Enhance\Enums\Concerns;

use Enhance\Enums\EEnumsServiceProvider;
use Orchestra\Testbench\TestCase;
use Workbench\App\Enums\PostStatus;

class EnumsTranslatableTest extends TestCase
{
    protected function getPackageProviders($app) 
    {
        return [
            EEnumsServiceProvider::class,
        ];
    }

    public function test_enum_can_translatable_in_package() : void
    {
        $this->app->config->set('app.locale', 'fa');

        $this->assertEquals('منتشر شده', PostStatus::PUBLISH->translate());
    }
}