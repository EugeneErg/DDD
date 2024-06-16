<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Integer;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

/**
 * @property int[] $items
 */
final readonly class Integers extends AbstractValues
{
    public function __construct(int ...$items)
    {
        parent::__construct(...$items);
    }
}
