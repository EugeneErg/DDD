<?php

declare(strict_types=1);

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
}