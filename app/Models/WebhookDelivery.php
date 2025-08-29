<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebhookDelivery extends Model
{
    protected $fillable = ['endpoint_id', 'event_type', 'payload_json', 'status', 'attempts', 'last_error', 'delivered_at'];

    protected $casts = [
        'payload_json' => 'array',
        'attempts' => 'integer',
        'delivered_at' => 'datetime',
    ];

    public function endpoint(): BelongsTo
    {
        return $this->belongsTo(WebhookEndpoint::class, 'endpoint_id');
    }
}
