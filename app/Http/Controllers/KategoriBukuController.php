<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKategoriBukuRequest;
use App\Http\Requests\UpdateKategoriBukuRequest;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $k = KategoriBuku::all();
        return view('kategori', [
            'kategori' => $k
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
        KategoriBuku::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriBuku $kategoriBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $k = KategoriBuku::where('id', $id)->first();
        return view('edit_kategori', [
            'kategori' => $k
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriBuku $kategoriBuku)
    {
        $k = KategoriBuku::where('id', $request->id)->first();

        $k->nama_kategori = $request->nama_kategori;
        $k->save();

        return redirect('/kategori');
    }

    public function delete($id){
        $k = KategoriBuku::where('id', $id)->first();
        return view('delete_kategori', [
            'kategori' => $k
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r)
    {
        $k = KategoriBuku::where('id', $r->id)->first();
        $k->delete();

        return redirect('/kategori');
    }
}
