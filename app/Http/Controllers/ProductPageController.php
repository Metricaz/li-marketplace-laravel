<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use App\Models\ProductMock;

class ProductPageController extends BaseController
{
    public function show($id): View
    {
        $products = (new ProductMock())->returnData();

        return view('product_page', [
            'data' => $products,
            'selectedProduct' => $products->firstWhere('sku', $id)
        ]);
    }
}
