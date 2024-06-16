<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;
use EugeneErg\DDD\Domain\Models\Openapi\Exceptions\SecuritySchemeNotFoundOpenapiException;

abstract readonly class AbstractSecurityScheme
{
    public function __construct(
        public string $type,
        public ?string $description = null,
    ) {
    }

    public function toTargetArray(SecuritySchemes $securitySchemes): array
    {
        $name = array_search($this, $securitySchemes->items);

        if ($name === false) {
            throw new SecuritySchemeNotFoundOpenapiException();
        }

        return [$name => []];
    }

    public function toArray(): array
    {
        $result = [
            'type' => $this->type,
        ];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        return $result;
    }
}
