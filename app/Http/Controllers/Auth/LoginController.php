<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'username' => ['required' , 'exists:users,username'],
            'password' => ['required']
        ]);

        if ($validator->passes()) {
            if (Auth::attempt(['username' => $request->username , 'password' => $request->password])) {
                return redirect()->route('dashboard');
            }
            else {
                return redirect()->back()->withErrors(['نام کاربری یا رمز عبور اشتباه است.']);
            }
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
