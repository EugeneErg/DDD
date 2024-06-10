<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Integer;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractEnumSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\Access;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\Xml;
use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;
use IntBackedEnum;

final readonly class EnumSchema extends AbstractEnumSchema
{
    public function __construct(
        IntBackedEnum|Integers $enums,
        ?string $title = null,
        ?string $description = null,
        bool $nullable = false,
        ?Access $access = null,
        bool $deprecated = false,
        ?ExternalDocs $externalDocs = null,
        ?Xml $xml = null,
        ?Value $default = null,
    ) {
        parent::__construct($enums, $title, $description, $nullable, $access, $deprecated, $externalDocs, $xml, $default);
    }
}