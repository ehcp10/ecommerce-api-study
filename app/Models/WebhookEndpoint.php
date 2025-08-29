<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WebhookEndpoint extends Model
{
    protected $fillable = ['url', 'secret', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function deliveries(): HasMany
    {
        return $this->hasMany(WebhookDelivery::class, 'endpoint_id');
    }
}
