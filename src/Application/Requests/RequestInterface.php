<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Requests;

interface RequestInterface
{
    public function getHeaders(): HeadersInterface;
    public function getUri(): UriInterface;
    public function getContent(): ContentInterface;
}
