<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\ValueObject;

interface ValueObjectInterface
{
    public static function getType(): string;
    public static function isNullable(): bool;
}
