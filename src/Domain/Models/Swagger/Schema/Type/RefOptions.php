<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class RefOptions implements OptionsInterface
{
    public function __construct(public string $value)
    {
    }
}
