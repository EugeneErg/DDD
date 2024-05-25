<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

enum Access
{
    case ReadOnly;
    case WriteOnly;
    case ReadAndWrite;
}