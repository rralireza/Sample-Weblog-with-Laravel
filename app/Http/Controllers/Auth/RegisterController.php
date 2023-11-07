<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
       return view('auth.register');
    }

    public function create(RegisterRequest $request)
    {

        $path = $request->file('image')
            ->storeAs('public/images/users', $request->file('image')
            ->getClientOriginalName());

        User::query()->create([
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'), // Make sure you include this line
            'email' => $request->get('email'),
            'phonenumber' => $request->get('phonenumber'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'image' => $path
        ]);


        Session::flash('success' , 'ثبت نام با موفقیت انجام شد.');
        return redirect()->back();
    }
}
