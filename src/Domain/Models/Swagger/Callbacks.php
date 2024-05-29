<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Callbacks
{
    /** @var Paths[] */
    public array $items;

    public function __construct(Paths ...$paths)
    {
        $this->items = $paths;
    }
}