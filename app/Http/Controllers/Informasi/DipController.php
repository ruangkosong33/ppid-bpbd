<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Dip;
use App\Models\Katdip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dip=Dip::with('katdip')->orderBy('id', 'DESC')->get();

        return view('layouts.admin.pages.dip.index-dip', ['dip'=>$dip]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $katdip=Katdip::orderBy('id')->get();

        return view('layouts.admin.pages.dip.create-dip', ['katdip'=>$katdip]);
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
            $file->storeAs('public/file-dip', $files);
        }
        else{
            $files='';
        }

        $dip=Dip::create([
            'katdip_id'=>$request->katdip_id,
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('dip.index');
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
    public function edit(dip $dip)
    {
        $katdip=Katdip::orderBy('id')->get();

        return view('layouts.admin.pages.dip.edit-dip', ['katdip'=>$katdip, 'dip'=>$dip]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            if ($hukum->file) {
                Storage::delete('public/file-dip/' . $dip->file);
            }

            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-dip', $files);
        }
        else{
            $files=$dip->file;
        }

        $dip->update([
            'katdip_id'=>$request->katdip_id,
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('dip.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dip $dip)
    {
        if ($dip->file && Storage::exists('public/file-dip/' . $dip->file))
        {
            Storage::delete('public/file-dip/' . $dip->file);
        }

        flash('Data Berhasil Di Hapus');

        return redirect()->route('dip.index');
    }
}
