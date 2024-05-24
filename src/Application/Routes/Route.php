<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Routes;

use EugeneErg\DDD\Application\Requests\MiddlewareInterface;

class Route extends AbstractRoute
{
    public function __construct(?string $uri = null, MiddlewareInterface ...$middleware)
    {
        parent::__construct($uri, $middleware);
    }

    public static function post(): self
    {

    }
}