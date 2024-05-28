<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Katdip;
use Illuminate\Http\Request;
use App\Models\Formpermohonan;
use App\Http\Controllers\Controller;

class FormPermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formpermohonan=Formpermohonan::with('katdips')->orderBy('id')->get();

        return view('layouts.admin.pages.formpermohonan.index-form', ['formpermohonan'=>$formpermohonan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $katdip=Katdip::orderBy('id')->get();
        
        return view('layouts.admin.pages.formpermohonan.create-form', ['katdip'=>$katdip]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'katdip_id'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'pekerjaan'=>'required',
            'rincian'=>'required',
            'tujuan'=>'required',
            'memperoleh'=>'required',
            'mendapatkan'=>'required',
            'salinan'=>'required',
        ]);

        $formpermohonan=Formpermohonan::create([
            'name'=>$request->name,
            'katdip_id'=>$request->katdip_id,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'pekerjaan'=>$request->pekerjaan,
            'rincian'=>$request->rincian,
            'tujuan'=>$request->tujuan,
            'memperoleh'=>$request->memperoleh,
            'mendapatkan'=>$request->mendapatkan,
            'salinan'=>$request->salinan,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('formpermohonan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formpermohonan $formpermohonan)
    {
        return view('layouts.admin.pages.formpermohonan.show-form', ['formpermohonan'=>$formpermohonan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formpermohonan $formpermohonan)
    {
        $katdip=Katdip::orderBy('id')->get();

        return view('layouts.admin.pages.formpermohonan.edit-form', ['katdip'=>$katdip, 'formpermohonan'=>$formpermohonan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formpermohonan $formpermohonan)
    {
        $this->validate($request, [
            'name'=>'required',
            'katdip_id'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'pekerjaan'=>'required',
            'rincian'=>'required',
            'tujuan'=>'required',
            'memperoleh'=>'required',
            'mendapatkan'=>'required',
            'salinan'=>'required',
        ]);

        $formpermohonan->update([
            'name'=>$request->name,
            'katdip_id'=>$request->katdip_id,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'pekerjaan'=>$request->pekerjaan,
            'rincian'=>$request->rincian,
            'tujuan'=>$request->tujuan,
            'memperoleh'=>$request->memperoleh,
            'mendapatkan'=>$request->mendapatkan,
            'salinan'=>$request->salinan,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('formpermohonan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formpermohonan $formpermohonan)
    {
        $formpermohonan->delete();
        
        flash('Data Berhasil Di Hapus');

        return redirect()->route('formpermohonan.index');
    }
}
