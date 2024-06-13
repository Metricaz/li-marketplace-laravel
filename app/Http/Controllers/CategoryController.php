<?php

namespace App\Http\Controllers;

use App\Models\ProductMock;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function show($id): View
    {
        $products = (new ProductMock())->returnData()->where("category_id", $id);

        $category = Arr::get($products->first(), 'category');

        return view('category', [
            'data' => $products,
            'category' => $category,
            'category_id' => $id,
        ]);
    }

    public function search($id, Request $request)
    {
        $products = (new ProductMock())->returnData()->where("category_id", $id);

        if ($request->has('locale')) {
            $products = $products->whereIn('locale', $request->get('locale'));
        }

        $category = Arr::get($products->first(), 'category');

        return view('category', [
            'data' => $products,
            'category' => $category,
            'category_id' => $id,
        ]);
    }
}
