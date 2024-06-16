<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Exceptions;

use RuntimeException;

final class SecuritySchemeNotFoundOpenapiException extends RuntimeException implements OpenapiExceptionInterface
{
    public function __construct(string $message = 'Security scheme not found.')
    {
        parent::__construct($message);
    }
}
