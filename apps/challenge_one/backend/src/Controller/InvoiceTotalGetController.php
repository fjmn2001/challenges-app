<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeOne\Backend\Controller;

use Illuminate\Http\Response;
use Medine\Shared\Application\Find\InvoiceFinder;
use Medine\Shared\Application\Find\InvoiceFinderRequest;

final class InvoiceTotalGetController
{
    private $finder;

    public function __construct(InvoiceFinder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(string $invoiceId): Response
    {
        $invoice = ($this->finder)(new InvoiceFinderRequest($invoiceId));

        return new Response([
            'invoice_total' => $invoice->products->sum('subtotal')
        ]);
    }
}
