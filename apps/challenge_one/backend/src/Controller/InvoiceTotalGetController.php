<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeOne\Backend\Controller;

use App\Models\Invoice;
use Illuminate\Http\Response;
use InvalidArgumentException;

final class InvoiceTotalGetController
{
    public function __invoke(string $invoiceId): Response
    {
        $invoice = Invoice::find($invoiceId);

        if(null === $invoice){
            throw new InvalidArgumentException("Invoice $invoiceId does not exists.");
        }

        return new Response([
            'invoice_total' => $invoice->products->sum('subtotal')
        ]);
    }
}
