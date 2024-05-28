<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Query;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class Parameter extends AbstractParameter
{
    public function __construct(
        public Style $style,
        bool $allowEmptyValue = false,
        bool $allowReserved = false,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct(
            $style === Style::DeepObject,
            $allowEmptyValue,
            $allowReserved,
            $required,
            $deprecated,
            $description,
            $schema,
        );
    }
}