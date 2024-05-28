<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Array\SwaggerArray;

final readonly class Arrays
{
    /** @var SwaggerArray[] */
    public array $items;

    public function __construct(SwaggerArray ...$arrays)
    {
        $this->items = $arrays;
    }
}