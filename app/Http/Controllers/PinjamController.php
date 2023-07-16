<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Http\Requests\StorePinjamRequest;
use App\Http\Requests\UpdatePinjamRequest;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pinjam::create([
            'buku_id' => $request->judul,
            'siswa_id' => $request->nama,
            'tanggal_kembali' => $request->tgl_kembali
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePinjamRequest $request, Pinjam $pinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pinjam $pinjam)
    {
        //
    }
}
