<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyExpense extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
