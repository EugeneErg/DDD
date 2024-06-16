<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Servers\Server;

final readonly class Servers
{
    /** @var array<Server> */
    public array $items;

    public function __construct(Server ...$servers)
    {
        $this->items = $servers;
    }

    /**
     * @return array<int, array{
     *     url: string,
     *     enum?: array<string>,
     *     description?: string,
     *     default?: string,
     *     variables?: array{},
     * }>
     */
    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $server) {
            $result[] = $server->toArray();
        }

        return $result;
    }
}
