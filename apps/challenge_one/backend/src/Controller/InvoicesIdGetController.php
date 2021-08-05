<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeOne\Backend\Controller;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

final class InvoicesIdGetController
{
    private const DEFAULT_QUANTITY = 100;

    public function __invoke(Request $request): Response
    {
        $quantity = $request->request->get('quantity') ?? self::DEFAULT_QUANTITY;
        $invoiceId = Invoice::join('products', 'invoices.id', '=', 'products.invoice_id')
            ->where('products.quantity', '>', $quantity)
            ->groupBy('invoices.id')
            ->pluck('invoices.id');

        return new Response([
            'invoice_ids' => $invoiceId
        ]);
    }
}
