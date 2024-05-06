<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\ValueObject;

abstract class AbstractIntegerValueObject extends AbstractValueObject
{
    public function __construct(public readonly int $value)
    {
    }

    public static function getType(): string
    {
        return 'integer';
    }
}