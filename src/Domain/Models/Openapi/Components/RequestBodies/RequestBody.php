<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

final readonly class RequestBody
{
    public function __construct(
        public Contents $content,
        public bool $required = false,
        public ?string $description = null,
    ) {
    }

    public function toArray(): array
    {
        $result = [
            'content' => $this->content->toArray(),
            'required' => $this->required,
        ];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        return $result;
    }
}
