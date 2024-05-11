<?php

namespace App\Http\Controllers\Layanan;

use App\Models\Sop;
use App\Models\Filesop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileSopController extends Controller
{
    public function index(Sop $sop)
    {
        return view('layouts.admin.pages.filesop.index-filesop', ['sop'=>$sop]);
    }

    public function create(Sop $sop)
    {
        return view('layouts.admin.pages.filesop.create-filesop', ['sop'=>$sop]);
    }

    public function store(Request $request, Sop $sop)
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
            $file->storeAs('public/file-sop', $files);
        }
        else{
            $files=null;
        }

        $filesop=$sop->filesops()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('filesop.index', $sop->id);
    }

    public function edit(Sop $sop, Filesop $filesop)
    {
        return view('layouts.admin.pages.filesop.edit-filesop', ['sop'=>$sop, 'filesop'=>$filesop]);
    }

    public function update(Request $request, Sop $sop, Filesop $filesop)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($filesop->file) {
                Storage::delete('public/file-sop/' . $filesop->file);
            }

            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-sop', $files);
        }
        else{
            $files=$filesop->file;
        }

        $filesop->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('filesop.index', $sop->id);
    }

    public function destroy(Sop $sop, Filesop $filesop)
    {
        if ($filesop->file && Storage::exists('public/file-sop/' . $filesop->file))
        {
            Storage::delete('public/file-sop/' . $filesop->file);
        }

        $filesop->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
