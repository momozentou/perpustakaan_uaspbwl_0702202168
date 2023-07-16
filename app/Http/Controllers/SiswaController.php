<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', [
            'siswa' => $siswa,
        ]);
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
        Siswa::create([
            'nama_siswa' => $request->nama,
            'nis' => $request->nis
        ]);

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('edit_siswa', [
            'siswa' => $siswa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $s = Siswa::where('id', $request->id)->first();
        $s->nama_siswa = $request->nama;
        $s->nis = $request->nis;
        $s->save();

        return redirect('/siswa');
    }

    public function delete($id){
        $siswa = Siswa::where('id', $id)->first();
        return view('delete_siswa', [
            'siswa' => $siswa,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r)
    {
        $siswa = Siswa::where('id', $r->id)->first();
        $siswa->delete();

        return redirect('/siswa');
    }
}
