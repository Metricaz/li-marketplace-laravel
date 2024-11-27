<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use App\Models\Product;

class ProductPageController extends BaseController
{
    public function show($id): View
    {
        return view('newlayout.product.index', [
            'product' => (new Product())->find($id),
        ]);
    }
}
