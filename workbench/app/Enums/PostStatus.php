<?php

namespace Workbench\App\Enums;

use Enhance\Enums\Concerns\Translatable;

enum PostStatus: string
{
    use Translatable;

    public function namespace(): string
    {
        return 'eenums::';
    }

    case PUBLISH = 'publish';
    case DRAFT = 'draft';
}
