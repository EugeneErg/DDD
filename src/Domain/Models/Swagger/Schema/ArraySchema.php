<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class ArraySchema extends AbstractSchema
{
    public function __construct(
        public AbstractSchema $items,
        public ?array $example,
    ) {
    }
}