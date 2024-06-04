<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Paths\Path;

final readonly class Paths
{
    /** @var Path[] */
    public array $items;

    public function __construct(Path ...$paths)
    {
        $this->items = $paths;
    }
}