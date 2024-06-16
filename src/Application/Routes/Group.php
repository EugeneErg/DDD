<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Routes;

use EugeneErg\DDD\Application\Middleware\Middleware;

class Group implements RouteGroupInterface
{
    public readonly Middleware $middleware;

    public function __construct(
        public readonly Routes $children,
        public readonly ?string $uri = null,
        ?Middleware $middleware = null,
    ) {
        $this->middleware = $middleware ?? new Middleware();
    }

    public static function new(Routes $children, ?string $uri = null, ?Middleware $middleware = null): static
    {
        return new self($children, static::uriToPattern($uri), $middleware);
    }

    public function getMiddleware(): Middleware
    {
        return $this->middleware;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getChildren(): Routes
    {
        return $this->children;
    }

    private static function uriToPattern(?string $uri): ?string
    {
        if ($uri == null) {
            return null;
        }

        $isValidPattern = preg_match($uri, '') !== false;

        return $isValidPattern ? $uri : '{^' . preg_quote($uri) . '}';
    }
}
