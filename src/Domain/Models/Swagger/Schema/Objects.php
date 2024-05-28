<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Object\SwaggerObject;

final readonly class Objects
{
    /** @var SwaggerObject[] */
    public array $items;

    public function __construct(SwaggerObject ...$objects)
    {
        $this->items = $objects;
    }
}