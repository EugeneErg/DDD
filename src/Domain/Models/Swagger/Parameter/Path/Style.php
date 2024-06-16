<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Path;

enum Style: string
{
    case Simple = 'simple';
    case Label = 'label';
}
