<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    public function category(){

        return $this->belongsTo('App\Categories');
    }

    public function question(){
        return $this->hasMany('App\Question','sub_cat_id');
    }
}
