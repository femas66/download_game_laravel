<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index() {
        if(Auth::check()) {
            return view('admin.home');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function login() {
        if (Auth::check()) {
            return redirect()->route('homeadmin');
        }
        else {
            return view('admin.login');
        }
    }

    public function actionlogin(Request $request) {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('homeadmin');
        }
        else {
            return back()->withErrors("Username or password is incorrect");
        }
    }

    public function register() {
        $email = "";
        $name = "";
        $password = "admin";
        $data = [
            'email' => $email,
            'name' => $name,
            'password' => Hash::make($password)
        ];
        User::create($data);
        return "berhasil";
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
