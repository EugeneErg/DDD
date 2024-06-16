<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Cookie;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\ContentParameter;

/**
 * @property array<string, ContentParameter|SchemaParameter> $items
 */
final readonly class Cookies extends AbstractParameters
{
    public function __construct(ContentParameter|SchemaParameter ...$cookies)
    {
        parent::__construct(...$cookies);
    }
}
