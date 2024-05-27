<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Array;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractDiscriminator;

final readonly class Discriminator extends AbstractDiscriminator
{
    public function __construct(string $propertyName, AbstractArrayOptions $child, AbstractArrayOptions ...$children)
    {
        parent::__construct($propertyName, $child, ...$children);
    }
}