<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\String;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Access;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractOptions;

abstract readonly class AbstractStringOptions extends AbstractOptions
{
    public function __construct(
        public ?string $default = null,
        public ?string $example = null,
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
            $anyOf ?? new Schemas(),
            $allOf ?? new Schemas(),
            $oneOf ?? new Schemas(),
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
