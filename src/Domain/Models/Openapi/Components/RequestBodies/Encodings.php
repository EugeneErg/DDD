<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

final readonly class Encodings
{
    /** @var array<string, Encoding> */
    public array $items;

    public function __construct(Encoding ...$encodings)
    {
        /** @var array<string, Encoding> $encodings */
        $this->items = $encodings;
    }

    /**
     * @return array<string, array{}>
     */
    public function toArray(Headers $headers): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray($headers);
        }

        return $result;
    }
}
