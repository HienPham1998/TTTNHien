<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BillDetail extends Model
{
    use SoftDeletes;
    //
    public function bill(){
        return $this->belongsTo('App\Bill');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
