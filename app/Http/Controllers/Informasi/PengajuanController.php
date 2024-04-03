<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan=Pengajuan::orderBy('id')->get();

        return view('layouts.admin.pages.pengajuan.index-pengajuan', ['pengajuan'=>$pengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.pengajuan.create-pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jgp,png|max:5000',
        ]);

        $pengajuan=Pengajuan::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('pengajuan.index');
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
    public function edit(Pengajuan $pengajuan)
    {
        return view('layouts.admin.pages.pengajuan.edit-pengajuan', ['pengajuan'=>$pengajuan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jgp,png|max:5000',
        ]);

        $pengajuan->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('pengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengajuan $pengajuan)
    {
        $pengajuan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('pengajuan.index');
    }
}
