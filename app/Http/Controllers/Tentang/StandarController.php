<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Standar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StandarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $standar=Standar::orderBy('id')->get();

        return view('layouts.admin.pages.standar.index-standar', ['standar'=>$standar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.standar.create-standar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $standar=Standar::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('standar.index');
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
    public function edit(Standar $standar)
    {
        return view('layouts.admin.pages.standar.edit-standar', ['standar'=>$standar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Standar $standar)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $standar->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('standar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Standar $standar)
    {
        $standar->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('standar.index');
    }
}
