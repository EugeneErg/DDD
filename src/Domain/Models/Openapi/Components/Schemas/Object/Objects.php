<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

/**
 * @property OpenapiObject[] $items
 */
final readonly class Objects extends AbstractValues
{
    public function __construct(OpenapiObject ...$items)
    {
        parent::__construct(...$items);
    }
}
