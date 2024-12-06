<?php

namespace App\Http\Controllers;

use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class CategoryController extends BaseController
{
    public function index($category): View
    {
        $products = (new Product())->where('category', $category)->limit(12)->get();
        $categoryText = (new CategoryTexts())->where('category', $category)->first();

        return view('newlayout.category.index', [
            'products' => $products,
            'categoryText' => $categoryText,
            'category' => $category,
            'productCount' => (new Product())->count(),
            'category_id' => null,
        ]);
    }
}
