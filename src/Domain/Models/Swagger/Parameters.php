<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Parameter\AbstractParameter;

final readonly class Parameters
{
    /** @var AbstractParameter[] */
    public array $items;

    public function __construct(AbstractParameter ...$parameters)
    {
        $this->items = $parameters;
    }
}
