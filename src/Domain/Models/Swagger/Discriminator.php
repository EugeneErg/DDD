<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Discriminator
{
    public Schemas $mapping;

    public function __construct(
        public string $propertyName,
        ?Schemas $mapping = null,
    ) {
        $this->mapping = $mapping ?? new Schemas();
    }
}