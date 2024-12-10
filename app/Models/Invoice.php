<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'payment_method',
        'total',
        'cart_id',
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
