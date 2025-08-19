<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Microsites_contents extends Model
{
    protected $fillable = [
        'microsites_id',
        'link_name',
        'url',
        'mulai',
        'selesai'
    ];

    public function microsites()
    {
        return $this->belongsTo(Users::class, 'microsites_id');
    }
}
