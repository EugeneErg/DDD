<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class NumberSchema extends AbstractSchema
{
    public function __construct(
        public bool $exclusiveMinimum = false,
        public bool $exclusiveMaximum = false,
        public ?float $minimum = null,
        public ?float $maximum = null,
        public ?float $multipleOf = null,
        public ?float $default = null,
        public ?float $example = null,
        public ?NumberFormat $format = null,
        bool $nullable = false,
        ?string $title = null,
        ?string $description = null,
        Access $access = Access::ReadAndWrite,
        bool $deprecated = false,
        ?Schemas $anyOf = null,
        ?Schemas $allOf = null,
        ?Schemas $oneOf = null,
        ?AbstractSchema $not = null,
        ?Discriminator $discriminator = null,
        ?ExternalDocs $externalDocs = null,
    ) {
        parent::__construct(
            $nullable,
            $title,
            $description,
            $access,
            $deprecated,
            $anyOf,
            $allOf,
            $oneOf,
            $not,
            $discriminator,
            $externalDocs,
        );
    }
}