<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Requests;

interface ContentInterface
{
    public static function getType(): string;
}
