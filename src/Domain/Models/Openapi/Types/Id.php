<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Types;

final readonly class Id
{
    public function __construct(public string $value)
    {
    }
}
