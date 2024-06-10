<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;

final readonly class Property
{
    public function __construct(public AbstractSchema $schema, public bool $required = false)
    {
    }
}