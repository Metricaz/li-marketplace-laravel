<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'seller_site',
        'sku',
        'name',
        'price',
        'sold_by',
        'highlight',
        'category',
        'category_id',
        'product_nickname',
        'full_description',
        'feature_image',
        'offer_link',
        'images',
        'locale',
    ];

    public function info(): HasOne
    {
        return $this->hasOne(ProductInfo::class);
    }
}
