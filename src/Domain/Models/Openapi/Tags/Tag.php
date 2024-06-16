<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Tags;

use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;

final readonly class Tag
{
    public function __construct(
        public string $name,
        public ?string $description = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
    }

    /**
     * @return array{name: string, description?: string, externalDocs?: string[]}
     */
    public function toArray(): array
    {
        $result = ['name' => $this->name];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if ($this->externalDocs !== null) {
            $result['externalDocs'] = $this->externalDocs->toArray();
        }

        return $result;
    }
}
