<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Paths;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Parameters;
use EugeneErg\DDD\Domain\Models\Openapi\Servers;

final readonly class Path
{
    /** @var array<string, Method> */
    public array $methods;
    public Servers $servers;
    public Parameters $parameters;

    public function __construct(
        public ?Method $get = null,
        public ?Method $put = null,
        public ?Method $post = null,
        public ?Method $delete = null,
        public ?Method $options = null,
        public ?Method $head = null,
        public ?Method $patch = null,
        public ?Method $trace = null,
        ?Servers $servers = null,
        ?Parameters $parameters = null,
    ) {
        $this->methods = array_filter([
            'get' => $this->get,
            'put' => $this->put,
            'post' => $this->post,
            'delete' => $this->delete,
            'options' => $this->options,
            'head' => $this->head,
            'patch' => $this->patch,
            'trace' => $this->trace,
        ], static fn (?Method $method) => $method !== null);
        $this->servers = $servers ?? new Servers();
        $this->parameters = $parameters ?? new Parameters();
    }

    /**
     * @return array{
     *     get?: array{},
     *     put?: array{},
     *     post?: array{},
     *     delete?: array{},
     *     options?: array{},
     *     head?: array{},
     *     patch?: array{},
     *     trace?: array{},
     *     servers?: array{},
     *     parameters?: array{},
     * }
     */
    public function toArray(Components $components): array
    {
        $result = [];

        foreach ($this->methods as $name => $method) {
            $result[$name] = $method->toArray($components);
        }

        if ($this->servers->items !== []) {
            $result['servers'] = $this->servers->toArray();
        }

        if ($this->parameters->items !== []) {
            $result['parameters'] = $this->parameters->toArray();
        }

        return $result;
    }
}
