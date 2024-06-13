<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class SchemaParameter extends AbstractHeaderSchemaParameter
{
    public function __construct(
        string $name,
        AbstractSchema $schema,
        bool $explode = true,
        null|AbstractValues|AbstractValue $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct($name, $schema, $explode, $description, $examples, $required, $deprecated);
    }
}