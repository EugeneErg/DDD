<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Contents
{
    /** @var Content[] */
    public array $items;

    public function __construct(Content ...$contents)
    {
        $this->items = $contents;
    }
}