<?php

namespace Workbench\App\Enums;

use Enhance\Enums\Concerns\Badgeable;
use Enhance\Enums\Concerns\Translatable;
use Illuminate\Support\Collection;

enum PostStatusBadgeTranslate: string
{
    use Badgeable, Translatable;

    public function namespace(): string
    {
        return 'eenums::';
    }

    public function getBadgeCollection(): Collection
    {
        return collect([
            'PUBLISH' => 'success',
            'DRAFT' => 'secondary',
        ]);
    }

    case PUBLISH = 'publish';
    case DRAFT = 'draft';
}
