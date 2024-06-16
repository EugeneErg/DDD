<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class Numbers
{
    /** @var float[] */
    public array $items;

    public function __construct(float ...$numbers)
    {
        $this->items = $numbers;
    }
}
