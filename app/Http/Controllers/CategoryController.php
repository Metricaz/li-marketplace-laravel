<?php

namespace App\Http\Controllers;

use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function index(Request $request, $category): View
    {
        $products = $this->filter($request, $category);
        $categoryText = (new CategoryTexts())->where('category', $category)->first();

        return view('newlayout.category.index', [
            'products' => $products->appends(request()->query()),
            'categoryText' => $categoryText,
            'category' => $category,
            'productCount' => (new Product())->count(),
            'category_id' => null,
        ]);
    }

    private function filter($request, $category)
    {
        $paginationLimit = $request->get('per_page', 12);
        $products = (new Product())->where('category', $category);

        if ($request->has('size') || $request->has('brand') || $request->has('color')) {
            $products->join(
                'product_infos',
                'products.id',
                '=',
                'product_infos.product_id'
            );
        }

        if ($request->has('size')) {
            $products->whereIn('product_infos.size', $request->get('size'));
        }

        if ($request->has('brand')) {
            $products->whereIn('product_infos.brand', $request->get('brand'));
        }

        if ($request->has('color')) {
            $products->whereIn('product_infos.color', $request->get('color'));
        }

        $products->where('price', '>', '0');

        if ($request->has('order_by')) {
            $products->orderBy('price', $request->get('order_by'));
        }

        return $products->paginate($paginationLimit);
    }
}
