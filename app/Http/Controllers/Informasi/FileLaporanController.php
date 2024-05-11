<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Laporan;
use App\Models\Filelaporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileLaporanController extends Controller
{
    public function index(Laporan $laporan)
    {
        return view('layouts.admin.pages.filelaporan.index-filelaporan', ['laporan'=>$laporan]);
    }

    public function create(Laporan $laporan)
    {
        return view('layouts.admin.pages.filelaporan.create-filelaporan', ['laporan'=>$laporan]);
    }

    public function store(Request $request, Laporan $laporan)
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
            $file->storeAs('public/file-laporan', $files);
        }
        else{
            $files=null;
        }

        $filelapora=$laporan->filelaporans()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('filelaporan.index', $laporan->id);
    }

    public function edit(Laporan $laporan, Filelaporan $filelaporan)
    {
        return view('layouts.admin.pages.filelaporan.edit-filelaporan', ['laporan'=>$laporan, 'filelaporan'=>$filelaporan]);
    }

    public function update(Request $request, Laporan $laporan, Filelaporan $filelaporan)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($filelaporan->file) {
                Storage::delete('public/file-laporan/' . $filelaporan->file);
            }

            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-laporan', $files);
        }
        else{
            $files=$filelaporan->file;
        }

        $filelaporan->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('filelaporan.index', $laporan->id);
    }

    public function destroy(Laporan $laporan, Filelaporan $filelaporan)
    {
        if ($filelaporan->file && Storage::exists('public/file-laporan/' . $filelaporan->file))
        {
            Storage::delete('public/file-laporan/' . $filelaporan->file);
        }

        $filelaporan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
