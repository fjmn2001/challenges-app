<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeOne\Backend\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

final class ProductsNameGetController
{
    private const DEFAULT_SUBTOTAL = 1000000;

    public function __invoke(Request $request): Response
    {
        $subtotal = $request->request->get('subtotal') ?? self::DEFAULT_SUBTOTAL;
        $productsName = Product::whereRaw('(price * quantity) > ' . $subtotal)->pluck('name');

        return new Response([
            'productsName' => $productsName
        ]);
    }
}
