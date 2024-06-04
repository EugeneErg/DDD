<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Types;

final readonly class Value
{
    public function __construct(OpenapiObject|int|float|string|OpenapiArray $value)
    {
    }
}