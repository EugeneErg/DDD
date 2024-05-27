<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract;

abstract readonly class AbstractDiscriminator
{
    /** @var OptionsInterface[] */
    public array $mapping;

    public function __construct(
        public string $propertyName,
        OptionsInterface $child,
        OptionsInterface ...$children,
    ) {
        array_unshift($children, $child);
        $this->mapping = $children;
    }
}