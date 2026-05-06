<?php

namespace Workbench\App;

use Enhance\Enums\EnhancedEnumResource;
use Illuminate\Http\JsonResponse;
use Workbench\App\Enums\PostStatus;
use Workbench\App\Enums\PostStatusBadgable;
use Workbench\App\Enums\PostStatusBadgeTranslate;

class ResourceController
{
    public function APIResponseTranslateable(): JsonResponse
    {
        return response()->json([
            'eenum' => new EnhancedEnumResource(PostStatus::DRAFT),
        ]);
    }

    public function APIResponseBadgable(): JsonResponse
    {
        return response()->json([
            'eenum' => new EnhancedEnumResource(PostStatusBadgable::DRAFT),
        ]);
    }

    public function APIResponseTranslateBadge(): JsonResponse
    {
        return response()->json([
            'eenum' => new EnhancedEnumResource(PostStatusBadgeTranslate::DRAFT),
        ]);
    }
}
