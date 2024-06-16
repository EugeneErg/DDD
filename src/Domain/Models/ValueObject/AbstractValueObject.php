<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\ValueObject;

use ReflectionClass;

abstract class AbstractValueObject implements ValueObjectInterface
{
    public static function getType(): string
    {
        $class = new ReflectionClass(static::class);
    }

    public static function isNullable(): bool
    {
        // TODO: Implement isNullable() method.
    }

    //public function
}
