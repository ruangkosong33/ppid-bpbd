<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Hak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hak=Hak::orderBy('id')->get();

        return view('layouts.admin.pages.hak.index-hak', ['hak'=>$hak]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.hak.create-hak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $hak=Hak::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('hak.index');
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
    public function edit(Hak $hak)
    {
        return view('layouts.admin.pages.hak.edit-hak', ['hak'=>$hak]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hak $hak)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $hak->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('hak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hak $hak)
    {
        $hak->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('hak.index');
    }
}
