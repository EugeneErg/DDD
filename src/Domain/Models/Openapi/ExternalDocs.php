<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

final readonly class ExternalDocs
{
    public function __construct(
        public string $url,
        public ?string $description,
    ) {
    }
}