<?php

namespace Workbench\App\Enums;

use Enhance\Enums\Concerns\Badgeable;
use Illuminate\Support\Collection;

enum PostStatusBadgable: string
{
    use Badgeable;

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
