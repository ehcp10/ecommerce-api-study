<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutboxEvent extends Model
{
    protected $fillable = ['aggregate_type', 'aggregate_id', 'type', 'payload_json', 'published_at'];

    protected $casts = [
        'payload_json' => 'array',
        'published_at' => 'datetime',
    ];
}
