<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Question extends Model
{
    public function SubCategories(){

        return $this->belongsTo('App\SubCategories');
    }

    public function answers(){
        return $this->hasMany('App\Answers')->orderBy('id','desc');
    }

    public function user(){
        return $this->hasOne('App\User');
    }

    public function best_answer($question_id){
        return DB::select('SELECT a.* FROM answers a INNER JOIN ( SELECT MAX(votes) maxVotes FROM answers ) b ON a.votes = b.maxVotes WHERE a.question_id = '.$question_id);
    }
}
