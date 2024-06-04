<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;

abstract readonly class AbstractSecurityScheme
{
    public function __construct(
        public string $type,
        public ?string $description = null,
    ) {
    }
}