<?php

namespace App\Http\Controllers;

use App\Helpers\DataLayer;
use App\Helpers\RequestUserBrandHelper;
use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class CategoryController extends BaseController
{
    public function index(Request $request, $category): View
    {
        $products = $this->filter($request, $category);
        $categoryText = (new CategoryTexts())->where('category', $category)->first();
        $itemViewList = (new DataLayer())->getItemViewList($products->all(), $category);

        return view('newlayout.category.index', [
            'products' => $products->appends(request()->query()),
            'categoryText' => $categoryText,
            'itemViewList' => $itemViewList,
            'category' => $category,
            'productCount' => (new Product())->count(),
            'category_id' => null,
            'filterAction' => 'category',
            'userBrand' => (new RequestUserBrandHelper())->getUserBrand($request),
        ]);
    }

    private function filter($request, $category)
    {
        $paginationLimit = $request->get('per_page', 12);
        $products = Product::whereHas('categories', function($query) use ($category) {
            return $query->where('slug', '=' , $category);
        });

        if ($request->has('size') || $request->has('brand') || $request->has('color')) {
            $products->join(
                'product_infos',
                'products.id',
                '=',
                'product_infos.product_id'
            );
        }

        if ($request->has('size') && $request->get('size')) {
            $products->where('product_infos.size', $request->get('size'));
        }

        if ($request->has('brand') && $request->get('brand')[0]) {
            $products->whereIn('product_infos.brand', $request->get('brand'));
        }

        if ($request->has('color')) {
            $products->whereIn('product_infos.color', $request->get('color'));
        }

        if ($request->has('maxPrice')) {
            $products->where('price', '<', str_replace('.', '', $request->get('maxPrice')));
        }

        if ($request->has('minPrice')) {
            $products->where('price', '>', str_replace('.', '', $request->get('minPrice')));
        }

        if ($request->has('order_by') && $request->get('order_by')) {
            $products->orderBy('price', $request->get('order_by'));
        }

        return $products->paginate($paginationLimit);
    }
}
