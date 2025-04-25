<?php

namespace App\Http\Controllers;

use App\Helpers\DataLayer;
use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class ProductPageController extends BaseController
{
    public function show($id): View
    {
        $product =  (new Product())->where('sku', $id)->first();
        $categoryText = (new CategoryTexts())->where('category', $product->categories()->first()->slug)->first();

        $similarProducts = Product::whereHas('categories', function($query) use ($product) {
            return $query->where('slug', '=' , $product->categories()->first()->slug);
        })->limit(3)->get();

        $itemView = (new DataLayer())->getViewItemPdp($similarProducts->all(), $product->categories()->first()->name);
        $images = json_decode($product->images, true);

        if (!$images) {
            $images = [];
        }

        return view('newlayout.product.index', [
            'product' => $product,
            'category' => $product->categories()->first()->slug,
            'itemView' => $itemView,
            'categoryText' => $categoryText,
            'similarProducts' => $similarProducts,
            'images' => $images,
        ]);
    }
}
