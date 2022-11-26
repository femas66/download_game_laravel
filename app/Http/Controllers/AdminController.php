<?php

namespace App\Http\Controllers;

use App\Models\Listgame;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index() {
        if(!Auth::check()) {
            return redirect()->route('login');
        }

        $listgame = Listgame::all();
        $total = $listgame->count();
        return view('admin.home', compact(['listgame', 'total']));

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
        $remem = false;

        if($request->remember == 'on') {
            $remem = true;
        }

        if (Auth::attempt($data, $remem)) {
            return redirect()->route('homeadmin');
        }
        else {
            return back()->withErrors("Username / password salah");
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
        return redirect()->route('login')->with('msg', 'Berhasil logout');
    }
}
