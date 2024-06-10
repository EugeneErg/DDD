<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchemas;

/**
 * @property AbstractSchema[] $items
 */
final readonly class Schemas extends AbstractSchemas
{
    public function __construct(AbstractSchema ...$schemas)
    {
        parent::__construct(...$schemas);
    }
}