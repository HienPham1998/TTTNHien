<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    public function billDet(){
        return $this->hasMany("App\BillDetail");
    }
}
