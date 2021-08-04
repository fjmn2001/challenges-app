<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeOne\Backend\Controller;

use App\Models\Product;
use Illuminate\Http\Response;
use InvalidArgumentException;

final class InvoiceProductsNameController
{
    public function __invoke(): Response
    {
         $products = Product::whereRaw('price * quantity > 1000000')->pluck('name');

        if(null === $products){
            throw new InvalidArgumentException("Product does not exists.");
        }

        return new Response([
            'products' => $products
        ]);
    }
}
