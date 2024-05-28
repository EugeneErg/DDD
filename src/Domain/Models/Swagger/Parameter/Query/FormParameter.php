<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Query;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class FormParameter extends AbstractParameter
{
    public function __construct(
        bool $allowEmptyValue = false,
        bool $allowReserved = false,
        bool $explode = true,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct($explode, $allowEmptyValue, $allowReserved, $required, $deprecated, $description, $schema);
    }
}