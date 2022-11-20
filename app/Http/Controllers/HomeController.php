<?php

namespace App\Http\Controllers;

use App\Models\Listgame;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $listgame = Listgame::all();
        $total = $listgame->count();
        return view('home', compact(['listgame', 'total']));
    }
}
