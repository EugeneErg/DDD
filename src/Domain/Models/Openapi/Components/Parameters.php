<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Parameter;

final readonly class Parameters
{
    /** @var array<string, Parameter> */
    public array $items;

    public function __construct(Parameter ...$parameters)
    {
        $this->items = $parameters;
    }

    public function toObject(Components $components): object
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toObject($components);
        }

        return (object) $result;
    }
}
