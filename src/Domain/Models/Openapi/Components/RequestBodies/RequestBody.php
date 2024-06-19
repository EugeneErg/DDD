<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

final readonly class RequestBody
{
    public function __construct(
        public Contents $content,
        public bool $required = false,
        public ?string $description = null,
    ) {
    }

    /**
     * @return array{
     *     content: array{},
     *     required: bool,
     *     description?: string,
     * }
     */
    public function toArray(Headers $headers): array
    {
        $result = [
            'content' => $this->content->toArray($headers),
            'required' => $this->required,
        ];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        return $result;
    }
}
