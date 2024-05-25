<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Request;

use EugeneErg\DDD\Application\Requests\HeadersInterface;
use EugeneErg\DDD\Application\Requests\RequestInterface;
use EugeneErg\DDD\Domain\Models\Request\Collections\MapperCallbacks;
use EugeneErg\DDD\Domain\Models\Swagger\RequestBody;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;
use ReflectionClass;
use ReflectionIntersectionType;
use ReflectionNamedType;
use ReflectionParameter;
use ReflectionUnionType;
use Throwable;

readonly class SwaggerRequestCreator
{
    /**
     * @template Request of RequestInterface
     * @param class-string<Request> $requestClass
     * @return array{}
     */
    public function requestFromPsr(string $requestClass): RequestBody
    {
        /** @var RequestInterface $requestClass */
        $reflectionClass = new ReflectionClass($requestClass);
        $docComment = $reflectionClass->getDocComment();

        return new RequestBody(
            $docComment ===  false ? null : $docComment,
            true,
            '',
        );

        $requestClass


        return new $to(
            $this->createHeaders($reflectionClass, $from->getHeaders()),
            $this->createUri($reflectionClass, $from->getUri()),
            $this->createContent($reflectionClass, $from->getBody()),
            $this->createType($reflectionClass, $from->getMethod()),
        );
    }

    /**
     * @template Request of HeadersInterface
     * @param string[][] $from
     * @param class-string<Request> $to
     * @return Request&HeadersInterface
     */
    public function headerFromPsr(array $from, string $to): HeadersInterface
    {
        /** @var HeadersInterface $to */
        $reflectionClass = new ReflectionClass($to);
        $constructor = $reflectionClass->getConstructor();

        if ($constructor === null) {
            return new $to;
        }

        $names = $to::getNames();
        $arguments = [];

        foreach ($constructor->getParameters() as $number => $parameter) {
            $arguments[] = $this->createArgument(
                $parameter,
                $from,
                $names[$parameter->getName()] ?? $names[$number] ?? null,
            );
        }

        return new $to(...$arguments);
    }

    /**
     * @param string[][] $headers
     */
    private function createHeaders(ReflectionClass $reflectionClass, array $headers): ?HeadersInterface
    {
        $reflectionMethod = $reflectionClass->getMethod('getHeaders');
        $returnType = $reflectionMethod->getReturnType();

        if ($returnType === null) {
            return null;
        }

        if ($returnType instanceof ReflectionNamedType) {
            return $this->headerFromPsr($headers, $returnType->getName());
        }

        if ($returnType instanceof ReflectionIntersectionType || $returnType instanceof ReflectionUnionType) {
            foreach ($returnType->getTypes() as $returnSubType) {
                try {
                    return $this->headerFromPsr($headers, $returnSubType->getName());
                } catch (Throwable) {
                    //nothing
                }
            }

            return null;
        }

        return null;
    }

    private function createArgument(ReflectionParameter $parameter, array $headers, ?string $name): mixed
    {
        $type = $parameter->getType();
        $hasDefault = $parameter->isDefaultValueAvailable();
        $default = $hasDefault ? $parameter->getDefaultValue() : null;

        if ($type === null) {
            return $headers[$name] ?? $default;
        }

        $nullable = $parameter->allowsNull();
        $parameter->isVariadic()


        if ($type instanceof ReflectionNamedType) {
            match ($type->getName()) {
                'string' => implode('', );

            }
        }
    }
}
