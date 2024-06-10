<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Integer;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractConditionSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\Access;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\Xml;
use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;

final readonly class Schema extends AbstractConditionSchema
{
    public function __construct(
        ?string $title = null,
        ?string $description = null,
        bool $nullable = false,
        ?Access $access = null,
        bool $deprecated = false,
        ?ExternalDocs $externalDocs = null,
        ?Xml $xml = null,
        ?Value $default = null,
        ?Schemas $anyOf = null,
        ?Schemas $allOf = null,
        ?Schemas $oneOf = null,
        null|self|EnumSchema $not = null,
        null|Value|Integers $examples = null,
        public ?int $minimum = null,
        public ?int $maximum = null,
        public bool $exclusiveMinimum = false,
        public bool $exclusiveMaximum = false,
        public ?int $multipleOf = null,
        public ?Format $format = null,
    ) {
        parent::__construct(
            'integer',
            $title,
            $description,
            $nullable,
            $access,
            $deprecated,
            $externalDocs,
            $xml,
            $default,
            $anyOf,
            $allOf,
            $oneOf,
            $not,
            $examples,
        );
    }
}