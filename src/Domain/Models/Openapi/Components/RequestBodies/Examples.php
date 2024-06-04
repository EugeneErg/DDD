<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

final readonly class Examples
{
    /** @var array<string, Value> */
    public array $items;

    public function __construct(Value ...$examples)
    {
        $this->items = $examples;
    }
}