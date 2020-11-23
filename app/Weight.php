<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    // public function products()
    // {
    //     return $this->belongsToMany('App\Product');
    // }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
