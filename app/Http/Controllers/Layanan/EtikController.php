<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etik=Etik::orderBy('id')->get();

        return view('layouts.admin.pages.etik.index-etik', ['etik'=>$etik]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.etik.create-etik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $etik=Etik::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('etik.index');
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
    public function edit(Etik $etik)
    {
        return view('layouts.admin.pages.etik.edit-etik', ['etik'=>$etik]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etik $etik)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $etik->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('etik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etik $etik)
    {
        $etik->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('etik.index');
    }
}
