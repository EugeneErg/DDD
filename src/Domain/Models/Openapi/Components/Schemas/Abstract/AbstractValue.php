<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

abstract readonly class AbstractValue
{
    public function __construct(public int|float|string|bool|null|AbstractValues $value)
    {
    }

    /**
     * @return int|float|string|bool|object{}|array{}|null
     */
    public function toNative(): int|float|string|bool|null|object|array
    {
        return $this->value instanceof AbstractValues ? $this->value->toNative() : $this->value;
    }
}
