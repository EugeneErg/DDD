<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Methods
{
    /** @var Method[] */
    public array $items;

    public function __construct(Method ...$methods)
    {
        $this->items = $methods;
    }
}