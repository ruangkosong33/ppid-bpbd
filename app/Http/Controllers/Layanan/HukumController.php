<?php

namespace App\Http\Controllers\Layanan;

use App\Models\Hukum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hukum=Hukum::orderBy('id', 'DESC')->get();

        return view('layouts.admin.pages.hukum.index-hukum', ['hukum'=>$hukum]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.hukum.create-hukum');
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
            $file->storeAs('public/file-produk-hukum', $files);
        }
        else{
            $files='';
        }

        $hukum=Hukum::create([
            'title'=>$request->title,
            'date'=>$request->date,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('hukum.index');
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
    public function edit(Hukum $hukum)
    {
        return view('layouts.admin.pages.hukum.edit-hukum', ['hukum'=>$hukum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hukum $hukum)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($hukum->file) {
                Storage::delete('public/file-produk-hukum/' . $hukum->file);
            }

            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-produk-hukum', $files);
        }
        else{
            $files=$hukum->file;
        }

        $hukum->update([
            'title'=>$request->title,
            'date'=>$request->date,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('hukum.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hukum $hukum)
    {
        if ($hukum->file && Storage::exists('public/file-produk-hukum/' . $hukum->file))
        {
            Storage::delete('public/file-produk-hukum/' . $hukum->file);
        }

        $hukum->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('hukum.index');
    }
}
