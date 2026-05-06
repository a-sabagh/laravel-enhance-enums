<?php

namespace Enhance\Enums\Tests;

use Enhance\Enums\EEnumsServiceProvider;
use Orchestra\Testbench\TestCase;
use Workbench\App\ResourceController;

/**
 * @see \Enhance\Enums\EnhancedEnumResource
 * @see \Workbench\App\Enums\PostStatus
 * @see \Workbench\App\Enums\PostStatusBadgable
 * @see \Workbench\App\Enums\PostStatusBadgeTranslate
 */
class EnhancedEnumResourceTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            EEnumsServiceProvider::class,
        ];
    }

    public function test_enhance_enums_api_resource_using_dummy_controller(): void
    {
        $this->app->config->set('app.locale', 'fa');

        $c = resolve(ResourceController::class);

        $resp = $c->APIResponseTranslateable();

        $this->assertEquals(
            [
                'eenum' => [
                    'name' => 'DRAFT',
                    'value' => 'draft',
                    'label' => 'پیش نویس',
                ],
            ],
            json_decode($resp->getContent(), true)
        );
    }

    public function test_enhance_enums_api_resource_badgable_using_dummy_controller(): void
    {
        $c = resolve(ResourceController::class);

        $resp = $c->APIResponseBadgable();

        $this->assertEquals(
            [
                'eenum' => [
                    'name' => 'DRAFT',
                    'value' => 'draft',
                    'badge' => 'secondary',
                ],
            ],
            json_decode($resp->getContent(), true)
        );
    }

    public function test_enhance_enums_api_resource_translateable_badgable_using_dummy_controller(): void
    {
        $this->app->config->set('app.locale', 'fa');

        $c = resolve(ResourceController::class);

        $resp = $c->APIResponseTranslateBadge();

        $this->assertEquals(
            [
                'eenum' => [
                    'name' => 'DRAFT',
                    'value' => 'draft',
                    'label' => 'پیش نویس',
                    'badge' => 'secondary',
                ],
            ],
            json_decode($resp->getContent(), true)
        );
    }
}
