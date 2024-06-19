<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\ContentParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\SchemaParameter;

final readonly class Headers
{
    /** @var array<string, ContentParameter|SchemaParameter> */
    public array $items;

    public function __construct(ContentParameter|SchemaParameter ...$headers)
    {
        $this->items = $headers;
    }

    public function toArray(Headers $headers): array
    {
        $result = [];

        if ($this === $headers) {
            foreach ($this->items as $name => $header) {
                $result[$name] = $header->toObject();
            }
        } else {
            foreach ($this->items as $name => $header) {
                $searchName = array_search($header, $headers?->items ?? [], true);
                $result[$name] = $searchName === false
                    ? $header->toObject()
                    : ['$ref' => '#/components/headers/' . $searchName];
            }
        }

        return $result;
    }
}
