<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Tags\Tag;

final readonly class Tags
{
    /** @var Tag[] */
    public array $items;

    public function __construct(Tag ...$tags)
    {
        $this->items = $tags;
    }

    /**
     * @return array<string, array<string>|string>[]
     */
    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $tag) {
            $result[] = $tag->toArray();
        }

        return $result;
    }
}
