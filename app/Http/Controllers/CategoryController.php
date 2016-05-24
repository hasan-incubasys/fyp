<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{


    public function show($id){
        $categories = Categories::all();
        $category = Categories::find($id);
//        $question = array();
//        foreach($category->SubCategories as $sub_category){
//            $question[$sub_category->id] = $sub_category->question;
//        }
//        dd($question);
        return view('category.show',compact('category','categories'));

    }
}
