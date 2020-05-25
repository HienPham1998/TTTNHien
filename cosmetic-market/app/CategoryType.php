<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    //
     public function subcategory(){
        return $this->hasMany('App\Category');
    }
}
