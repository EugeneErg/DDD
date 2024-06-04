<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link;

use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

final readonly class Variable
{
    public function __construct(
        public Value $default,
        public ?string $description = null,
    ) {
    }
}