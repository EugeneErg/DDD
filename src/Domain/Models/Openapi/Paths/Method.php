<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Paths;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Callbacks;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\RequestBody;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;
use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;
use EugeneErg\DDD\Domain\Models\Openapi\Securities;
use EugeneErg\DDD\Domain\Models\Openapi\Servers;
use EugeneErg\DDD\Domain\Models\Openapi\Tags;

final readonly class Method
{
    public Parameters $parameters;
    public Tags $tags;
    public Securities $security;
    public Servers $servers;
    public Callbacks $callbacks;

    public function __construct(
        public Responses $responses,
        public ?string $summary = null,
        public ?string $description = null,
        public ?string $operationId = null,
        public bool $deprecated = false,
        ?Parameters $parameters = null,
        public ?RequestBody $requestBody = null,
        ?Tags $tags = null,
        ?Securities $security = null,
        ?Servers $servers = null,
        ?Callbacks $callbacks = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
        $this->parameters = $parameters ?? new Parameters();
        $this->tags = $tags ?? new Tags();
        $this->security = $security ?? new Securities();
        $this->servers = $servers ?? new Servers();
        $this->callbacks = $callbacks ?? new Callbacks();
    }

    /**
     * @return array{
     *     responses: array{},
     *     summary?: string,
     *     description?: string,
     *     operationId?: string,
     *     deprecated?: true,
     *     parameters?: array{},
     *     requestBody?: array{},
     *     tags?: array{},
     *     security?: array{},
     *     servers?: array{},
     *     callbacks?: array{},
     *     externalDocs?: array{},
     * }
     */
    public function toArray(Components $components): array
    {
        $result = [
            'responses' => $this->responses->toArray(),
        ];

        if ($this->summary !== null) {
            $result['summary'] = $this->summary;
        }

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if ($this->operationId !== null) {
            $result['operationId'] = $this->operationId;
        }

        if ($this->deprecated) {
            $result['deprecated'] = $this->deprecated;
        }

        if ($this->parameters->items !== []) {
            $result['parameters'] = $this->parameters->toArray();
        }

        if ($this->requestBody !== null) {
            $result['requestBody'] = $this->requestBody->toArray();
        }

        if ($this->tags->items !== []) {
            $result['tags'] = $this->tags->toArray();
        }

        if ($this->security->items !== []) {
            $result['security'] = $this->security->toArray($components->securitySchemes);
        }

        if ($this->servers->items !== []) {
            $result['servers'] = $this->servers->toArray();
        }

        if ($this->callbacks->items !== []) {
            $result['callbacks'] = $this->callbacks->toArray();
        }

        if ($this->externalDocs !== null) {
            $result['externalDocs'] = $this->externalDocs->toArray();
        }

        return $result;
    }
}
