<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class BooleanSchema extends AbstractSchema
{
    public function __construct(
        //public string $value,
        public ?string $format= null,
        //additionalProperties
    ) {
    }
}