<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan=Laporan::orderBy('id')->get();

        return view('layouts.admin.pages.laporan.index-laporan', ['laporan'=>$laporan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.laporan.create-laporan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'year'=>'required',
        ]);

        $laporan=Laporan::create([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('laporan.index');
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
    public function edit(Laporan $laporan)
    {
        return view('layouts.admin.pages.laporan.edit-laporan', ['laporan'=>$laporan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $this->validate($request, [
            'title'=>'required',
            'year'=>'required',
        ]);

        $laporan->update([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('laporan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('laporan.index');
    }
}
