<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;

final readonly class Value extends AbstractValue
{
    /** @var array<string, float|AbstractValues|bool|int|string|null>  */
    public array $items;

    public function __construct(float|AbstractValues|bool|int|string|null ...$value)
    {
        parent::__construct(new Values(...$value));
        $this->items = $this->value->items;
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item instanceof AbstractValues ? $item->toArray() : $item;
        }

        return $result;
    }
}
