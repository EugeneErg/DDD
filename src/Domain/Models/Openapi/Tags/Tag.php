<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Tags;

use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;

final readonly class Tag
{
    public function __construct(
        public string $name,
        public ?string $description = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
    }
}