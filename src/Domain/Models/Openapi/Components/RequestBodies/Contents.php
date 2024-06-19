<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

final readonly class Contents
{
    /** @var array<string, Content> */
    public array $items;

    public function __construct(Content ...$contents)
    {
        /** @var array<string, Content> $contents */
        $this->items = $contents;
    }

    /**
     * @return array<string, array{}>
     */
    public function toArray(Headers $headers): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toObject($headers);
        }

        return $result;
    }
}
