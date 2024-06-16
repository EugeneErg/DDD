<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Path
{
    /** @var Methods[] */
    public array $items;

    public function __construct(Methods ...$methods)
    {
        $this->items = $methods;
    }
}
