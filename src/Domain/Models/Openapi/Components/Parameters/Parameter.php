<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Cookie\SchemaParameter as CookieSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\SchemaParameter as HeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path\SchemaParameter as PathSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query\SchemaParameter as QuerySchemaParameter;

final class Parameter
{
    public function __construct(
        public string $name,
        public CustomParameter|PathSchemaParameter|CookieSchemaParameter|QuerySchemaParameter|HeaderSchemaParameter $parameter,
    ) {
    }
}
