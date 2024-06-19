<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractParameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters as DefaultParameters;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Cookie\Cookies;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Cookie\SchemaParameter as CookieSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\Headers;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\SchemaParameter as HeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path\Paths;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path\SchemaParameter as PathSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query\Queries;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query\SchemaParameter as QuerySchemaParameter;

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

    public function toArray(DefaultParameters $parameters): array
    {
        $result = [];
        $defaultParameters = [];

        foreach ($parameters->items as $name => $parameter) {
            if ($parameter->parameter instanceof CustomParameter) {
                $defaultParameters[$parameter->parameter->in->value][$name] = $parameter->parameter->contentParameter;
            } elseif ($parameter->parameter instanceof PathSchemaParameter) {
                $defaultParameters['path'][$name] = $parameter->parameter;
            } elseif ($parameter->parameter instanceof CookieSchemaParameter) {
                $defaultParameters['cookie'][$name] = $parameter->parameter;
            } elseif ($parameter->parameter instanceof QuerySchemaParameter) {
                $defaultParameters['query'][$name] = $parameter->parameter;
            } elseif ($parameter->parameter instanceof HeaderSchemaParameter) {
                $defaultParameters['header'][$name] = $parameter->parameter;
            }
        }

        foreach ($this->items as $type => $parameter) {
            $realType = ['headers' => 'header', 'cookies' => 'cookie', 'paths' => 'path', 'queries' => 'query'][$type];
            $defaultParameter = $defaultParameters[$realType] ?? [];

            foreach ($parameter->items as $name => $item) {
                $searchName = array_search($item, $defaultParameter, true);
                $result[] = $searchName === false
                    ? array_merge($item->toObject(), ['name' => $name, 'in' => $realType])
                    : ['$ref' => '#/components/parameters/' . $searchName];
            }
        }

        return $result;
    }
}
