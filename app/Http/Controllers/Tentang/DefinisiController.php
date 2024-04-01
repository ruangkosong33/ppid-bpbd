<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Definisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefinisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $definisi=Definisi::orderBy('id')->get();

        return view('layouts.admin.pages.definisi.index-definisi', ['definisi'=>$definisi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.definisi.create-definisi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $definisi=Definisi::create($request, [
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('definisi.index');
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
    public function edit(Definisi $definisi)
    {
        return view('layouts.admin.pages.definisi.edit-definisi', ['definisi'=>$definisi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Definisi $definisi)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $definisi->update($request, [
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('definisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Definisi $definisi)
    {
        $definisi->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('definisi.index');
    }
}
