<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
   public function index()
   {
    return view('frontend.index');
   }
     public function login()
   {
    return view('frontend.login');
   }
    
      public function register()
   {
    return view('frontend.register');
   }
    public function dologin(Request $request)
     {

       
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) { 
            $users = User::all();
            $status = $users->first()->status;
            if ($status == 1) {
               
                return redirect()->route('index');
            }
             else {

                return redirect()->route('index');
            }
            // return redirect()->route('index');
        } 
        else {
            return redirect()->route('login')->with('message', 'Login is Invalid');
        }
    }
}
