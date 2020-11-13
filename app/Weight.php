<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}