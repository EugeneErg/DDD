<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Object;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractDiscriminator;

final readonly class Discriminator extends AbstractDiscriminator
{
    public function __construct(string $propertyName, AbstractObjectOptions $child, AbstractObjectOptions ...$children)
    {
        parent::__construct($propertyName, $child, ...$children);
    }
}
