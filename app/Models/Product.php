<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Events\ProductCreated;

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
        'discount_price',
        'sold_by',
        'highlight',
        'category_id',
        'product_nickname',
        'full_description',
        'feature_image',
        'offer_link',
        'images',
        'locale',
    ];

    protected $dispatchesEvents = [
        'created' => ProductCreated::class,
    ];

    public function info(): HasOne
    {
        return $this->hasOne(ProductInfo::class);
    }

    public function getPriceAttribute($price)
    {
        return number_format($price, 2, ',', '.');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
