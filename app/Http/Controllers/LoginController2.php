<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
class LoginController2 extends Controller
{
    public function getLogin(){
        return view('login2');
    }
    public function postLogin(Request $request){
        $rule = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $messages = [
            'email.required' => 'Email la truong bat buoc',
            'email.email' => 'Email khong dung dinh dang',
            'password.required' => 'Mat khau la truong bat buoc',
            'password.min' => 'Mat khau phai chua it nhat 8 ky tu',
        ];
        $validator = Validator::make($request->all(), $rule, $messages);
        if ($validator -> fails()){
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ],200);
        }else{
            $email = $request->input('email');
            $password = $request -> input('password');
            if (Auth::attempt(['email' => $email, 'password' => $password], $request->has('remember'))){
                return response()->json([
                    'error' => false,
                    'message' => 'success'
                ], 200);
            }else{
                $errors = new MessageBag(['errorlogin' => 'Email hoac mat khau k dung']);
                return response()->json([
                    'error' => true,
                    'message' => $errors
                ], 200);
            }
        }
    }
}
