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

class UpdateCategoryProductTexts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-category-text {--category=} {--firstId=} {--lastId=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update texts from products in a specific category';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $category = $this->option('category');
        $lastId = $this->option('lastId');
        $firstId = $this->option('firstId');

        if ($category == "") {
            $this->error("Categoria é uma opção obrigatória.");
            return 1;
        }

        $category = Category::where("slug", $category)->first();

        foreach ($category->products as $product) {
            if ($product->full_description == "[]") {
                $this->info(sprintf("Pulando produto de id: %s por falta de informação", $product->id));
                continue;
            }

            if ($lastId && $firstId && $product->id <= $lastId && $product->id >= $firstId) {
                $this->info(sprintf("Pulando produto de id: %s por skip de id inicial", $product->id));
                continue;
            }

            $this->info(sprintf("Atualizando produto de id: %s.", $product->id));
            $text = $this->createProductText($product->full_description);

            if (!json_validate($text)) {
                $this->error(sprintf("Pulando produto de id: %s, GPT retornou um texto que não é um json valido", $product->id));

                continue;
            }

            $product->full_description = $text;

            $product->save();
            $this->info(sprintf("Atualizado produto de id: %s.", $product->id));
        }
        $this->info("Finalizado.");
        return 1;
    }

    private function createProductText($keyword)
    {
        $data = [
            "title" => "Automatic li-generated",
            "prompt"=> $keyword,
            "type" =>  "product_text"
        ];

        $guzzle = new Client(['base_uri' => env("TEXT_API_URL"), 'verify' => false]);

        $rawResponse = $guzzle->post("/api/text", [
            'headers' => [
                'Authorization' => env("TEXT_API_TOKEN"),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
          'body' => json_encode($data),
        ]);

        $response = $rawResponse->getBody()->getContents();

        $text = Arr::get(json_decode($response, true), 'text');

        $text = str_replace("```json" , "", $text);
        $text = str_replace("```" , "", $text);

        return $text;
    }
}
