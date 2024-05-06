<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Requests;

interface HeadersInterface
{
    public static function getNames(): array;
}