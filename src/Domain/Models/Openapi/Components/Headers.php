<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers\HeaderContentParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers\HeaderSchemaParameter;

final readonly class Headers
{
    /** @var array<string, HeaderContentParameter|HeaderSchemaParameter> */
    public array $items;

    public function __construct(HeaderContentParameter|HeaderSchemaParameter ...$headers)
    {
        $this->items = $headers;
    }
}