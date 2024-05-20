<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Routes;

readonly class Routes
{
    /** @var RouteInterface[] */
    public array $items;

    public function __construct(RouteInterface ...$routes)
    {
        $this->items = $routes;
    }
}