<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalerDetail extends Model
{
        public function products(){
        return $this.belongsToMany('App\Product');
    }
}
