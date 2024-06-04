<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter;

use EugeneErg\DDD\Domain\Models\Swagger\EncodingStyle;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class CookieParameter extends AbstractParameter
{
    public function __construct(
        string $name,
        bool $explode = true,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct($name, $explode, EncodingStyle::Form, $required, $deprecated, $description, $schema);
    }
}