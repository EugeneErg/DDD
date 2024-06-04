<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Paths;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Callbacks;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\RequestBody;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;
use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;
use EugeneErg\DDD\Domain\Models\Openapi\Securities;
use EugeneErg\DDD\Domain\Models\Openapi\Servers;
use EugeneErg\DDD\Domain\Models\Openapi\Tags;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Id;

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
        public ?Id $operationId = null,
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
        $this->tags = $tags ?? null;
        $this->security = $security ?? new Securities();
        $this->servers = $servers ?? new Servers();
        $this->callbacks = $callbacks ?? new Callbacks();
    }
}