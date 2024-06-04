<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractContentParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Content;

abstract readonly class AbstractHeaderContentParameter extends AbstractContentParameter
{
    public function __construct(
        ?string $name,
        string $mimeType,
        Content $content,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct($name, In::Header, $mimeType, $content, $description, $required, $deprecated);
    }
}