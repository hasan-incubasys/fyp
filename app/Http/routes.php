<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('user/login',function(){
        return view('user.login');
    });
    Route::post('user/login','UserController@login');
    Route::get('user/register',function(){
        return view('user.register');
    });
    Route::post('user/register','UserController@store');
    Route::get('category/{id}','CategoryController@show');
    Route::get('category/sub/{id}','SubCategoryController@show');
    Route::get('question/create','QuestionController@create');
    Route::get('question/{id}','QuestionController@show');
    Route::post('question/store','QuestionController@store');


    // Ajax Calls
    Route::get('vote','QuestionController@vote_answer');
    Route::get('get_sub_category_by_cat_id','SubCategoryController@get_sub_category_by_cat_id');
    Route::post('post_answer','QuestionController@post_answer');
    Route::post('search','QuestionController@search');

});
