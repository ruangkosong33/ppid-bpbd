<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Anggaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggaran=Anggaran::orderBy('id')->get();

        return view('layouts.admin.pages.anggaran.index-anggaran', ['anggaran'=>$anggaran]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.anggaran.create-anggaran');
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
            $file->storeAs('public/file-anggaran', $files);
        }
        else{
            $files='';
        }

        $anggaran=Anggaran::create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('anggaran.index');
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
    public function edit(Anggaran $anggaran)
    {
        return view('layouts.admin.pages.anggaran.edit-anggaran', ['anggaran'=>$anggaran]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggaran $anggaran)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($anggaran->file) {
                Storage::delete('public/file-anggaran/' . $anggaran->file);
            }
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-anggaran', $files);
        }
        else{
            $files=$anggaran->file;
        }

        $anggaran->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('anggaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggaran $anggaran)
    {
        if ($anggaran->file && Storage::exists('public/file-anggaran/' . $anggaran->file))
        {
            Storage::delete('public/file-anggaran/' . $anggaran->file);
        }

        $anggaran->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('anggaran.index');
    }
}
