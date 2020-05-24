<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    //
     public function categoryType(){
        return $this->hasMany('App\CategoryType');
    }
}
