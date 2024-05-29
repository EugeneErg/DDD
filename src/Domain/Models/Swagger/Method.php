<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\ExternalDocs;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Array\SwaggerArray;

final readonly class Method
{
    public Strings $tags;
    public Parameters $parameters;
    public Callbacks $callbacks;
    public Security $security;
    public Servers $servers;
    public SwaggerArray $extensions;

    public function __construct(
        public Responses $responses,
        public ?string $summary = null,
        public ?string $description = null,
        public ?string $operationId = null,
        ?Strings $tags = null,
        ?Parameters $parameters = null,
        public ?RequestBody $requestBody = null,
        Callbacks $callbacks = null,
        public bool $deprecated = false,
        ?Security $security = null,
        ?Servers $servers = null,
        public ?ExternalDocs $externalDocs = null,
        ?SwaggerArray $extensions = null,
    ) {
        $this->tags = $tags ?? new Strings();
        $this->parameters = $parameters ?? new Parameters();
        $this->callbacks = $callbacks ?? new Callbacks();
        $this->security = $security ?? new Security();
        $this->servers = $servers ?? new Servers();
        $this->extensions = $extensions ?? new SwaggerArray();
    }
}
