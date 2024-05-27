<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Boolean;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractSchemas;

final readonly class Schemas extends AbstractSchemas
{
    public function __construct(Options ...$schemas)
    {
        parent::__construct(...$schemas);
    }
}
