<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Requests;

interface UriInterface
{
    public static function getPath(): array;
}