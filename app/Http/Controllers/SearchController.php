<?php

namespace App\Http\Controllers;

use App\Helpers\RequestUserBrandHelper;
use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class SearchController extends BaseController
{
    public function index(Request $request, $search)
    {
        $products = $this->filter($request, $search);

        if (!$products->count()) {
            return response(view('newlayout.category.index', [
                'products' => $products->appends(request()->query()),
                'categoryText' => null,
                'category' => $search,
                'productCount' => (new Product())->count(),
                'category_id' => null,
                'filterAction' => 'search',
                'userBrand' => (new RequestUserBrandHelper())->getUserBrand($request),
            ]), 404);
        }

        return view('newlayout.category.index', [
            'products' => $products->appends(request()->query()),
            'categoryText' => null,
            'category' => $search,
            'productCount' => (new Product())->count(),
            'category_id' => null,
            'filterAction' => 'search',
            'userBrand' => (new RequestUserBrandHelper())->getUserBrand($request),
        ]);
    }

    private function filter($request, $search)
    {
        $paginationLimit = $request->get('per_page', 12);
        $products = (new Product())->where('name', 'like', '%' . $search . '%');

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