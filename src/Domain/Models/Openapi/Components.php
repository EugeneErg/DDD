<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Callbacks;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Links;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;

final readonly class Components
{
    public Schemas $schemas;
    public Responses $responses;
    public Parameters $parameters;
    public RequestBodies\Examples $examples;
    public RequestBodies $requestBodies;
    public Headers $headers;
    public SecuritySchemes $securitySchemes;
    public Links $links;
    public Callbacks $callbacks;

    public function __construct(
        ?Schemas $schemas = null,
        ?Responses $responses = null,
        ?Parameters $parameters = null,
        ?RequestBodies\Examples $examples = null,
        ?RequestBodies $requestBodies = null,
        ?Headers $headers = null,
        ?SecuritySchemes $securitySchemes = null,
        ?Links $links = null,
        ?Callbacks $callbacks = null,
    ) {
        $this->schemas = $schemas ?? new Schemas();
        $this->responses = $responses ?? new Responses();
        $this->parameters = $parameters ?? new Parameters();
        $this->examples = $examples ?? new RequestBodies\Examples();
        $this->requestBodies = $requestBodies ?? new RequestBodies();
        $this->headers = $headers ?? new Headers();
        $this->securitySchemes = $securitySchemes ?? new SecuritySchemes();
        $this->links = $links ?? new Links();
        $this->callbacks = $callbacks ?? new Callbacks();
    }
}