<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

abstract readonly class AbstractParameters
{
    /** @var array<string, AbstractParameter> */
    public array $items;

    public function __construct(AbstractParameter ...$queries)
    {
        $this->items = $queries;
    }
}
