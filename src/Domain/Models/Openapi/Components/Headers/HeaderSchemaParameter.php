<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\AbstractHeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Examples;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Schema;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

final readonly class HeaderSchemaParameter extends AbstractHeaderSchemaParameter
{
    public function __construct(
        Schema $schema,
        bool $explode = true,
        null|Examples|Value $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct(null, $schema, $explode, $description, $examples, $required, $deprecated);
    }
}