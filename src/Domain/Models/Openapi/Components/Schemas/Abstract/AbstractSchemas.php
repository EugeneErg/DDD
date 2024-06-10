<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

abstract readonly class AbstractSchemas
{
    /** @var AbstractSchema[] */
    public array $items;

    public function __construct(AbstractSchema ...$schemas)
    {
        $this->items = $schemas;
    }
}