<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bill extends Model
{
    use SoftDeletes;
    //
    public function billDet(){
        return $this->hasMany("App\BillDetail");
    }
}
