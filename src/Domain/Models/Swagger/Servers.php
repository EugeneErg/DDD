<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Servers
{
    /** @var Server[] */
    public array $items;

    public function __construct(Servers ...$servers)
    {
        $this->items = $servers;
    }
}
