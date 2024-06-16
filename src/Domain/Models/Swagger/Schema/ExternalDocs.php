<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class ExternalDocs
{
    public function __construct(
        public ?string $url = null,
        public ?string $description = null,
    ) {
    }
}
