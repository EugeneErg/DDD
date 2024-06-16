<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

enum Access: string
{
    case ReadOnly = 'readOnly';
    case WriteOnly = 'writeOnly';
}
