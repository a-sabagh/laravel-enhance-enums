<?php

namespace Enhance\Enums\Concerns;

trait Translatable
{
    public function namespace(): string
    {
        return '';
    }

    public function translate(): string
    {
        $key = $this->getTranslationKey();

        return trans($key);
    }

    protected function getTranslationKey(): string
    {
        $namespace = $this->namespace();
        $classPath = static::class;
        $value = $this->value;

        return "{$namespace}enums.{$classPath}.{$value}";
    }
}
