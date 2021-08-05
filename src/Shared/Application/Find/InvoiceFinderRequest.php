<?php

declare(strict_types=1);

namespace Medine\Shared\Application\Find;

final class InvoiceFinderRequest
{
    private $id;

    public function __construct(
        string $id
    )
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }
}
