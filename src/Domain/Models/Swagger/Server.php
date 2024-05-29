<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Server
{
    public function __construct(
        public string $url,
        public ?string $description = null,
    ) {
    }
}