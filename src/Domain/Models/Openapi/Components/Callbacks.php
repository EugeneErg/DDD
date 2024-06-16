<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Paths;

final readonly class Callbacks
{
    /** @var array<string, Paths> */
    public array $items;

    public function __construct(Paths ...$paths)
    {
        $this->items = $paths;
    }

    public function toArray(Paths $paths): array
    {
        $result = [];

        foreach ($this->items as $name => $callback) {
            $result[$name] = $callback->toArray();
        }

        return $result;
    }
}
