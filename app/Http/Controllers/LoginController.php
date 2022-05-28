<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    public function index(){
        return view('LoginPage.login');
    }
    public function login(Request $request){
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("/homepage");
         }
         return back();
    }
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
