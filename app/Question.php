<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function SubCategories(){

        return $this->belongsTo('App\SubCategories');
    }

    public function answers(){
        return $this->hasMany('App\Answers');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
