<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractSchemas;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Null\Schemas;

final readonly class RequestBody
{
    public AbstractSchemas $extensions;

    public function __construct(
        public Contents $content,
        public bool $required = false,
        public ?string $description = null,
        ?AbstractSchemas $extensions = null,
    ) {
        $this->extensions = $extensions ?? new Schemas();
    }
}