<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\AuthorizationCodeFlow;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\ClientCredentialsFlow;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\ImplicitFlow;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\PasswordFlow;

final readonly class Flows
{
    private function __construct(
        public ?ImplicitFlow $implicit = null,
        public ?PasswordFlow $password = null,
        public ?ClientCredentialsFlow $clientCredentials = null,
        public ?AuthorizationCodeFlow $authorizationCode = null,
    ) {
    }

    public static function createImplicit(
        ImplicitFlow $implicit,
        ?PasswordFlow $password,
        ?ClientCredentialsFlow $clientCredentials,
        ?AuthorizationCodeFlow $authorizationCode,
    ): self {
        return new self(
            implicit: $implicit,
            password: $password,
            clientCredentials: $clientCredentials,
            authorizationCode: $authorizationCode,
        );
    }

    public static function createPassword(
        PasswordFlow $password,
        ?ClientCredentialsFlow $clientCredentials,
        ?AuthorizationCodeFlow $authorizationCode,
    ): self {
        return new self(password: $password, clientCredentials: $clientCredentials, authorizationCode: $authorizationCode);
    }

    public static function createClientCredentials(
        ClientCredentialsFlow $clientCredentials,
        ?AuthorizationCodeFlow $authorizationCode
    ): self {
        return new self(clientCredentials: $clientCredentials, authorizationCode: $authorizationCode);
    }

    public static function createAuthorizationCode(AuthorizationCodeFlow $authorizationCode): self
    {
        return new self(authorizationCode: $authorizationCode);
    }
}