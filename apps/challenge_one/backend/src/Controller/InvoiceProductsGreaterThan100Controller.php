<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeOne\Backend\Controller;

use App\Models\Invoice;
use Illuminate\Http\Response;
use InvalidArgumentException;

final class InvoiceProductsGreaterThan100Controller
{
    public function __invoke(): Response
    {
        $invoiceId = Invoice::join('products', 'invoices.id', '=', 'products.invoice_id')
                    ->where('products.quantity', '>', '100')
                    ->pluck('invoices.id');

        return new Response([
            'invoice_ids' => $invoiceId
        ]);
    }
}
