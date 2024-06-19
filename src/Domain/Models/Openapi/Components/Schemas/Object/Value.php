<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;

final readonly class Value extends AbstractValue
{
    public function __construct(?OpenapiObject $value)
    {
        parent::__construct($value);
    }
}
