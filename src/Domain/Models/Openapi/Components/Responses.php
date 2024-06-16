<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses\Response;

final readonly class Responses
{
    /** @var array<string, Response> */
    public array $items;

    public function __construct(Response ...$responses)
    {
        $this->items = $responses;
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
