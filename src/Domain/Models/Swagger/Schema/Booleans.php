<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class Booleans
{
    /** @var bool[] */
    public array $items;

    public function __construct(bool ...$booleans)
    {
        $this->items = $booleans;
    }
}