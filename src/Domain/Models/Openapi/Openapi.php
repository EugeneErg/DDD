<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

final readonly class Openapi
{
    public string $openapi;
    public Components $components;
    public Securities $security;
    public ?Tags $tags;

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
}