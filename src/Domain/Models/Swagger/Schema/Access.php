<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema;

enum Access: string
{
    case ReadOnly = 'readOnly';
    case WriteOnly = 'writeOnly';
    case ReadAndWrite = '';
}
