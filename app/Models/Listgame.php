<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listgame extends Model
{
    use HasFactory;
    protected $fillable = ['nama_game', 'icon_game', 'kategori', 'deskripsi', 'total_view'];
}
