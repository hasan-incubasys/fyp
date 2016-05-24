<?php

namespace App\Http\Controllers;

use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests;

class SubCategoryController extends Controller
{

    public function show($id){
        $categories = Categories::all();
        $sub_category = SubCategories::find($id);


        return view('SubCategory.show',compact('categories','sub_category'));
    }

    public function get_sub_category_by_cat_id(){
        $input = Input::all();

        $sub_category = SubCategories::where('cat_id',$input['cat_id'])->get();

        return $sub_category;
    }
}
