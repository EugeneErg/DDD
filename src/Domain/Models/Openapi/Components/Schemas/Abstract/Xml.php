<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

final readonly class Xml
{
    public function __construct(
        public ?string $name =  null,
        public ?string $namespace =  null,
        public ?string $prefix =  null,
        public bool $attribute =  false,
        public bool $wrapped =  false,
    ) {
    }
}