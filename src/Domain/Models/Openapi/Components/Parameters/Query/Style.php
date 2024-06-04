<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query;

enum Style: string
{
    case Form = 'form';
    case SpaceDelimited = 'spaceDelimited';
    case PipeDelimited = 'pipeDelimited';
    case DeepObject = 'deepObject';
}