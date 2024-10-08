<?php

namespace App\Http\Controllers;

use Amazon\ProductAdvertisingAPI\v1\ApiException;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\PartnerType;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\ProductAdvertisingAPIClientException;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsResource;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\View\View;


class MarketPlaceController extends BaseController
{
    public function index(): View
    {
        $products = $this->GetAWSItems();

        return view('home', [
            'data' => $products,
            'category_id' => null,
        ]);
    }

    public function getProducts($responseProducts)
    {
        $products = new Collection();

        foreach ($responseProducts as $product) {
            $price = 'Fora de stock';
            if ($product->getOffers() && $product->getOffers()->getListings()[0]->getPrice() !== null) {
                $price = $product->getOffers()->getListings()[0]->getPrice()->getDisplayAmount();
            }
            $products->push(
                [
                    "seller_site" => "aws",
                    "sku" => Str::of($product->getItemInfo()->getTitle()->getDisplayValue())->slug('-'),
                    "name" => $product->getItemInfo()->getTitle()->getDisplayValue(),
                    "price" => $price,
                    "sold_by" => "Amazon",
                    "highlight" =>  "",
                    "category" => "",
                    "category_id" => "",
                    "product_nickname" => "",
                    "full_description" => $product->getItemInfo()->getTitle()->getDisplayValue(),
                    "feature_image" => $product->getImages()->getPrimary()->getMedium()->getUrl(),
                    "images" => [],
                    "locale" => "sao_paulo"
                ]
            );
        }

        return $products;
    }

    public function GetAWSItems()
    {
        $config = new Configuration();
        $config->setAccessKey('');
        $config->setSecretKey('');
        $partnerTag = 'metricaz-20';
        $config->setHost('webservices.amazon.com.br');
        $config->setRegion('us-east-1');

        $apiInstance = new DefaultApi(
            new Client(),
            $config
        );

        $keyword = 'calca jeans';
        $searchIndex = "All";
        $itemCount = 15;
        $offset = 3;
        $properties = 'size';
        // $properties = ["size" => 42];
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
            // SearchItemsResource::ITEM_INFOCONTENT_RATING,
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
        // dd($responseWithHttpInfo);
        dd($responseWithHttpInfo[0]->getSearchResult()->getItems());
        return $this->getProducts($responseWithHttpInfo[0]->getSearchResult()->getItems());
    }

    function searchItemsWithHttpInfo()
    {
        $config = new Configuration();

        /*
         * Add your credentials
         */
        # Please add your access key here
        $config->setAccessKey('');
        # Please add your secret key here
        $config->setSecretKey('');

        # Please add your partner tag (store/tracking id) here
        $partnerTag = 'metricaz-20';

        /*
         * PAAPI host and region to which you want to send request
         * For more details refer:
         * https://webservices.amazon.com/paapi5/documentation/common-request-parameters.html#host-and-region
         */
        $config->setHost('webservices.amazon.com.br');
        $config->setRegion('us-east-1');

        $apiInstance = new DefaultApi(
            /*
             * If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
             * This is optional, `GuzzleHttp\Client` will be used as default.
             */
            new Client(),
            $config
        );

        # Request initialization

        # Specify keywords
        $keyword = 'Harry Potter';

        /*
         * Specify the category in which search request is to be made
         * For more details, refer:
         * https://webservices.amazon.com/paapi5/documentation/use-cases/organization-of-items-on-amazon/search-index.html
         */
        $searchIndex = "All";

        # Specify item count to be returned in search result
        $itemCount = 1;

        /*
         * Choose resources you want from SearchItemsResource enum
         * For more details, refer:
         * https://webservices.amazon.com/paapi5/documentation/search-items.html#resources-parameter
         */
        $resources = [
            SearchItemsResource::ITEM_INFOTITLE,
            SearchItemsResource::OFFERSLISTINGSPRICE];

        # Forming the request
        $searchItemsRequest = new SearchItemsRequest();
        $searchItemsRequest->setSearchIndex($searchIndex);
        $searchItemsRequest->setKeywords($keyword);
        $searchItemsRequest->setItemCount($itemCount);
        $searchItemsRequest->setPartnerTag($partnerTag);
        $searchItemsRequest->setPartnerType(PartnerType::ASSOCIATES);
        $searchItemsRequest->setResources($resources);

        # Validating request
        $invalidPropertyList = $searchItemsRequest->listInvalidProperties();
        $length = count($invalidPropertyList);
        if ($length > 0) {
            echo "Error forming the request", PHP_EOL;
            foreach ($invalidPropertyList as $invalidProperty) {
                echo $invalidProperty, PHP_EOL;
            }
            return;
        }

        # Sending the request
        try {
            $responseWithHttpInfo = $apiInstance->searchItemsWithHttpInfo($searchItemsRequest);

            dd($responseWithHttpInfo);
            echo 'API called successfully', PHP_EOL;
            echo 'Complete Response dump: ';
            var_dump($responseWithHttpInfo);
            echo "HTTP Info: ";
            var_dump($responseWithHttpInfo[2]);

            # Parsing the response
            $response = $responseWithHttpInfo[0];
            if ($response->getSearchResult() !== null) {
                echo 'Printing first item information in SearchResult:', PHP_EOL;
                $item = $response->getSearchResult()->getItems()[0];
                if ($item !== null) {
                    if ($item->getASIN() !== null) {
                        echo "ASIN: ", $item->getASIN(), PHP_EOL;
                    }
                    if ($item->getDetailPageURL() !== null) {
                        echo "DetailPageURL: ", $item->getDetailPageURL(), PHP_EOL;
                    }
                    if ($item->getItemInfo() !== null
                        and $item->getItemInfo()->getTitle() !== null
                        and $item->getItemInfo()->getTitle()->getDisplayValue() !== null) {
                        echo "Title: ", $item->getItemInfo()->getTitle()->getDisplayValue(), PHP_EOL;
                    }
                    if ($item->getOffers() !== null
                        and $item->getOffers() !== null
                        and $item->getOffers()->getListings() !== null
                        and $item->getOffers()->getListings()[0]->getPrice() !== null
                        and $item->getOffers()->getListings()[0]->getPrice()->getDisplayAmount() !== null) {
                        echo "Buying price: ", $item->getOffers()->getListings()[0]->getPrice()
                            ->getDisplayAmount(), PHP_EOL;
                    }
                }
            }
            if ($response->getErrors() !== null) {
                echo PHP_EOL, 'Printing Errors:', PHP_EOL, 'Printing first error object from list of errors', PHP_EOL;
                echo 'Error code: ', $response->getErrors()[0]->getCode(), PHP_EOL;
                echo 'Error message: ', $response->getErrors()[0]->getMessage(), PHP_EOL;
            }
        } catch (ApiException $exception) {
            echo "Error calling PA-API 5.0!", PHP_EOL;
            echo "HTTP Status Code: ", $exception->getCode(), PHP_EOL;
            echo "Error Message: ", $exception->getMessage(), PHP_EOL;
            if ($exception->getResponseObject() instanceof ProductAdvertisingAPIClientException) {
                $errors = $exception->getResponseObject()->getErrors();
                foreach ($errors as $error) {
                    echo "Error Type: ", $error->getCode(), PHP_EOL;
                    echo "Error Message: ", $error->getMessage(), PHP_EOL;
                }
            } else {
                echo "Error response body: ", $exception->getResponseBody(), PHP_EOL;
            }
        } catch (Exception $exception) {
            echo "Error Message: ", $exception->getMessage(), PHP_EOL;
        }
    }
}
