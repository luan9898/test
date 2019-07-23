<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController1 extends Controller
{
    public function index(){
        $Users = \App\user::all();
        return view('ListUsers',compact('Users'));
    }
    public function delete($id)
    {
        $delete = \App\user::find($id);
        $delete->delete();
        return redirect()->action('UserController1@index');
    }
    public function edit($id)
    {
        $User= \App\user::find($id);
        return view('edit',compact('User'));
    }
    public function update(Request $request,User $User)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);
  
        $User->update($request->all());
        dd($User); 
  
        return redirect()->action('UserController1@index');
    }
    public function search(Request $request)
    {
        $Search = $request->get('search');
        $Users = \App\user::where('username','like','%'.$Search.'%')->get();
        //$Users = \DB::table('users')->where('username','like','%'.$Search.'%')->paginate(5);
        
        //dd($Users);
        return view('ListUsers',compact('Users'));
    }
    public function showpost()
    {
        $Users = \App\user::all();
        return view('post', compact('Users'));
    }
}
