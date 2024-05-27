<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class Objects
{
    /** @var object[] */
    public array $items;

    public function __construct(object ...$objects)
    {
        $this->items = $objects;
    }
}