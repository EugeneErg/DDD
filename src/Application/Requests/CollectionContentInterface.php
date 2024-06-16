<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Requests;

interface CollectionContentInterface
{
    public function getItems(): array;
}
