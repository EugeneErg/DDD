<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Integer;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractDiscriminator;

final readonly class Discriminator extends AbstractDiscriminator
{
    public function __construct(
        public string $propertyName,
        AbstractIntegerOptions $child,
        AbstractIntegerOptions ...$children,
    ) {
        parent::__construct($this->propertyName, $child, ...$children);
    }
}