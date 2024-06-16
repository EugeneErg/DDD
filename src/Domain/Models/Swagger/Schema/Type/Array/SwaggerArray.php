<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Array;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Object\SwaggerObject;

final readonly class SwaggerArray
{
    public array $items;

    public function __construct(SwaggerObject|int|float|string|SwaggerArray ...$items)
    {
        $this->items = $items;
    }
}
