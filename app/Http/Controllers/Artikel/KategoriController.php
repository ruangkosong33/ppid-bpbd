<?php

namespace App\Http\Controllers\Artikel;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori=Kategori::orderBy('id', 'DESC')->get();

        return view('layouts.admin.pages.kategori.create-kategori', ['kategori'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.kategori.create-kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $kategori=Kategori::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('layouts.admin.pages.kategori.edit-kategori', ['kategori'=>$kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $kategori=Kategori::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('kategori.index');
    }
}
