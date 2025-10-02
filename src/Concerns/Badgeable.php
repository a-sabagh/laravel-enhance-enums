<?php

namespace Enhance\Enums\Concerns;

trait Badgeable
{
    public function badge(): string
    {
        return $this->getBadgeCollection()->get($this->name);
    }
}
