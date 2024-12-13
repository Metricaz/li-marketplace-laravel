<?php

namespace App\Console\Commands;

use Amazon\ProductAdvertisingAPI\v1\ApiException;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\PartnerType;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\ProductAdvertisingAPIClientException;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsResource;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use App\Models\Product;
use App\Models\ProductInfo;
use App\Models\CategoryTexts;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class GetAWSProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-aws-products {--keyword=calca-jeans}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets products from aws open api';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $keyword = $this->option('keyword');

        $data = [
            "title" => "Automatic li-generated",
            "prompt"=> $keyword,
            "type" =>  "plp_post"
        ];

        $guzzle = new Client(['base_uri' => env("TEXT_API_URL")]);

        $rawResponse = $guzzle->post("/api/text", [
            'headers' => [
                'Authorization' => env("TEXT_API_TOKEN"),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
          'body' => json_encode($data),
        ]);

        $response = $rawResponse->getBody()->getContents();

        $allText = json_decode(Arr::get(json_decode($response, true), 'text'), true);

        $categoryText = new CategoryTexts();
        $categoryText->category = $keyword;
        $categoryText->top_text = Arr::get($allText, 'pageSummary');
        $categoryText->top_text_title = 'Not implemented yet';
        $categoryText->bottom_text = Arr::get($allText, 'linkTree');
        $categoryText->bottom_text_title = 'Not implemented yet';
        $categoryText->save();

        $config = new Configuration();
        $config->setAccessKey(env("AWS_ACCESS_KEY_ID"));
        $config->setSecretKey(env("AWS_SECRET_ACCESS_KEY"));
        $partnerTag = 'metricaz-20';
        $config->setHost('webservices.amazon.com.br');
        $config->setRegion('us-east-1');

        $apiInstance = new DefaultApi(
            new Client(),
            $config
        );

        $searchIndex = "All";
        $itemCount = 15;
        $offset = 3;
        $properties = 'size';
        $properties = json_encode(["size" => 42]);
        $resources = [
            SearchItemsResource::ITEM_INFOTITLE,
            SearchItemsResource::OFFERSLISTINGSPRICE,
            SearchItemsResource::IMAGESPRIMARYMEDIUM,
            SearchItemsResource::ITEM_INFOCONTENT_RATING,
            SearchItemsResource::IMAGESPRIMARYLARGE,
            SearchItemsResource::OFFERSLISTINGSSAVING_BASIS,
            SearchItemsResource::ITEM_INFOPRODUCT_INFO,
            // SearchItemsResource::ITEM_INFOCLASSIFICATIONS,
            SearchItemsResource::CUSTOMER_REVIEWSSTAR_RATING,
            SearchItemsResource::CUSTOMER_REVIEWSCOUNT,
        ];

        $searchItemsRequest = new SearchItemsRequest();

        // $searchItemsRequest->setProperties($properties);
        // $searchItemsRequest->setItemPage($offset);
        $searchItemsRequest->setSearchIndex($searchIndex);

        $searchItemsRequest->setKeywords($keyword);
        $searchItemsRequest->setItemCount($itemCount);
        $searchItemsRequest->setPartnerTag($partnerTag);
        $searchItemsRequest->setPartnerType(PartnerType::ASSOCIATES);
        $searchItemsRequest->setResources($resources);

        $invalidPropertyList = $searchItemsRequest->listInvalidProperties();
        $length = count($invalidPropertyList);
        if ($length > 0) {
            echo "Error forming the request", PHP_EOL;
            foreach ($invalidPropertyList as $invalidProperty) {
                echo $invalidProperty, PHP_EOL;
            }
            return;
        }

        $responseWithHttpInfo = $apiInstance->searchItemsWithHttpInfo($searchItemsRequest);
        $products = $this->getProducts($responseWithHttpInfo[0]->getSearchResult()->getItems(), $keyword);

        foreach ($products as $key => $product) {
            $productModel = (new Product())->fill($product);
            $productModel->save();

            $productInfo = (new ProductInfo())->fill($product["info"]);
            $productInfo->product_id = $productModel->id;
            $productInfo->save();
        }

        return 1;
    }

    public function getProducts($responseProducts, $keyword)
    {
        $products = new Collection();

        foreach ($responseProducts as $product) {
            $price = null;
            $color = null;
            $size = null;

            if ($product->getOffers() && $product->getOffers()->getListings()[0]->getPrice() !== null) {
                $price = $product->getOffers()->getListings()[0]->getPrice()->getAmount();
            }

            if ($product->getItemInfo()->getProductInfo() && $product->getItemInfo()->getProductInfo()->getColor() !== null) {
                $color = $product->getItemInfo()->getProductInfo()->getColor()->getDisplayValue();
            }

            if ($product->getItemInfo()->getProductInfo() && $product->getItemInfo()->getProductInfo()->getSize() !== null) {
                $size = $product->getItemInfo()->getProductInfo()->getSize()->getDisplayValue();
            }

            $products->push(
                [
                    "seller_site" => "aws",
                    "sku" => Str::of($product->getItemInfo()->getTitle()->getDisplayValue())->slug('-'),
                    "name" => $product->getItemInfo()->getTitle()->getDisplayValue(),
                    "price" => $price,
                    "sold_by" => "Amazon",
                    "offer_link" => "",
                    "highlight" =>  "",
                    "category" => $keyword,
                    "category_id" => null,
                    "product_nickname" => null,
                    "full_description" => $product->getItemInfo()->getTitle()->getDisplayValue(),
                    "feature_image" => $product->getImages()->getPrimary()->getMedium()->getUrl(),
                    "images" => null,
                    "locale" => "sao_paulo",
                    "info" => [
                        "color" => $color,
                        "is_adult_product" => "",
                        "item_dimensions" => "",
                        "release_date" => "",
                        "size" => $size,
                        "unit_count" => "",
                    ],
                ]
            );
        }

        return $products;
    }
}
