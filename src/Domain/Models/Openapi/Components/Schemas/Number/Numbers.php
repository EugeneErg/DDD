<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Number;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

/**
 * @property float[] $items
 */
final readonly class Numbers extends AbstractValues
{
    public function __construct(float ...$items)
    {
        parent::__construct(...$items);
    }
}
