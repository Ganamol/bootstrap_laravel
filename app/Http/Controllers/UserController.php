<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postregister()
   {


          $name=request('name');
          $email=request('email');
          $password=request('password');
          $dob=request('dob');
          $status=request('status');
           $type=request('type');

            User::create([
           'name'=>$name,
           'email'=>$email,
           'password'=>$password,
           'dob'=>$dob,
           'status'=>$status,
           'type'=>$type
           
          ]);
         

    return view('frontend.register');
   }
}
