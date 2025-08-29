<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = ['sku', 'name', 'price_cents', 'currency', 'stock'];

    protected $casts = [
        'price_cents' => 'integer',
        'stock' => 'integer',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
