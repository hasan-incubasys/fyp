<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Input;
use App\Http\Requests;
use App\User;


class HomeController extends Controller
{
    public function index(){
        $questions = Question::all();
        $categories = Categories::all();


    }
}
