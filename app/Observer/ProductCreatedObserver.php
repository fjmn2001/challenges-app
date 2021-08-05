<?php

declare(strict_types=1);

namespace App\Observer;

use App\Models\Product;

final class ProductCreatedObserver
{
    public function created(Product $product): void
    {
        $this->updateInvoiceTotal($product);
    }

    private function updateInvoiceTotal(Product $product): void
    {
        $product->invoice->update([
            'total' => $product->invoice->products->sum('subtotal')
        ]);
    }
}
