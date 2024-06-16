<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link;

final readonly class Parameters
{
    /** @var array<string, Parameter> */
    public array $items;

    public function __construct(Parameter ...$parameters)
    {
        $this->items = $parameters;
    }
}
