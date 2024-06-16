<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class Variable
{
    public function __construct(
        public AbstractValue $default,
        public ?string $description = null,
    ) {
    }

    /**
     * @return array{default: mixed, description?: string}
     */
    public function toArray(): array
    {
        $result = [
            'default' => $this->default->value instanceof AbstractValues
                ? $this->default->value->toArray()
                : $this->default->value,
        ];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        return $result;
    }
}
