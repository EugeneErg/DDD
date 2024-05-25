<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

enum NumberFormat
{
    case Int32;
    case Int64;
}