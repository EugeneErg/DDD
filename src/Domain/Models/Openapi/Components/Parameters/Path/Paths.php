<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\ContentParameter;

/**
 * @property array<string, ContentParameter|SchemaParameter> $items
 */
final readonly class Paths extends AbstractParameters
{
    public function __construct(ContentParameter|SchemaParameter ...$paths)
    {
        parent::__construct(...$paths);
    }
}
