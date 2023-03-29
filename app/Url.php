<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'url',
        'clicks'
    ];

    public function short()
    {
        return $this->hasOne('App\Short');
    }
}
