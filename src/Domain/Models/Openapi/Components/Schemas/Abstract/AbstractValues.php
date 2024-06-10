<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object\Value;

abstract readonly class AbstractValues
{
    /** @var array<self|float|int|null|string|bool> */
    public array $items;

    public function __construct(null|self|int|float|string|bool|Value ...$items)
    {
        $this->items = $items;
    }
}