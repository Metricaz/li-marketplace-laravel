<?php

namespace App\Console\Commands;

use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\api\DefaultApi;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\PartnerType;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsRequest;
use Amazon\ProductAdvertisingAPI\v1\com\amazon\paapi5\v1\SearchItemsResource;
use Amazon\ProductAdvertisingAPI\v1\Configuration;
use App\Models\CategoryTexts;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductInfo;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class UpdateCategoryProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-products';

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
        // dd(Category::all());
        $products = Product::all()->groupBy("category");
        foreach ($products as $key => $value) {
            $category = New Category();
            $category->slug = $key;
            $category->name = ucwords(str_replace('-', ' ', $key));
            $category->save();
            foreach ($value as $key => $product) {
                $product->categories()->sync($category);
                $product->save();
            }
        }

        $products = Product::first();
        $products = Product::all()->groupBy("offer_link");
        foreach ($products as $key => $value) {
            if ($value->count() > 1) {
                $firstProduct = $value->first();
                $categories = new Collection();
                foreach ($value as $key => $product) {
                    $categories->push($product->categories()->first()->id);
                    if ($firstProduct->id !== $product->id) {
                        $product->delete();
                    }
                }
                $firstProduct->categories()->sync($categories);
            }
        }

        return 1;
    }
}
