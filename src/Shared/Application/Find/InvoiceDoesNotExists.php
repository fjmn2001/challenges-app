<?php

declare(strict_types=1);

namespace Medine\Shared\Application\Find;

final class InvoiceDoesNotExists extends \InvalidArgumentException
{

    public function __construct(string $id)
    {
        parent::__construct("Invoice $id does not exists.");
    }
}
