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

        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('formpermohonan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formpermohonan $formpermohonan)
    {
        return view('layouts.admin.pages.formpermohonan.create-form', ['formpermohonan'=>$formpermohonan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formpermohonan $formpermohonan)
    {
        $katdip=Katdip::orderBy('id')->get();

        return view('layouts.admin.pages.formpermohonan.create-form', ['katdip'=>$katdip, 'formpermohonan'=>$formpermohonan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formpermohonan $formpermohonan)
    {
        flash('Data Berhasil Di Update');

        return redirect()->route('formpermohonan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formpermohonan $formpermohonan)
    {
        flash('Data Berhasil Di Hapus');

        return redirect()->route('formpermohonan.index');
    }
}
