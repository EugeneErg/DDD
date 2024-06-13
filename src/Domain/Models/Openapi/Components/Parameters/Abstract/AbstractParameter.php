<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;

abstract readonly class AbstractParameter
{
    public function __construct(
        public ?string $name,
        public In $in,
        public ?string $description = null,
        public ?bool $required = false,
        public ?bool $deprecated = false,
    ) {
    }

    public function toArray(): array
    {
        $result = [
            'in' => $this->in->value,
            'required' => $this->required,
        ];

        if ($this->name !== null) {
            $result['name'] = $this->name;
        }

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if ($this->description) {
            $result['description'] = $this->description;
        }

        return $result;
    }
}