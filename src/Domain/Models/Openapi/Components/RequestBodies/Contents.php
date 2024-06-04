<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

final readonly class Contents
{
    /** @var array<string, Content> */
    public array $items;

    public function __construct(Content ...$contents)
    {
        $this->items = $contents;
    }
}