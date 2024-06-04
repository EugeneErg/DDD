<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Examples;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Schema;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

final readonly class CookieSchemaParameter extends AbstractSchemaParameter
{
    public function __construct(
        string $name,
        Schema $schema,
        bool $explode = false,
        null|Examples|Value $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct($name, In::Cookie, $schema, $explode, $description, $examples, $required, $deprecated);
    }
}