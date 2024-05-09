<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Katdip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KatDipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katdip=Katdip::orderBy('id', 'DESC')->get();

        return view('layouts.admin.pages.katdip.index-katdip', ['katdip'=>$katdip]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.katdip.create-katdip');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $katip=Katdip::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('katdip.index');
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
    public function edit(Katdip $katdip)
    {
        return view('layouts.admin.pages.katdip.edit-katdip', ['katdip'=>$katdip]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Katdip $katdip)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $katdip->update([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('katdip.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Katdip $katdip)
    {
        $katdip->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('katdip.index');
    }
}
