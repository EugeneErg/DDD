<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Middleware;

use EugeneErg\DDD\Application\Requests\MiddlewareInterface;

readonly class Middleware
{
    /** @var MiddlewareInterface[] */
    public array $items;

    public function __construct(MiddlewareInterface ...$middleware)
    {
        $this->items = $middleware;
    }
}
