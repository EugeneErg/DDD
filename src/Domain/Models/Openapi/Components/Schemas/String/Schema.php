<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\String;

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
        null|Value|Strings $examples = null,
        public int $minLength = 0,
        public ?int $maxLength = null,
        public ?string $pattern = null,
        public ?Format $format = null,
    ) {
        parent::__construct(
            'string',
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
