<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\String;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

/**
 * @property string[] $items
 */
final readonly class Strings extends AbstractValues
{
    public function __construct(string ...$items)
    {
        parent::__construct(...$items);
    }
}