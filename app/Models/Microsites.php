<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Microsites extends Model
{
    protected $fillable = [
        'redirects_id',
        'micro_name',
        'time',
        'location'
    ];

    public function redirects()
    {
        return $this->belongsTo(Users::class, 'redirects_id');
    }
}
