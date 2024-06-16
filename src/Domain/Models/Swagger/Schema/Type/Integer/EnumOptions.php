<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Integer;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Access;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Integers;
use IntBackedEnum;

final readonly class EnumOptions extends AbstractIntegerOptions
{
    public function __construct(
        public Integers|IntBackedEnum $enum,
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
