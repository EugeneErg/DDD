<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

abstract readonly class AbstractSchemas
{
    /** @var AbstractSchema[] */
    public array $items;

    public function __construct(AbstractSchema ...$schemas)
    {
        $this->items = $schemas;
    }

    /**
     * @return array<int, array{}>
     */
    public function toArray(self $schemas): array
    {
        $result = [];

        foreach ($this->items as $item) {
            $searchName = array_search($item, $schemas->items, true);
            $result[] = $searchName === false ? $item->toArray() : ['$ref' => '#/components/schemas/' . $searchName];
        }

        return $result;
    }

    public function toObject(): object
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray();
        }

        return (object) $result;
    }
}
