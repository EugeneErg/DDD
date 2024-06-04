<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Paths\Path;

final readonly class Paths
{
    public function __construct(
        public ?Path $get = null,
        public ?Path $put = null,
        public ?Path $post = null,
        public ?Path $delete = null,
        public ?Path $options = null,
        public ?Path $head = null,
        public ?Path $patch = null,
        public ?Path $trace = null,
        public ?Servers $servers = null,
        public ?Parameters $parameters = null,
    ) {
    }
}