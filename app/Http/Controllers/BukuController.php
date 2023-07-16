<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $b = Buku::all();
        $k = KategoriBuku::all();
        return view('buku', [
            'books' => $b,
            'kategori' => $k
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $r)
    {
        Buku::create([
            'judul_buku' => $r->judul,
            'kategori_buku_id' => $r->kategori
        ]);

        return redirect('/buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $b = Buku::where('id', $id)->first();
        $k = KategoriBuku::all();
        return view('edit_buku', [
            'book' => $b,
            'kategori' => $k
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $b = Buku::where('id', $request->id)->first();

        $b->judul_buku = $request->judul;
        $b->kategori_buku_id = $request->kategori;
        $b->save();

        return redirect('/buku');
    }

    public function delete($id){
        $b = Buku::where('id', $id)->first();
        return view('delete_buku', [
            'buku' => $b
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r)
    {
        $b = Buku::where('id', $r->id)->first();
        $b->delete();

        return redirect('/buku');
    }
}
