<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Product','product_saler', 'product_id', 'saler_id')->withPivot('discount', 'unit_price', 'quantity', 'description', 'image', 'ingredient', 'manufacturing_date', 'expiry_date')->withTimestamps();;
    }
}
