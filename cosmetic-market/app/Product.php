<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function salers()
    {
        return $this->belongsTo('App\Saler');
    }
    public function bill(){
        return $this->hasMany('App\BillDetail');
    }
}
