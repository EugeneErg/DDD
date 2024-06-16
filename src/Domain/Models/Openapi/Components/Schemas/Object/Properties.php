<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object;

final readonly class Properties
{
    /** @var Property[] */
    public array $items;

    public function __construct(Property ...$properties)
    {
        $this->items = $properties;
    }
}
