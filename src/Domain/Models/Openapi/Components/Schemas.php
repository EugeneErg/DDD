<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Schema;

final readonly class Schemas
{
    /** @var array<string, Schema> */
    public array $items;

    public function __construct(Schema ...$schemas)
    {
        $this->items = $schemas;
    }
}