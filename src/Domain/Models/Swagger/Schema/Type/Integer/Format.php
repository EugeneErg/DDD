<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Integer;

enum Format: string
{
    case Int32 = 'int32';
    case Int64 = 'int64';
}
