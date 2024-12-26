<?php

namespace App\Http\Controllers;

use App\Models\CategoryTexts;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index(Request $request): View
    {
        $products = $this->filter($request);

        return view('newlayout.home.index', [
            'products' => $products->appends(request()->query()),
        ]);
    }

    private function filter($request)
    {
        $paginationLimit = $request->get('per_page', 4);
        $products = new Product();

        if ($request->has('size')) {
            $products
                ->join('product_infos', 'products.id', '=', 'product_infos.product_id')
                ->where('product_infos.size', $request->get('size'));
        }

        return $products->paginate($paginationLimit);
    }
}