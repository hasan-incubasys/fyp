<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Answers extends Model
{
    //
    public function question(){
        return $this->belongsTo('App\Question');
    }

//    public function get_best_answer($question_id){
//
//        $answers = DB::query('SELECT max(answers.votes) as total_votes
//                              FROM answers
//                              WHERE question_id = '.$question_id.'
//                              GROUP BY question_id');
////        return $this->select('max(answers.votes) as total_votes')
////                    ->where('question_id',$question_id)->get();
//    }
}
