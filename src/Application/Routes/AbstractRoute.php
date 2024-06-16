<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Routes;

use EugeneErg\DDD\Application\Middleware\Middleware;
use EugeneErg\DDD\Application\Requests\MiddlewareInterface;

abstract class AbstractRoute implements RouteGroupInterface
{
    private readonly Middleware $middleware;
    private readonly Routes $routes;

    public function __construct(private readonly ?string $uri = null, MiddlewareInterface ...$middleware)
    {
        $this->middleware = new Middleware(...$middleware);
    }

    public function getChildren(): Routes
    {
        return $this->routes;
    }

    public function getMiddleware(): Middleware
    {
        return $this->middleware;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    protected function setChildren(RouteInterface ...$routes): void
    {
        $this->routes = new Routes(...$routes);
    }

    protected function uriToPattern(string $uri): string
    {
        return '{^' . preg_quote($uri) . '}';
    }
}
