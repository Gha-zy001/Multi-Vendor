<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function getLogin(){  
    return view('frontend.pages.auth.login');
  }
  public function Login(Request $request){  
    $remember_me = $request->has('remember_me') ? true : false;
    if (auth()->guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
        return redirect()->route('store.home');
    }
    return redirect()->route('store.login')->with('error', 'Invalid email or password');
  }
}
