<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Array;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Access;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;

final readonly class ConditionOptions extends AbstractArrayOptions
{
    public function __construct(
        public bool $uniqueItems = false,
        public int $minItems = 0,
        public ?int $maxItems = null,
        ?SwaggerArray $default = null,
        ?SwaggerArray $example = null,
        ?Schemas $anyOf = null,
        ?Schemas $allOf = null,
        ?Schemas $oneOf = null,
        bool $nullable = false,
        ?string $title = null,
        ?string $description = null,
        Access $access = Access::ReadAndWrite,
        bool $deprecated = false,
        ?self $not = null,
        ?Discriminator $discriminator = null,
        ?ExternalDocs $externalDocs = null,
    ) {
        parent::__construct(
            $default,
            $example,
            $anyOf,
            $allOf,
            $oneOf,
            $nullable,
            $title,
            $description,
            $access,
            $deprecated,
            $not,
            $discriminator,
            $externalDocs,
        );
    }
}
