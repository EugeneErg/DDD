<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

enum In: string
{
    case Query = 'query';
    case Header = 'header';
    case Path = 'path';
    case Cookie = 'cookie';
}
