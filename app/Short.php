<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Short extends Model
{
    protected $fillable = [
        'short'
    ];

    public function url()
    {
        return $this->belongsTo('App\Url');
    }
}
