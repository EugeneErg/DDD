<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Path;

use EugeneErg\DDD\Domain\Models\Swagger\EncodingStyle;
use EugeneErg\DDD\Domain\Models\Swagger\Parameter\AbstractParameter as BaseAbstractParameter;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

abstract readonly class AbstractParameter extends BaseAbstractParameter
{
    public function __construct(
        string $name,
        bool $explode,
        EncodingStyle $style,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct($name, $explode, $style, $required, $deprecated, $description, $schema);
    }
}