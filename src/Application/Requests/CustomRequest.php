<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Requests;

class CustomRequest implements RequestInterface
{
    private function __construct(HeadersInterface $headers, UriInterface $uri, ContentInterface $content)
    {
        parent::__construct($headers, $uri, $content);
    }

    public function getContent(): ContentInterface
    {
        // TODO: Implement getContent() method
    }
}
