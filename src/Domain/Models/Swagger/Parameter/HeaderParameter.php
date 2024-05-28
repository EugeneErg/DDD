<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class HeaderParameter extends AbstractParameter
{
    public function __construct(
        bool $required = false,
        public bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct(false, $required, $this->deprecated, $description, $schema);
    }
}