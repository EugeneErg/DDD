<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

final readonly class Openapi
{
    public string $openapi;
    public Components $components;
    public Securities $security;
    public Tags $tags;

    public function __construct(
        public Info $info,
        public Paths $paths,
        ?Components $components = null,
        ?Securities $security = null,
        ?Tags $tags = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
        $this->openapi = '3.0.3';
        $this->components = $components ?? new Components();
        $this->security = $security ?? new Securities();
        $this->tags = $tags ?? new Tags();
    }

    public function toArray(): array
    {
        $result = [
            'openapi' => $this->openapi,
            'info' => $this->info->toArray(),
        ];

        if ($this->externalDocs !== null) {
            $result['externalDocs'] = $this->externalDocs->toArray();
        }

        if ($this->tags->items !== []) {
            $result['tags'] = $this->tags->toArray();
        }

        if ($this->security->items !== []) {
            $result['security'] = $this->security->toArray($this->components->securitySchemes);
        }

        if ($this->paths->items !== []) {
            $result['paths'] = $this->paths->toArray($this->components);
        }

        return $result;
    }
}
