<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    public function SubCategories(){

        return  $this->hasMany('App\SubCategories','cat_id');
    }
}
