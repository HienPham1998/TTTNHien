<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bill extends Model
{
    use SoftDeletes;
    //
    public function billDetail(){
        return $this->hasMany("App\BillDetail");
    }
    public function user(){
        return $this->belongsTo("App\User");
    }
}
