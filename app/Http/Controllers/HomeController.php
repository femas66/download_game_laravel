<?php

namespace App\Http\Controllers;

use App\Models\Listgame;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $listgame = Listgame::all();
        return view('home', ['$list' => $listgame]);
    }
}
