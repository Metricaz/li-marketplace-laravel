<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class CategoryController extends BaseController
{
    public function index($category): View
    {
        $products = (new Product())->where('category', $category)->get();

        return view('newlayout.category.index', [
            'products' => $products,
            'productCount' => (new Product())->count(),
            'category_id' => null,
        ]);
    }
}
