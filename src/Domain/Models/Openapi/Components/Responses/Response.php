<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Responses;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
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

    /**
     * @return array{
     *     description: string,
     *     headers?: array{},
     *     content?: array{},
     *     links?: array{},
     * }
     */
    public function toArray(Components $components): array
    {
        $result = ['description' => $this->description];

        if ($this->headers->items !== []) {
            $result['headers'] = $this->headers->toArray($components->headers);
        }

        if ($this->content->items !== []) {
            $result['content'] = $this->content->toArray($components->headers);
        }

        if ($this->links->items !== []) {
            $result['links'] = $this->links->toArray();
        }

        return $result;
    }
}
