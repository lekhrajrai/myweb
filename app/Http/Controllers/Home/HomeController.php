<?php

namespace App\Http\Controllers\Home;


use App\Register;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function login(){
    	return view('pages.login');
    }
    
    public function loginModal(){
    	return view('modal.login');
    }


    //register signup

    public function registerModal(){
        return view('modal.register');
    }

    public function register(){
    	return view('pages.register');
    }

    public function signup(Request $request){



       //dd($request->all());

        $register = new User();
        
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = bcrypt($request->password);

        $register->save();
        return $register;
    }
    public function login1(Request $request)
    {
        // dd($request->all());
        $user = User::where('email',$request->email)->where('password',$request->password)->first();

             return view('pages.about');
    }


}
