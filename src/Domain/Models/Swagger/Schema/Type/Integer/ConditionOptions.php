<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Integer;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Access;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;

final readonly class ConditionOptions extends AbstractIntegerOptions
{
    public function __construct(
        public bool $exclusiveMinimum = false,
        public bool $exclusiveMaximum = false,
        public ?int $minimum = null,
        public ?int $maximum = null,
        public ?int $multipleOf = null,
        ?Format $format = null,
        ?int $default = null,
        ?int $example = null,
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
            $format,
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
