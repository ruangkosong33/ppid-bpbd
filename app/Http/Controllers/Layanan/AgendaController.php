<?php

namespace App\Http\Controllers\Layanan;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda-Agenda::orderBy('id')->get();

        return view('layouts.admin.pages.agenda.index-agenda', ['agenda'=>$agenda]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.agenda.create-agenda');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $agenda=Agenda::create([
            'title'=>$request->title,
            'date'=>$request->date,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('agenda.index');
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
    public function edit(Agenda $agenda)
    {
        return view('layouts.admin.pages.agenda.edit-agenda', ['agenda'=>$agenda]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $agenda->update([
            'title'=>$request->title,
            'date'=>$request->date,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('agenda.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
