<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\View\View;
use App\Models\Product;

class MarketPlaceShopeeController extends BaseController
{
    public function index(): View
    {
        $products = (new Product())->all();

        return view('home', [
            'data' => $products,
            'category_id' => null,
        ]);
    }
}
