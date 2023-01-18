<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function storeRegister(UserRequest $request)
    {
        User::create($request->validated());
        return to_route('login')->with(['success' => 'Berhasil Register Silahkan Login']);
    }

    public function storeLogin(LoginRequest $request)
    {
        
        if(Auth::attempt($request->validated())){
            
            return to_route('dashboard');
        }
        
        return back()->with('error', 'password atau email salah');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('login');
    }
}
