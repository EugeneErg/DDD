<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Object;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Array\SwaggerArray;

final readonly class SwaggerObject
{
    public array $parameters;

    public function __construct(SwaggerObject|int|float|string|SwaggerArray ...$parameters)
    {
        $this->parameters = $parameters;
    }
}
