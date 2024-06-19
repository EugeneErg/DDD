<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

abstract readonly class AbstractParameters
{
    /** @var array<string, AbstractParameter> */
    public array $items;

    public function __construct(AbstractParameter ...$parameters)
    {
        $this->items = $parameters;
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $parameter) {
            $result[] = array_merge($parameter->toObject(), ['name' => $name]);
        }

        return $result;
    }
}
