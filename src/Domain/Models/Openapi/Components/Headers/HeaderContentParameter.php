<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Headers;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\AbstractHeaderContentParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Content;

final readonly class HeaderContentParameter extends AbstractHeaderContentParameter
{
    public function __construct(
        string $mimeType,
        Content $content,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct(null, $mimeType, $content, $description, $required, $deprecated);
    }
}