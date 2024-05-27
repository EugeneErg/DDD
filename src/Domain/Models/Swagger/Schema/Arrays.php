<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class Arrays
{
    /** @var array[] */
    public array $items;

    public function __construct(array ...$arrays)
    {
        $this->items = $arrays;
    }
}