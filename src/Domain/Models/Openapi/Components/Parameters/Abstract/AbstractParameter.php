<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components;

abstract readonly class AbstractParameter
{
    public function __construct(
        public ?string $description = null,
        public ?bool $required = false,
        public ?bool $deprecated = false,
    ) {
    }

    public function toObject(Components $components): object
    {
        $result = ['required' => $this->required];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if ($this->description) {
            $result['description'] = $this->description;
        }

        return (object) $result;
    }
}
