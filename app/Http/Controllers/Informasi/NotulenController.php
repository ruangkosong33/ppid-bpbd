<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Notulen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notulen=Notulen::orderBy('id')->get();

        return view('layouts.admin.pages.notulen.index-notulen', ['notulen'=>$notulen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.notulen.create-notulen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:20000',
        ]);

        if($request->file('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-notulen', $files);
        }
        else{
            $files=null;
        }

        $notulen=Notulen::create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('notulen.index');
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
    public function edit(Notulen $notulen)
    {
        return view('layouts.admin.pages.notulen.edit-notulen', ['notulen'=>$notulen]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notulen $notulen)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:20000',
        ]);

        if($request->file('file'))
        {
            if ($notulen->file) {
                Storage::delete('public/file-notulen/' . $notulen->file);
            }

            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-notulen', $files);
        }
        else{
            $files=$notulen->file;
        }

        $notulen->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('notulen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notulen $notulen)
    {
        if ($notulen->file && Storage::exists('public/file-notulen/' . $notulen->file))
        {
            Storage::delete('public/file-notulen/' . $notulen->file);
        }

        $notulen->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
