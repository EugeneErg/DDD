<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Types;

final readonly class OpenapiObject
{
    public array $items;

    public function __construct(OpenapiArray|int|float|string|OpenapiObject ...$items)
    {
        $this->items = $items;
    }
}