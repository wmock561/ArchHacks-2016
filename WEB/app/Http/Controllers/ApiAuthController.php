<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    public function login(Request $request){
    	$email = $request->input('email');
		$password = $request->input('password');
		if(Auth::attempt(['email' => $email, 'password' => $password])){
			return Auth::user();
		}
    }

    public function register(Request $request){
    	$validator = Validator::make($request->all(), [
           'email' => 'required|email|max:255|unique:users',
           'password' => 'required|min:6',
        ]);
		if($validator->fails()){
			return $validator->errors();
		}
		$user = User::create([
			'email' => $request->input('email'),
			'password' => bcrypt($request->input('password')),
			'token' => bcrypt($request->input('email') . $request->input('password'))
			]);
		return $user;
    }
}
