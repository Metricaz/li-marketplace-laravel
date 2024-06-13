<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Support\Collection;
use App\Models\ProductMock;

class MarketPlaceController extends BaseController
{
    public function index(): View
    {
        $products = (new ProductMock())->returnData();

        return view('home', [
            'data' => $products,
            'category_id' => null,
        ]);
    }
}
