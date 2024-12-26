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
        $similarProducts = (new Product())->where('category', $product->category)->limit(3)->get();
        $images = json_decode($product->images, true);

        if (!$images) {
            $images = [];
        }

        return view('newlayout.product.index', [
            'product' => $product,
            'categoryText' => $categoryText,
            'similarProducts' => $similarProducts,
            'images' => $images,
        ]);
    }
}
