<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Maklumat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaklumatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maklumat=Maklumat::orderBy('id')->get();

        return view('layouts.admin.pages.maklumat.index-maklumat', ['maklumat'=>$maklumat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.maklumat.create-maklumat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $maklumat=Maklumat::create($request, [
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('maklumat.index');
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
    public function edit(Maklumat $maklumat)
    {
        return view('layouts.admin.pages.maklumat.edit-maklumat', ['maklumat'=>$maklumat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maklumat $maklumat)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $maklumat->update($request, [
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('maklumat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maklumat $maklumat)
    {
        $maklumat->delete();

        flash('Data Berhasil Di Simpan');

        return redirect()->route('maklumat.index');
    }
}
