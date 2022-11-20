<?php

namespace App\Http\Controllers;

use App\Models\Listgame;
use Illuminate\Http\Request;

class TambahgmController extends Controller
{
    public function index() {
        return view('admin.tambah');
    }

    public function actiontambah(Request $request) {
        $nama_file = time().'.'.$request->icon_game->extension();  
        $request->icon_game->move(public_path('img'), $nama_file);

        $data = [
            'nama_game' => $request->input('nama_game'),
            'icon_game' => $nama_file,
            'kategori' => $request->input('kategori'),
            'deskripsi' => $request->input('deskripsi'),
            'total_view' => $request->input('total_view')
        ];

        Listgame::create($data);

        return redirect()->route('homeadmin')
            ->with('success', 'Berhasil menambahkan ' . $request->input('nama_game'));
    }
}
