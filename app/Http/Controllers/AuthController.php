<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
    	return view ('Auths.login');
    }
    public function postlogin(Request $request){
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('/index');
    	}
    	return redirect('/login');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
