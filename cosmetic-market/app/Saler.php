<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
