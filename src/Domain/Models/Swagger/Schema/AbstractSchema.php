<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

abstract readonly class AbstractSchema
{
    public Schemas $anyOf;
    public Schemas $allOf;
    public Schemas $oneOf;

    public function __construct(
        public bool $nullable = false,
        public ?string $title = null,
        public ?string $description = null,
        public Access $access = Access::ReadAndWrite,
        public bool $deprecated = false,
        ?Schemas $anyOf = null,
        ?Schemas $allOf = null,
        ?Schemas $oneOf = null,
        public ?AbstractSchema $not = null,
        public ?Discriminator $discriminator = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
        $this->anyOf = $anyOf ?? new Schemas();
        $this->allOf = $allOf ?? new Schemas();
        $this->oneOf = $oneOf ?? new Schemas();
    }
}