<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{

    public function adminlogin()
   {
    return view('frontend.admin_login');
   }
 public function dologin(Request $request)
     {

       
        $credentials = $request->only('email', 'password');

         if (Auth::guard('admin')->attempt($credentials)){ 
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


