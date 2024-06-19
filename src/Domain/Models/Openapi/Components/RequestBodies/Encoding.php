<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

final readonly class Encoding
{
    public Headers $headers;

    public function __construct(
        public ?string $contentType = null,
        public bool $explode = true,
        public bool $allowReserved = false,
        public EncodingStyle $style = EncodingStyle::Form,
        ?Headers $headers = null,
    ) {
        $this->headers = $headers ?? new Headers();
    }

    public function toArray(Headers $headers): array
    {
        $result = [
            'explode' => $this->explode,
            'allowReserved' => $this->allowReserved,
            'style' => $this->style->value,
        ];

        if ($this->contentType !== null) {
            $result['contentType'] = $this->contentType;
        }

        if ($this->headers->items !== []) {
            $result['headers'] = $this->headers->toArray($headers);
        }

        return $result;
    }
}
