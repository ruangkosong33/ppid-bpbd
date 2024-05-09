<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Fungsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fungsi=Fungsi::orderBy('id')->get();

        return view('layouts.admin.pages.fungsi.index-fungsi', ['fungsi'=>$fungsi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.fungsi.create-fungsi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $fungsi=Fungsi::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('fungsi.index');
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
    public function edit(Fungsi $fungsi)
    {
        return view('layouts.admin.pages.fungsi.edit-fungsi', ['fungsi'=>$fungsi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fungsi $fungsi)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $fungsi->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('fungsi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fungsi $fungsi)
    {
        $fungsi->delete();

        flash('Data Berhasil Di Update');

        return redirect()->route('fungsi.index');
    }
}
