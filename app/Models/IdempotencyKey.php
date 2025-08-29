<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdempotencyKey extends Model
{
    protected $fillable = ['key', 'request_fingerprint', 'response_code', 'response_body', 'recover_until'];

    protected $casts = [
        'response_code' => 'integer',
        'response_body' => 'array',
        'recover_until' => 'datetime',
    ];
}
