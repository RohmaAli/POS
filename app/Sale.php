<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }
    public function customers()
    {
        return $this->belongsTo('App\Customer');
    }
}
