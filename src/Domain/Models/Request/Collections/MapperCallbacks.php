<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Request\Collections;

use EugeneErg\DDD\Application\Requests\RequestInterface;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;

readonly class MapperCallbacks
{
    /** @var callable[] */
    public array $items;

    /**
     * @param callable(mixed ...$arguments): RequestInterface ...$callbacks
     */
    public function __construct(callable ...$callbacks)
    {
        $this->items = $callbacks;
    }
}