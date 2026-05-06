<?php

namespace Enhance\Enums;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @see \Enhance\Enums\Tests\EnhancedEnumResourceTest */
class EnhancedEnumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $arr = [
            'name' => $this->name,
            'value' => $this->value,
        ];

        if (is_callable([$this->resource, 'translate'])) {
            $arr['label'] = $this->translate();
        }

        if (is_callable([$this->resource, 'badge'])) {
            $arr['badge'] = $this->badge();
        }

        return $arr;
    }
}
