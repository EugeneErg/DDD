<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\String;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;

final readonly class Value extends AbstractValue
{
    public function __construct(string $value)
    {
        parent::__construct($value);
    }
}
