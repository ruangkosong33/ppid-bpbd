<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Waktu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WaktuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waktu=Waktu::orderBy('id')->get();

        return view('layouts.admin.pages.waktu.index-waktu', ['waktu'=>$waktu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.waktu.create-waktu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $waktu=Waktu::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('waktu.index');
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
    public function edit(Waktu $waktu)
    {
        return view('layouts.admin.pages.waktu.edit-waktu', ['waktu'=>$waktu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Waktu $waktu)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $waktu=Waktu::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('waktu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waktu $waktu)
    {
        $waktu->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('waktu.index');
    }
}
