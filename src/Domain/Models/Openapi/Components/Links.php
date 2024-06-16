<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link;

final readonly class Links
{
    /** @var array<string, Link> */
    public array $items;

    public function __construct(Link ...$links)
    {
        $this->items = $links;
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray();
        }

        return $result;
    }
}
