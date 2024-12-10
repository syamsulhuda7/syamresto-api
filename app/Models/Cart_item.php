<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart_item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'quantity',
        'note',
        'total_price',
        'product_id',
        'cart_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
