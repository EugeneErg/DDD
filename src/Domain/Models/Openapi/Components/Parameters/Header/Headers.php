<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\ContentParameter;

/**
 * @property array<string, ContentParameter|SchemaParameter> $items
 */
final readonly class Headers extends AbstractParameters
{
    public function __construct(ContentParameter|SchemaParameter ...$headers)
    {
        parent::__construct(...$headers);
    }
}
