<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses\Response;

final readonly class Responses
{
    /** @var array<string, Response> */
    public array $items;

    public function __construct(Response ...$responses)
    {
        /** @var array<string, Response> $responses */
        $this->items = $responses;
    }

    /**
     * @return array<string, array{}>
     */
    public function toObject(Components $components): array
    {
        $result = [];

        if ($components->responses === $this) {
            foreach ($this->items as $name => $item) {
                $result[$name] = $item->toArray($components);
            }
        } else {
            foreach ($this->items as $name => $item) {
                $searchName = array_search($item, $components->responses->items, true);
                $result[$name] = $searchName === false
                    ? $item->toArray($components)
                    : ['$ref' => '#/components/responses' . $searchName];
            }
        }

        return $result;
    }
}
