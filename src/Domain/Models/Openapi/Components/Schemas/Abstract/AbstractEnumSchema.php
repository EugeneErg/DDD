<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

use BackedEnum;
use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;
use IntBackedEnum;
use StringBackedEnum;

abstract readonly class AbstractEnumSchema extends AbstractSchema
{
    public function __construct(
        public AbstractValues|BackedEnum $enums,
        ?string $title = null,
        ?string $description = null,
        bool $nullable = false,
        ?Access $access = null,
        bool $deprecated = false,
        ?ExternalDocs $externalDocs = null,
        ?Xml $xml = null,
        ?AbstractValue $default = null,
    ) {
        parent::__construct(
            $this->getType($enums, $default),
            $title,
            $description,
            $nullable,
            $access,
            $deprecated,
            $externalDocs,
            $xml,
            $default,
        );
    }

    private function getType(array|BackedEnum $enums, ?AbstractValue $default): ?string
    {
        if ($enums instanceof IntBackedEnum) {
            return 'integer';
        }

        if ($enums instanceof StringBackedEnum) {
            return 'string';
        }

        if (((! $enums instanceof AbstractValues) || $this->enums->items === []) && $default === null) {
            return null;
        }

        $firstValue = $default ?? $this->enums->items[array_key_first($this->enums->items)];

        if ($firstValue instanceof AbstractValues) {
            return 'array';
        }

        $baseType = gettype($firstValue);

        return $baseType === 'NULL' ? 'null' : $baseType;
    }
}