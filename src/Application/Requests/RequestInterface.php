<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Requests;

interface RequestInterface
{
    public function __construct(
        ?ContentInterface $content = null,
        ?UriInterface $uri = null,
        ?HeadersInterface $headers = null,
        ?string $type = null,
    );

    public function getHeaders(): ?HeadersInterface;

    public function getUri(): ?UriInterface;

    public function getContent(): ?ContentInterface;

    public static function getType(): ?string;
}
