<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_url',
        'price',
        'status',
        'sold',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function product_discounts(): HasMany
    {
        return $this->hasMany(Product_discount::class, 'product_id');
    }

    public function user_product_reviews(): HasMany
    {
        return $this->hasMany(User_product_review::class, 'product_id');
    }

    public function cart_items(): HasMany
    {
        return $this->hasMany(Cart_item::class, 'product_id');
    }
}
