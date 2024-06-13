<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Content;

abstract readonly class AbstractContentParameter extends AbstractParameter
{
    public function __construct(
        ?string $name,
        In $in,
        public string $mimeType,
        public Content $content,
        ?string $description = null,
        ?bool $required = false,
        ?bool $deprecated = false,
    ) {
        parent::__construct($name, $in, $description, $required, $deprecated);
    }

    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            'mimeType' => $this->mimeType,
            'content' => $this->content->toArray(),
        ]);
    }
}