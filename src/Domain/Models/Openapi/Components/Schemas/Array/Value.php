<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Array;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;

final readonly class Value extends AbstractValue
{
    /** @var array<int, float|AbstractValues|bool|int|string|null>  */
    public array $items;

    public function __construct(float|AbstractValues|bool|int|string|null ...$value)
    {
        parent::__construct(new Values(...$value));
        $this->items = $this->value->items;
    }
}