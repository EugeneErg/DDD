<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

abstract readonly class AbstractValues
{
    /** @var array<self|float|int|null|string|bool> */
    public array $items;

    public function __construct(null|self|int|float|string|bool ...$items)
    {
        $this->items = $items;
    }

    /**
     * @return array<float|int|null|string|bool|object|array{}>
     */
    public function toNative(): array|object
    {
        $result = [];

        foreach ($this->items as $item) {
            $result[] = $item instanceof self ? $item->toNative() : $item;
        }

        return $result;
    }
}
