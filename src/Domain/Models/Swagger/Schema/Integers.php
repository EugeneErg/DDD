<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class Integers
{
    /** @var int[] */
    public array $items;

    public function __construct(int ...$integers)
    {
        $this->items = $integers;
    }
}
