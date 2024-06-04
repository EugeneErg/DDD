<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Links;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Contents;

final readonly class Response
{
    public Headers $headers;
    public Contents $content;
    public Links $links;

    public function __construct(
        public string $description,
        ?Headers $headers = null,
        ?Contents $content = null,
        ?Links $links = null,
    ) {
        $this->headers = $headers ?? new Headers();
        $this->content = $content ?? new Contents();
        $this->links = $links ?? new Links();
    }
}