<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function saler()
    {
        return $this->belongsTo('App\Saler');
    }
    use SoftDeletes;
    public function bill(){
        return $this->hasMany('App\BillDetail');
    }
}
