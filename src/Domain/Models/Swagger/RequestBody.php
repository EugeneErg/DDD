<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class RequestBody
{
    public Schemas $extensions;

    public function __construct(
        public Contents $content,
        public bool $required = false,
        public ?string $description = null,
        ?Schemas $extensions = null,
    ) {
        $this->extensions = $extensions ?? new Schemas();
    }
}