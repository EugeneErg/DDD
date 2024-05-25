<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

final readonly class ObjectSchema extends AbstractSchema
{
    public Strings $required;
    public Schemas $properties;

    public function __construct(
        ?Strings $required = null,
        ?Schemas $properties = null,
        public int $minProperties = 0,
        public ?int $maxProperties = null,
        public bool $additionalProperties = true,
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
        $this->required = $required ?? new Strings();
        $this->properties = $properties ?? new Schemas();
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