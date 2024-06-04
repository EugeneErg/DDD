<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Servers;

final readonly class Enum
{
    /** @var string[] */
    public array $items;

    public function __construct(string ...$urls)
    {
        $this->items = $urls;
    }
}
