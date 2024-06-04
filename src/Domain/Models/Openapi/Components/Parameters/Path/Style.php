<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path;

enum Style: string
{
    case matrix = 'matrix';
    case Label = 'label';
    case Simple = 'simple';
}