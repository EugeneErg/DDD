<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

final readonly class ExternalDocs
{
    public function __construct(
        public string $url,
        public ?string $description,
    ) {
    }

    public function toArray(): array
    {
        $result = ['url' => $this->url];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        return $result;
    }
}