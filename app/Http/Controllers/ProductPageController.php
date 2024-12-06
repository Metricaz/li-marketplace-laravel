<?php

namespace App\Http\Controllers;

use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class ProductPageController extends BaseController
{
    public function show($id): View
    {
        $product =  (new Product())->find($id);
        $categoryText = (new CategoryTexts())->where('category', $product->category)->first();

        return view('newlayout.product.index', [
            'product' => $product,
            'categoryText' => $categoryText,
        ]);
    }
}
