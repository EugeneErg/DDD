<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\ValueObject;

abstract class AbstractBooleanValueObject extends AbstractValueObject
{
    public function __construct(public readonly bool $value)
    {
    }

    public static function getType(): string
    {
        return 'boolean';
    }
}