<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Servers\Server;

final readonly class Servers
{
    /** @var Server[] */
    public array $items;

    public function __construct(Server ...$servers)
    {
        $this->items = $servers;
    }
}