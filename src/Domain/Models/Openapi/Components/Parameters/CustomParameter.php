<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

final class CustomParameter
{
    public function __construct(public In $in, public ContentParameter $contentParameter)
    {
    }
}
