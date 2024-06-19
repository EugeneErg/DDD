<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Object;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class OpenapiObject extends AbstractValues
{
    public function toNative(): object
    {
        return (object) parent::toNative();
    }
}
