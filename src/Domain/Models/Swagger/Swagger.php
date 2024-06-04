<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\AbstractSchemas;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Null\Schemas;

final readonly class Swagger
{
    public string $version;
    public AbstractSchemas $schemas;
    public Definitions $definitions;
    public Parameters $parameters;
    public Responses $responses;
    public SecurityDefinitions $securityDefinitions;
    public Tags $tags;

    public function __construct(
        public Info $info,
        public Paths $paths,
        public ?string $host = null,
        public string $basePath = '/',
        ?AbstractSchemas $schemas = null,
        ?Definitions $definitions = null,
        ?Parameters $parameters = null,
        ?Responses $responses = null,
        ?SecurityDefinitions $securityDefinitions = null,
        ?Tags $tags = null,
        public ?ExternalDocs $externalDocs = null,
    ) {
        $this->version = '3.0.0';//todo latest version
        $this->schemas = $schemas ?? new Schemas();
        $this->definitions = $definitions ?? new Definitions();
        $this->parameters = $parameters ?? new Parameters();
        $this->responses = $responses ?? new Responses();
        $this->securityDefinitions = $securityDefinitions ?? new SecurityDefinitions();
        $this->tags = $tags ?? new Tags();
    }
}