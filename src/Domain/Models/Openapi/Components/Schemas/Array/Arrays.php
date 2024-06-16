<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Array;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

/**
 * @property Value[] $items
 */
final readonly class Arrays extends AbstractValues
{
    public function __construct(Value ...$items)
    {
        parent::__construct(...$items);
    }
}
