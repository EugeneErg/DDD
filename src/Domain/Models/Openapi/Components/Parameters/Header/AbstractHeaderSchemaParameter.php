<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Examples;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

abstract readonly class AbstractHeaderSchemaParameter extends AbstractSchemaParameter
{
    public function __construct(
        ?string $name,
        public AbstractSchema $schema,
        bool $explode = true,
        null|Examples|Value $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct($name, In::Header, $schema, $explode, $description, $required, $deprecated, $examples);
    }
}