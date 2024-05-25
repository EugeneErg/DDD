<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Examples
{
    /** @var Example[] */
    public array $items;

    public function __construct(Example ...$examples)
    {
        $this->items = $examples;
    }
}