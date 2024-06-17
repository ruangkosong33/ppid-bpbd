<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Keputusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KeputusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keputusan=Keputusan::orderBy('id')->get();

        return view('layouts.admin.pages.keputusan.index-keputusan', ['keputusan'=>$keputusan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.keputusan.create-keputusan');
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
            $file->storeAs('public/file-keputusan', $files);
        }
        else{
            $files='';
        }

        $keputusan=Keputusan::create([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('keputusan.index');
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
    public function edit(Keputusan $keputusan)
    {
        return view('layouts.admin.pages.keputusan.edit-keputusan', ['keputusan'=>$keputusan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keputusan $keputusan)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($keputusan->file) {
                Storage::delete('public/file-keputusan/' . $keputusan->file);
            }
            
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-keputusan', $files);
        }
        else{
            $files=$keputusan->file;
        }

        $keputusan->update([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('keputusan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keputusan $keputusan)
    {
        if ($keputusan->file && Storage::exists('public/file-keputusan/' . $keputusan->file))
        {
            Storage::delete('public/file-keputusan/' . $keputusan->file);
        }

        $keputusan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
