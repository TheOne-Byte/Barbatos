<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
  public function showLogin(){
    return view('login');
  }
  public function userLogin(Request $req){
    //validation
    $validated = $req->validate([
        'email'=>'required',
        'password'=>'required'
    ]);
    //user login attempt
    $emailInput = $req ->email;
    $password = $req->password;
    if(Auth::attempt($validated, true)){
        return view ('Homepage');
    }
    return view('Homepage');
  }

  public function showRegistration(){
    return view('register');
  }
  public function userRegister(Request $req){

    $req->validate([
        'name'=>'required|min:5',
        'email'=>'required|unique:users,email',
        'password'=>'required|min:8|alpha_num',
        'gender'=>'required',
        'dob'=>'required|before:today|after:01/01/1900',
        'country'=>'required'
    ]);

    $user = new User;
    $user->name = $req->name;
    $user->email = $req->email;
    $user->user_type = "member";
    $user->password= $req->password;
    $user->gender = $req->gender;
    $user->DoB = $req->dob;
    $user->country = $req->country;
    $user->save();

    return Redirect::to('/login');


  }

}
