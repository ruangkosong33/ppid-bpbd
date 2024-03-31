<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Dasar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DasarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dasar=Dasar::orderBy('id')->get();

        return view('layouts.admin.pages.dasar.index-dasar', ['dasar'=>$dasar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.dasar.create-dasar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $dasar=Dasar::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('dasar.index');
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
    public function edit(Dasar $dasar)
    {
        return view('layouts.admin.pages.dasar.edit-dasar', ['dasar'=>$dasar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dasar $dasar)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $dasar->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('dasar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dasar $dasar)
    {
        $dasar->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('dasar.index');
    }
}
