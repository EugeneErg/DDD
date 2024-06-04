<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameter;

final readonly class Parameters
{
    /** @var array<string, AbstractParameter> */
    public array $items;

    public function __construct(AbstractParameter ...$parameters)
    {
        $this->items = $parameters;
    }
}