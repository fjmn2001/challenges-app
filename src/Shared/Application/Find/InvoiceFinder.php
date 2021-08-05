<?php

declare(strict_types=1);

namespace Medine\Shared\Application\Find;

use App\Models\Invoice;

final class InvoiceFinder
{
    public function __invoke(InvoiceFinderRequest $request): Invoice
    {
        $invoice = Invoice::find($request->id());

        if(null === $invoice){
            throw new InvoiceDoesNotExists($request->id());
        }

        return $invoice;
    }
}
