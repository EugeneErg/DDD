<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractContentParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Content;

final readonly class ContentParameter extends AbstractContentParameter
{
    public function __construct(
        string $name,
        In $in,
        string $mimeType,
        Content $content,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
    ) {
        parent::__construct(
            $name,
            $in,
            $mimeType,
            $content,
            $description,
            $required,
            $deprecated
        );
    }
}