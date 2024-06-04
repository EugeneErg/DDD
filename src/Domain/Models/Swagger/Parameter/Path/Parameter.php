<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Path;

use EugeneErg\DDD\Domain\Models\Swagger\EncodingStyle;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class Parameter extends AbstractParameter
{
    public function __construct(
        string $name,
        Style $style = Style::Simple,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct(
            $name,
            false,
            match ($style) {
                Style::Label => EncodingStyle::Label,
                Style::Simple => EncodingStyle::Simple,
            },
            $required,
            $deprecated,
            $description,
            $schema,
        );
    }
}