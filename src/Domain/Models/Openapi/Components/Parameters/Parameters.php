<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Cookie\Cookies;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\Headers;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path\Paths;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query\Queries;

final readonly class Parameters
{
    /** @var array<int, AbstractParameters> */
    public array $items;
    public Headers $headers;
    public Cookies $cookies;
    public Paths $paths;
    public Queries $queries;

    public function __construct(
        ?Headers $headers = null,
        ?Cookies $cookies = null,
        ?Paths $paths = null,
        ?Queries $queries = null,
    ) {
        $this->headers = $headers ?? new Headers();
        $this->cookies = $cookies ?? new Cookies();
        $this->paths = $paths ?? new Paths();
        $this->queries = $queries ?? new Queries();
        $this->items = array_filter(func_get_args(), static fn (AbstractParameters $item) => $item !== null);
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray();
        }

        return $result;
    }
}
