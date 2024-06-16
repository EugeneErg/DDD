<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\String;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Access;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;

final readonly class ConditionOptions extends AbstractStringOptions
{
    public function __construct(
        public ?string $pattern = null,
        public int $minLength = 0,
        public ?int $maxLength = null,
        public ?Format $format = null,
        ?string $default = null,
        ?string $example = null,
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
