<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Pengadaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengadaan=Pengadaan::orderBy('id')->get();

        return view('layouts.admin.pages.pengadaan.index-pengadaan', ['pengadaan'=>$pengadaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.pengadaan.create-pengadaan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-pengadaan', $files);
        }
        else{
            $files=null;
        }

        $pengadaan=Pengadaan::create([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('pengadaan.index');
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
    public function edit(Pengadaan $pengadaan)
    {
        return view('layouts.admin.pages.pengadaan.edit-pengadaan', ['pengadaan'=>$pengadaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengadaan $pengadaan)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($pengadaan->file) {
                Storage::delete('public/file-pengadaan/' . $pengadaan->file);
            }

            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-pengadaan', $files);
        }
        else{
            $files=$pengadaan->file;
        }

        $pengadaan->update([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('pengadaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengadaan $pengadaan)
    {
        if ($pengadaan->file && Storage::exists('public/file-pengadaan/' . $pengadaan->file))
        {
            Storage::delete('public/file-pengadaan/' . $pengadaan->file);
        }

        $pengadaan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
