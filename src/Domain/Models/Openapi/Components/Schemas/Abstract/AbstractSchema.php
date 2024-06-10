<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;

abstract readonly class AbstractSchema
{
    public function __construct(
        public ?string $type = null,
        public ?string $title = null,
        public ?string $description = null,
        public bool $nullable = false,
        public ?Access $access = null,
        public bool $deprecated = false,
        public ?ExternalDocs $externalDocs = null,
        public ?Xml $xml = null,
        public ?AbstractValue $default = null,
    ) {
    }
}