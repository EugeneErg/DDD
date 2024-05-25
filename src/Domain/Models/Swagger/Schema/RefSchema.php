<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class RefSchema extends AbstractSchema
{
    public function __construct(public string $value)
    {
    }
}