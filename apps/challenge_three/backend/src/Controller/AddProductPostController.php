<?php

declare(strict_types=1);

namespace Medine\Apps\ChallengeThree\Backend\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Medine\Shared\Application\Find\InvoiceFinder;
use Medine\Shared\Application\Find\InvoiceFinderRequest;
use Symfony\Component\HttpFoundation\Response;

final class AddProductPostController
{
    private $finder;

    public function __construct(InvoiceFinder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(Request $request): Response
    {
        $invoice = ($this->finder)(new InvoiceFinderRequest(
            $request->request->get('invoice_id')
        ));

        $product = new Product([
            'name' => $request->request->get('name'),
            'quantity' => $request->request->get('quantity'),
            'price' => $request->request->get('price'),
        ]);

        $invoice->products()->save($product);

        return new Response('', Response::HTTP_CREATED);
    }
}
