<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Routes;

use EugeneErg\DDD\Application\Middleware\Middleware;

interface RouteInterface
{
    public function getMiddleware(): Middleware;

    public function getUri(): ?string;
}
