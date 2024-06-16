<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Callbacks;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Links;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Schemas;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;

final readonly class Components
{
    public Schemas $schemas;
    public Responses $responses;
    public Parameters $parameters;
    public AbstractValues $examples;
    public RequestBodies $requestBodies;
    public Parameters\Header\Headers $headers;
    public SecuritySchemes $securitySchemes;
    public Links $links;
    public Callbacks $callbacks;

    public function __construct(
        ?Schemas $schemas = null,
        ?Responses $responses = null,
        ?Parameters $parameters = null,
        ?AbstractValues $examples = null,
        ?RequestBodies $requestBodies = null,
        ?Parameters\Header\Headers $headers = null,
        ?SecuritySchemes $securitySchemes = null,
        ?Links $links = null,
        ?Callbacks $callbacks = null,
    ) {
        $this->schemas = $schemas ?? new Schemas();
        $this->responses = $responses ?? new Responses();
        $this->parameters = $parameters ?? new Parameters();
        $this->examples = $examples ?? new Values();
        $this->requestBodies = $requestBodies ?? new RequestBodies();
        $this->headers = $headers ?? new Parameters\Header\Headers();
        $this->securitySchemes = $securitySchemes ?? new SecuritySchemes();
        $this->links = $links ?? new Links();
        $this->callbacks = $callbacks ?? new Callbacks();
    }

    public function toArray(): array
    {
        $result = [];

        if ($this->schemas->items !== []) {
            $result['schemas'] = $this->schemas->toArray();
        }

        if ($this->responses->items !== []) {
            $result['responses'] = $this->responses->toArray();
        }

        if ($this->parameters->items !== []) {
            $result['parameters'] = $this->parameters->toArray();
        }

        if ($this->examples->items !== []) {
            $result['examples'] = $this->examples->toArray();
        }

        if ($this->requestBodies->items !== []) {
            $result['requestBodies'] = $this->requestBodies->toArray();
        }

        if ($this->headers->items !== []) {
            $result['headers'] = $this->headers->toArray();
        }

        if ($this->securitySchemes->items !== []) {
            $result['securitySchemes'] = $this->securitySchemes->toArray();
        }

        if ($this->links->items !== []) {
            $result['links'] = $this->links->toArray();
        }

        if ($this->callbacks->items !== []) {
            $result['callbacks'] = $this->callbacks->toArray();
        }

        return $result;
    }
}
