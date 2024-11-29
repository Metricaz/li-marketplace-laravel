<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Product;

class GetShopeeProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-shopee-products {--keyword=jeans}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets products from shopee open api';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $keyword = $this->option('keyword');

        $payload = sprintf('{"query":"{\n    productOfferV2(keyword: \\"%s\\"){\n        nodes {\n            productName\n            itemId\n            commissionRate\n            commission\n            price\n            sales\n            imageUrl\n            shopName\n            productLink\n            offerLink\n            periodStartTime\n            periodEndTime\n            priceMin\n            priceMax\n            productCatIds\n            ratingStar\n            priceDiscountRate\n            shopId\n            shopType\n            sellerCommissionRate\n            shopeeCommissionRate\n        }\n        pageInfo{\n            page\n            limit\n            hasNextPage\n            scrollId\n        }\n    }\n    }","variables":null}', $keyword);

        $partnerId = env("SHOPEE_PARTNER_ID");
        $timestamp = Carbon::now()->timestamp;
        $secret = env("SHOPEE_SECRET");

        $factor = $partnerId.$timestamp.$payload.$secret;

        $hash = hash('sha256', $factor);
        $auth = sprintf('SHA256 Credential=%s, Timestamp=%s, Signature=%s', $partnerId, $timestamp, $hash);

        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'authorization' => $auth
        ])->withBody(
            $payload, 'application/json'
        )->post('https://open-api.affiliate.shopee.com.br/graphql');

        $products = $this->getProducts(
            json_decode($response->body(), true),
            $keyword
        );

        foreach ($products as $key => $product) {
            $productModel = (new Product())->fill($product);
            $productModel->save();
        }

        return 1;
    }

    public function getProducts($response, $keyword)
    {
        $products = new Collection();
        $productNode = Arr::get($response, 'data.productOfferV2.nodes');

        foreach ($productNode as $product) {
            $products->push(
                [
                    "seller_site" => "shopee",
                    "sku" => Str::of(Arr::get($product, 'productName'))->slug('-')->toString(),
                    "name" => Arr::get($product, 'productName'),
                    "price" => Arr::get($product, 'price'),
                    "sold_by" => Arr::get($product, 'shopName'),
                    "offer_link" => Arr::get($product, 'offerLink'),
                    "highlight" =>  sprintf('%s+ Vendidos', Arr::get($product, 'sales')),
                    "category" => $keyword,
                    "category_id" => null,
                    "product_nickname" => null,
                    "full_description" => Arr::get($product, 'productName'),
                    "feature_image" => Arr::get($product, 'imageUrl'),
                    "images" => null,
                    "locale" => "sao_paulo"
                ]
            );
        }

        return $products;
    }
}
