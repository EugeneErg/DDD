<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Routes;

use EugeneErg\DDD\Application\Controllers\Contracts\ControllerInterface;
use EugeneErg\DDD\Application\Middleware\Middleware;

abstract readonly class Action implements RouteActionInterface
{
    /** @var callable $callback */
    public mixed $callback;

    public Middleware $middleware;

    public function __construct(
        public string $type,
        callable $callback,
        public ?string $uri = null,
        ?Middleware $middleware = null,
    ) {
        $this->callback = $callback;
        $this->middleware = $middleware ?? new Middleware();
    }

    abstract public static function getController(): ControllerInterface;

    public function call()
    {
    }

    public static function post(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function get(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function put(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function delete(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function patch(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function head(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function connect(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function trace(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public static function type(string $type, callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self($type, $callback, $uri, $middleware);
    }

    public static function options(callable $callback, string $uri = null, ?Middleware $middleware = null): self
    {
        return new self(__FUNCTION__, $callback, $uri, $middleware);
    }

    public function getCallback(): callable
    {
        return $this->callback;
    }

    public function getMiddleware(): Middleware
    {
        return $this->middleware;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }
}
