<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Visi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visi=Visi::orderBy('id')->get();

        return view('layouts.admin.pages.visi.index-visi', ['visi'=>$visi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.visi.create-visi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $visi=Visi::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('visi.index');
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
    public function edit(Visi $visi)
    {
        return view('layouts.admin.pages.visi.edit-visi', ['visi'=>$visi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visi $visi)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $visi->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('visi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi $visi)
    {
        $visi->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('visi.index');
    }
}
