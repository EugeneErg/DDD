<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Access;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;

abstract readonly class AbstractOptions implements OptionsInterface
{
    public function __construct(
        public AbstractSchemas $anyOf,
        public AbstractSchemas $allOf,
        public AbstractSchemas $oneOf,
        public bool $nullable = false,
        public ?string $title = null,
        public ?string $description = null,
        public Access $access = Access::ReadAndWrite,
        public bool $deprecated = false,
        public ?OptionsInterface $not = null,
        public ?AbstractDiscriminator $discriminator = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
    }
}
