<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter;

use EugeneErg\DDD\Domain\Models\Swagger\EncodingStyle;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

abstract readonly class AbstractParameter
{
    public function __construct(
        public string $name,//для разных in могут быть одинаковыми
        public bool $explode,
        public EncodingStyle $style,
        public bool $required = false,
        public bool $deprecated = false,
        public ?string $description = null,
        public ?OptionsInterface $schema = null,
    ) {
    }
}
