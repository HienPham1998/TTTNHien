<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
    public function products()
    { 
        return $this->belongsToMany('App\Product')->withPivot('discount', 'unit_price', 'quantity', 'description', 'image', 'ingredient', 'manufacturing_date', 'expiry_date')->withTimestamps();
    }
}
