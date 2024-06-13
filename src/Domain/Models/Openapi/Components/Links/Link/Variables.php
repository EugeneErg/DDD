<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link;

final readonly class Variables
{
    /** @var array<string, Variable> */
    public array $items;

    public function __construct(Variable ...$variables)
    {
        $this->items = $variables;
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray();
        }

        return $result;
    }
}