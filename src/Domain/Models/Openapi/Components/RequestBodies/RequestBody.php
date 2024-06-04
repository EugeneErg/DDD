<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

final readonly class RequestBody
{
    public function __construct(
        public Contents $content,
        public bool $required = false,
        public ?string $description = null,
    ) {
    }
}