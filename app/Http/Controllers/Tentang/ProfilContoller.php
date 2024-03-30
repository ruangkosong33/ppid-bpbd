<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil=Profil::orderBy('id')->get();

        return view('layouts.admin.pages.profil.index-profil', ['profil'=>$profil]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.profil.create-profil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $profil=Profil::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('profil.index');
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
    public function edit(Profil $profil)
    {
        return view('layouts.admin.pages.profil.edit-profil', ['profil'=>$profil]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $profil->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('profil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        $profil=Profil::where('id', $profil->id);

        $profil->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('profil.index');
    }
}
