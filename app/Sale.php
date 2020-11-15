<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
