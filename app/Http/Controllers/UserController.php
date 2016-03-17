<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Input;
use App\Http\Requests;
use App\User;


class UserController extends Controller
{
    /**
     * User Login
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->get('email'),'password'=>$request->get('password')])){
            $user = Auth::user();
            return redirect('/');
        }else{
            return redirect('user/login');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->get('password'));
        $user = User::create($data);
        if(!$user)
            return null;

        $result = $user->save();
        if(!$result)
            return null;

        if (Input::hasFile('profile_picture'))
        {
            $user_image = Input::file('profile_picture');
            $picture_name = str_replace('/','',bcrypt($user->id)).'.'.$user_image->getClientOriginalExtension();
            $user->profile_picture = $picture_name;
            $image_path = public_path() . '/storage/users/'.md5($user->id).'/images/';

            $target_path = $image_path.$picture_name;
            if (File::exists($target_path)){
                File::delete($target_path);
            }
            $user_image->move($image_path, $target_path);
            if (!File::exists($target_path)){
                $user->delete();
                return null;
            }
        }

        $result = $user->save();
        if(!$result)
            return null;

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return 'view with this user object';
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return 'view with this user and populate fields of user edit page.';
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->get('password'));
        $user = User::update($data);
        if(!$user)
            return null;

        $result = $user->save();
        if(!$result)
            return null;

        if (Input::hasFile('profile_picture'))
        {
            $user_image = Input::file('profile_picture');
            $picture_name = str_replace('/','',bcrypt($user->id)).'.'.$user_image->getClientOriginalExtension();
            $user->profile_picture = $picture_name;
            $image_path = public_path() . '/storage/users/'.md5($user->id).'/images/';

            $target_path = $image_path.$picture_name;
            if (File::exists($target_path)){
                File::delete($target_path);
            }
            $user_image->move($image_path, $target_path);
            if (!File::exists($target_path)){
                $user->delete();
                return null;
            }
        }

        $result = $user->save();
        if(!$result)
            return null;
        return 'redirect to homepage with update user.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
