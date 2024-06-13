<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractContentParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\CookieSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\AbstractHeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query\SchemaParameter as QuerySchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractConditionSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractEnumSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\Scope;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Scheme;
use EugeneErg\DDD\Domain\Models\Openapi\Paths\Method;
use EugeneErg\DDD\Domain\Models\Openapi\Tags\Tag;
use EugeneErg\DDD\Domain\Models\Openapi\Securities\SecuritySchemes;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\AbstractSecurityScheme;
use StringBackedEnum;

final readonly class Builder
{
    private function parametersToArray(Components\Parameters $parameters): array
    {
        $result = [];

        foreach ($parameters->items as $parameter) {
            $result[] = $this->parameterToArray($parameter);
        }

        return $result;
    }

    private function parameterToArray(Components\Parameters\Abstract\AbstractParameter $parameter): array
    {
        $result = [
            'in' => $parameter->in->value,
        ];

        if ($parameter->description !== null) {
            $result['description'] = $parameter->description;
        }

        if ($parameter->name !== null) {
            $result['name'] = $parameter->name;
        }

        if ($parameter->deprecated) {
            $result['deprecated'] = $parameter->deprecated;
        }

        if ($parameter->required) {
            $result['required'] = $parameter->required;
        }

        if ($parameter instanceof AbstractContentParameter) {
            $result = array_replace($result, $this->contentParameterToArray($parameter));
        } elseif ($parameter instanceof AbstractSchemaParameter) {
            $result = array_replace($result, $this->schemaParameterToArray($parameter));
        }

        return $result;
    }

    private function contentParameterToArray(AbstractContentParameter $parameter): array
    {
        return [
            'mimeType' => $parameter->mimeType,
            'content' => $this->contentToArray($parameter->content),
        ];
    }

    private function schemaParameterToArray(AbstractSchemaParameter $parameter): array
    {
        $result = [
            'schema' => $this->schemeToArray($parameter->schema),
            'explode' => $parameter->explode,
        ];

        if ($parameter->examples instanceof AbstractValue) {
            $result['example'] = $this->valueToArray($parameter->examples);
        } elseif ($parameter->examples->items !== []) {
            $result['examples'] = $this->valuesToArray($parameter->examples);
        }

        if ($parameter instanceof AbstractHeaderSchemaParameter) {
            $result = array_replace($result, $this->headerSchemaParameterToArray($parameter));
        } elseif ($parameter instanceof CookieSchemaParameter) {
            $result = array_replace($result, $this->cookieSchemaParameterToArray($parameter));
        } elseif ($parameter instanceof QuerySchemaParameter) {
            $result = array_replace($result, $this->querySchemaParameterToArray($parameter));
        } elseif ($parameter instanceof CookieSchemaParameter) {
            $result = array_replace($result, $this->pathSchemaParameterToArray($parameter));
        }

        return $result;
    }

    private function schemeToArray(Components\Schemas\Abstract\AbstractSchema $schema): array
    {
        $result = [];

        if ($schema->deprecated) {
            $result['deprecated'] = $schema->deprecated;
        }

        if ($schema->nullable) {
            $result['nullable'] = $schema->nullable;
        }

        if ($schema->title !== null) {
            $result['title'] = $schema->title;
        }

        if ($schema->access !== null) {
            $result[$schema->access->value] = true;
        }

        if ($schema->description !== null) {
            $result['description'] = $schema->description;
        }

        if ($schema->type !== null) {
            $result['type'] = $schema->type;
        }

        if ($schema->xml !== null) {
            $result['xml'] = $this->xmlToArray($schema->xml);
        }

        if ($schema->externalDocs !== null) {
            $result['externalDocs'] = $this->externalDocsToArray($schema->externalDocs);
        }

        if ($schema instanceof AbstractEnumSchema) {
            $result = array_replace($result, $this->enumSchemaToArray($schema));
        } elseif ($schema instanceof AbstractConditionSchema) {
            $result = array_replace($result, $this->conditionSchemaToArray($schema));
        }

        return $result;
    }

    private function contentToArray(Components\RequestBodies\Content $content): array
    {
        $result = ['schema' => $this->schemeToArray($content->schema)];

        if ($content->examples instanceof AbstractValue) {
            $result['example'] = $this->valueToArray($content->examples);
        } elseif ($content->examples->items !== []) {
            $result['examples'] = $this->valuesToArray($content->examples);
        }

        if ($content->encoding->items !== []) {
            $result['encoding'] = $this->encodingToArray($content->encoding);
        }

        return $result;
    }

    private function responsesToArray(Components\Responses $responses): array
    {
    }

    private function requestBodyToArray(Components\RequestBodies\RequestBody $requestBody): array
    {
    }

    private function callbacksToArray(Components\Callbacks $callbacks): array
    {
    }

    private function stringBackedEnumToArray(StringBackedEnum $enum): array
    {
    }

    private function stringsToArray(Components\Schemas\String\Strings|StringBackedEnum $enum): array
    {
    }

    private function variablesToArray(Components\Links\Link\Variables $variables): array
    {
    }

    private function valueToArray(Components\Schemas\Untyped\Values|AbstractValue $examples): array
    {
    }

    private function valuesToArray(Components\Schemas\Abstract\AbstractValues $examples): array
    {
    }

    private function headerSchemaParameterToArray(AbstractHeaderSchemaParameter $parameter): array
    {
    }

    private function cookieSchemaParameterToArray(CookieSchemaParameter $parameter): array
    {
    }

    private function querySchemaParameterToArray(QuerySchemaParameter $parameter): array
    {
    }

    private function pathSchemaParameterToArray(CookieSchemaParameter $parameter): array
    {
    }

    private function xmlToArray(Components\Schemas\Abstract\Xml $xml): array
    {
    }

    private function enumSchemaToArray(AbstractEnumSchema $schema): array
    {
    }

    private function conditionSchemaToArray(AbstractConditionSchema $schema): array
    {
    }
}