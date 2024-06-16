<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Query;

use EugeneErg\DDD\Domain\Models\Swagger\EncodingStyle;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class Parameter extends AbstractParameter
{
    public function __construct(
        string $name,
        Style $style,
        bool $allowEmptyValue = false,
        bool $allowReserved = false,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct(
            $name,
            $style === Style::DeepObject,
            match ($style) {
                Style::DeepObject => EncodingStyle::DeepObject,
                Style::PipeDelimited => EncodingStyle::PipeDelimited,
                Style::SpaceDelimited => EncodingStyle::SpaceDelimited,
            },
            $allowEmptyValue,
            $allowReserved,
            $required,
            $deprecated,
            $description,
            $schema,
        );
    }
}
