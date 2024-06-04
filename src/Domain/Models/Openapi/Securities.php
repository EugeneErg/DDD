<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Securities\SecuritySchemes;

final readonly class Securities
{
    /** @var SecuritySchemes[] */
    public array $items;

    public function __construct(SecuritySchemes ...$securities)
    {
        $this->items = $securities;
    }
}