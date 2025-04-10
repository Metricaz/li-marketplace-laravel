<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

class DataLayer
{
    public function getItemViewList(Array $products, String $category)
    {
        $itemList = new Collection();

        foreach ($products as $key => $product) {
            $itemList->push(
                [
                    'item_list_name' => $product->name,
                    'item_id' => $product->id,
                    'item_name' => $product->name,
                    'item_brand' => $product->sold_by,
                    'item_category' => $category,
                    'item_variant' => $product->name,
                    'price' => $product->price,
                    'index' => $key
                ]
            );
        }

        return $itemList;
    }


    public function getViewItemPdp(Array $products, String $category)
    {
        $itemList = new Collection();

        foreach ($products as $key => $product) {
            $itemList->push(
                [
                    'item_id' => $product->id,
                    'item_name' => $product->name,
                    'item_brand' => $product->sold_by,
                    'item_category' => $category,
                    'item_variant' => $product->name,
                    'price' => $product->price,
                ]
            );
        }

        return $itemList;
    }
}