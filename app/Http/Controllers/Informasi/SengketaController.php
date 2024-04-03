<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Sengketa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SengketaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sengketa=Sengketa::orderBy('id')->get();

        return view('layouts.admin.pages.sengketa.index-sengketa', ['sengketa'=>$sengketa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.sengketa.create-sengketa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        $sengketa=Sengketa::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('sengketa.index');
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
    public function edit(Sengketa $sengketa)
    {
        return view('layouts.admin.pages.sengketa.edit-sengketa', ['sengketa'=>$sengketa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sengketa $sengketa)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        $sengketa->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('sengketa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sengketa $sengketa)
    {
        $sengketa->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('sengketa.index');
    }
}
