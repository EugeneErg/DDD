<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Paths;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Servers;

final readonly class Path
{
    public function __construct(
        public ?Method $get = null,
        public ?Method $put = null,
        public ?Method $post = null,
        public ?Method $delete = null,
        public ?Method $options = null,
        public ?Method $head = null,
        public ?Method $patch = null,
        public ?Method $trace = null,
        public ?Servers $servers = null,
        public ?Parameters $parameters = null,
    ) {
    }
}