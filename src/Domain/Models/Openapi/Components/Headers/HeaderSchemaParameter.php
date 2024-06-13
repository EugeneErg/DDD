<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\AbstractHeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class HeaderSchemaParameter extends AbstractHeaderSchemaParameter
{
    public function __construct(
        AbstractSchema $schema,
        bool $explode = true,
        null|AbstractValue|AbstractValues $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct(null, $schema, $explode, $description, $examples, $required, $deprecated);
    }
}