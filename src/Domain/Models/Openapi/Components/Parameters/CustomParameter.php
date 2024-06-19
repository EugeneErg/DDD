<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components;

final class CustomParameter
{
    public function __construct(public In $in, public ContentParameter $contentParameter)
    {
    }

    public function toObject(Components $components): object
    {
        return (object) array_merge((array) $this->contentParameter->toObject($components), ['in' => $this->in->value]);
    }
}
