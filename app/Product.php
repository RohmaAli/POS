<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function size()
    {
        return $this->belongsTo('App\Size');
    }
    // public function weights()
    // {
    //     return $this->belongsToMany('App\Weight');
    // }
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
    // public function sales()
    // {
    //     return $this->belongsToMany('App\Sale');
    // }

    public function sales()
    {
        return $this->belongsTo('App\Sale');
    }
    public function weight()
    {
        return $this->belongsTo('App\Weight');
    }
}
