<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Login;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
  public function logout(){
        Auth::logout();
        return redirect('/login');
  }
  public function showLogin(){
    $categories = Category::all();
    return view('login', ['categories' => $categories]);
  }
  public function userLogin(Request $req){
    $categories = Category::all();
    //validation
    $validated = $req->validate([
        'email'=>'required',
        'password'=>'required'
    ]);
    //user login attempt
    $emailInput = $req ->email;
    $password = $req->password;
    if(Auth::attempt($validated, true)){
      Auth::user()->user_type;
      return view ('Homepage', ['categories' => $categories]);
    }
  }

  public function showRegistration(){
    $categories = Category::all();
    return view('register', ['categories' => $categories]);
  }
  public function userRegister(Request $req){
    $categories = Category::all();
    $req->validate([
        'name'=>'required|min:5',
        'email'=>'required|unique:users,email',
        'password'=>'required|min:8|alpha_num',
        'confirmUserPass' => 'required|same:password',
        'gender'=>'required',
        'dob'=>'required|before:today|after:01/01/1900',
        'country'=>'required'
    ]);

    $user = new User;
    $user->name = $req->name;
    $user->email = $req->email;
    $user->user_type = "customer";
    $user->password = bcrypt($req->password);
    $user->gender = $req->gender;
    $user->DoB = $req->dob;
    $user->country = $req->country;

    try{
      $user->save();
    } catch(\Exception $e){
      return redirect()->back()->withErrors(['auth' => 'Email already exists']);
    }

    return redirect()->route('login', ['categories' => $categories]);
  }
  public function ProfileDetail(){
    $users = Auth::user();
    $categories = Category::all();
    return view('Profile',['users'=>$users, 'categories' => $categories]);
  }

}
