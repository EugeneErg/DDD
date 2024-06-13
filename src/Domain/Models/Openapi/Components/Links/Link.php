<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Links;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link\Parameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Servers\Server;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Id;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Ref;

final readonly class Link
{
    public Parameters $parameters;
    public Parameters|Parameter $requestBody;

    public function __construct(
        public Id|Ref $operation,//todo check it
        ?Parameters $parameters = null,
        null|Parameters|Parameter $requestBody = null,
        public ?string $description = null,
        public ?Server $server = null,
    ) {
        $this->parameters = $parameters ?? new Parameters();
        $this->requestBody = $requestBody ?? new Parameters();
    }
}