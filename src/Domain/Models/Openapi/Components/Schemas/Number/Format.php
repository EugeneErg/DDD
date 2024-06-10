<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Number;

enum Format: string
{
    case Float = 'float';
    case Double = 'double';
}