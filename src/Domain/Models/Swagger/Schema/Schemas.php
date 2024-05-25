<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class Schemas
{
    /** @var AbstractSchema[] */
    public array $items;

    public function __construct(AbstractSchema ...$schemas)
    {
        $this->items = $schemas;
    }
}