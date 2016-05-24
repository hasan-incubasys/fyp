<?php

namespace App\Http\Controllers;

use App\Answers;
use Illuminate\Http\Request;

use Auth;
use Input;
use App\Http\Requests;
use App\User;
use App\Categories;
use App\Question;

class HomeController extends Controller
{
    public function index(){
        $questions = Question::paginate(5);
        $categories = Categories::all();
        return view('welcome')->with(array('questions'=>$questions,'categories'=>$categories));
    }
}
