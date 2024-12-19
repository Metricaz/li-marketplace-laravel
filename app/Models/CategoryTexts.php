<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTexts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category',
        'top_text',
        'bottom_text',
    ];
}
