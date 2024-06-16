<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract;

abstract readonly class AbstractSchemas
{
    /** @var OptionsInterface[] */
    public array $items;

    public function __construct(OptionsInterface ...$schemas)
    {
        $this->items = $schemas;
    }
}
