<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    public function sales()
    {
        return $this->belongsTo('App\Sale')->withPivot('quantity_sold')->withTimestamps();
    }
    public function weight()
    {
        return $this->belongsTo('App\Weight');
    }
    public function size()
    {
        return $this->belongsTo('App\Size');
    }
}
