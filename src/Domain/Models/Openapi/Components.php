<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Callbacks;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Links;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchemas;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Schemas;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;

final readonly class Components
{
    public AbstractSchemas $schemas;
    public Responses $responses;
    public Parameters $parameters;
    public AbstractValues $examples;
    public RequestBodies $requestBodies;
    public Headers $headers;
    public SecuritySchemes $securitySchemes;
    public Links $links;
    public Callbacks $callbacks;

    public function __construct(
        ?AbstractSchemas $schemas = null,
        ?Responses $responses = null,
        ?Parameters $parameters = null,
        ?AbstractValues $examples = null,
        ?RequestBodies $requestBodies = null,
        ?Headers $headers = null,
        ?SecuritySchemes $securitySchemes = null,
        ?Links $links = null,
        ?Callbacks $callbacks = null,
    ) {
        $this->schemas = $schemas ?? new Schemas();
        $this->responses = $responses ?? new Responses();
        $this->parameters = $parameters ?? new Parameters();
        $this->examples = $examples ?? new Values();
        $this->requestBodies = $requestBodies ?? new RequestBodies();
        $this->headers = $headers ?? new Headers();
        $this->securitySchemes = $securitySchemes ?? new SecuritySchemes();
        $this->links = $links ?? new Links();
        $this->callbacks = $callbacks ?? new Callbacks();
    }

    public function toArray(): array
    {
        $result = [];

        if ($this->schemas->items !== []) {
            $result['schemas'] = $this->schemas->toObject();
        }

        if ($this->responses->items !== []) {
            $result['responses'] = $this->responses->toObject($this);
        }

        if ($this->parameters->items !== []) {
            $result['parameters'] = $this->parameters->toObject($this);
        }

        if ($this->examples->items !== []) {
            $result['examples'] = $this->examples->toObject();
        }

        if ($this->requestBodies->items !== []) {
            $result['requestBodies'] = $this->requestBodies->toObject();
        }

        if ($this->headers->items !== []) {
            $result['headers'] = $this->headers->toObject();
        }

        if ($this->securitySchemes->items !== []) {
            $result['securitySchemes'] = $this->securitySchemes->toObject();
        }

        if ($this->links->items !== []) {
            $result['links'] = $this->links->toObject();
        }

        if ($this->callbacks->items !== []) {
            $result['callbacks'] = $this->callbacks->toObject();
        }

        return $result;
    }
}
