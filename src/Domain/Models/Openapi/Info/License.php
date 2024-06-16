<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Info;

final readonly class License
{
    public function __construct(
        public string $name,
        public ?string $url = null,
    ) {
    }

    public function toArray(): array
    {
        $result = [
            'name' => $this->name,
        ];

        if ($this->url !== null) {
            $result['url'] = $this->url;
        }

        return $result;
    }
}
