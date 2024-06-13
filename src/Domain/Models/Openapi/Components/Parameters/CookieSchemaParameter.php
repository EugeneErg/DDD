<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class CookieSchemaParameter extends AbstractSchemaParameter
{
    public function __construct(
        string $name,
        AbstractSchema $schema,
        bool $explode = false,
        null|AbstractValues|AbstractValue $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct($name, In::Cookie, $schema, $explode, $description, $required, $deprecated, $examples);
    }
}