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
        return $this->belongsToMany('App\Saler')->withPivot('discount', 'unit_price', 'quantity', 'description', 'image', 'ingredient', 'manufacturing_date', 'expiry_date')->withTimestamps();;
    }
}
