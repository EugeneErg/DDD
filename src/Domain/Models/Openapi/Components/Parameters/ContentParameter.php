<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Content;

final readonly class ContentParameter extends AbstractParameter
{
    public function __construct(
        string $name,
        In $in,
        public string $mimeType,
        public Content $content,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct($name, $in, $description, $required, $deprecated);
    }
}