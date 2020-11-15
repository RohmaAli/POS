<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sizes()
    {
        return $this->hasMany('App\Size');
    }
    public function weights()
    {
        return $this->hasMany('App\Weight');
    }
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
    public function sales()
    {
        return $this->belongsToMany('App\Sale');
    }
}
