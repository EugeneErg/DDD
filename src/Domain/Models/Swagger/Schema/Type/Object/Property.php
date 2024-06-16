<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Object;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class Property
{
    public function __construct(OptionsInterface $options, public bool $required = false)
    {
    }
}
