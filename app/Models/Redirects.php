<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirects extends Model
{
    protected $fillable = [
        'users_id',
        'uri',
        'redirect',
        'url'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'users_id');
    }
}
