<?php

namespace App\Http\Controllers;

use App\Models\ProductMock;
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

class MarketPlaceShopeeController extends BaseController
{
    public function index(): View
    {
        $payload = '{"query":"{\n    productOfferV2(){\n        nodes {\n            productName\n            itemId\n            commissionRate\n            commission\n            price\n            sales\n            imageUrl\n            shopName\n            productLink\n            offerLink\n            periodStartTime\n            periodEndTime\n            priceMin\n            priceMax\n            productCatIds\n            ratingStar\n            priceDiscountRate\n            shopId\n            shopType\n            sellerCommissionRate\n            shopeeCommissionRate\n        }\n        pageInfo{\n            page\n            limit\n            hasNextPage\n            scrollId\n        }\n    }\n    }","variables":null}';
        $partnerId = '18390600359';
        $timestamp = Carbon::now()->timestamp;
        $secret = '';

        $factor = $partnerId.$timestamp.$payload.$secret;

        $hash = hash('sha256', $factor);
        $auth = sprintf('SHA256 Credential=%s, Timestamp=%s, Signature=%s', $partnerId, $timestamp, $hash);

        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'authorization' => $auth
        ])->withBody(
            $payload, 'application/json'
        )->post('https://open-api.affiliate.shopee.com.br/graphql');

        $products = $this->getProducts(json_decode($response->body(), true));

        return view('home', [
            'data' => $products,
            'category_id' => null,
        ]);
    }

    public function getProducts($response)
    {
        $products = new Collection();
        $productNode = Arr::get($response, 'data.productOfferV2.nodes');

        foreach ($productNode as $product) {
            $products->push(
                [
                    "seller_site" => "shopee",
                    "sku" => Str::of(Arr::get($product, 'productName'))->slug('-'),
                    "name" => Arr::get($product, 'productName'),
                    "price" => Arr::get($product, 'price'),
                    "sold_by" => Arr::get($product, 'shopName'),
                    "highlight" =>  sprintf('%s+ Vendidos', Arr::get($product, 'sales')),
                    "category" => "",
                    "category_id" => "",
                    "product_nickname" => "",
                    "full_description" => Arr::get($product, 'productName'),
                    "feature_image" => Arr::get($product, 'imageUrl'),
                    "images" => [],
                    "locale" => "sao_paulo"
                ]
            );
        }

        return $products;
    }
}
