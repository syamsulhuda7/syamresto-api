<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'discount_value',
        'code',
        'discount_start',
        'discount_finish',
    ];

    public function product_discounts(): HasMany
    {
        return $this->hasMany(Product_discount::class, 'discount_id');
    }
}
