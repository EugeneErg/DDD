<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Paths\Path;

final readonly class Paths
{
    /** @var array<string, Path> */
    public array $items;

    public function __construct(Path ...$paths)
    {
        /** @var array<string, Path> $paths */
        $this->items = $paths;
    }

    /**
     * @return array<string, array<string, array{}>>
     */
    public function toArray(Components $components): array
    {
        $result = [];

        foreach ($this->items as $name => $path) {
            $result[$name] = $path->toArray($components);
        }

        return $result;
    }
}
