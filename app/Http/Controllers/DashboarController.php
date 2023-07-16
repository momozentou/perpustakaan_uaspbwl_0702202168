<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Pinjam;
use App\Models\Buku;
use App\Models\Siswa;

class DashboarController extends Controller
{
    public function index(){
        $pinjam = Pinjam::all();
        $buku = Buku::all();
        $siswa = Siswa::all();
        return view('dashboard', [
            'user' => Auth::user()->name,
            'pinjam' => $pinjam,
            'buku' => $buku,
            'siswa' => $siswa
        ]); 
    }
}
