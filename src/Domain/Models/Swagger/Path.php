<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Path
{
    public Strings $tags;
    public Parameters $parameters;

    public function __construct(
        public ?string $summary = null,
        public ?string $description = null,
        public ?string $operationId = null,
        ?Strings $tags = null,
        ?Parameters $parameters = null,
        public ?RequestBody $requestBody = null,
        //$responses
        //$callbacks
        public bool $deprecated = false,
        //$security
        //$servers
        //$externalDocs
    ) {
        $this->tags = $tags ?? new Strings();
        $this->parameters = $parameters ?? new Parameters();
    }
}