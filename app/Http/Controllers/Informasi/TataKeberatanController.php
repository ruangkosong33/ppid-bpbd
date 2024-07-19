<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Models\Tatakeberatan;
use App\Http\Controllers\Controller;

class TataKeberatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tatakeberatan=Tatakeberatan::orderBy('id')->get();

        return view('layouts.admin.pages.tata-keberatan.index-tata', ['tatakeberatan'=>$tatakeberatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.tata-keberatan.create-tata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Tatakeberatan $tatakeberatan)
    {
        return view('layouts.admin.pages.tata-keberatan.edit-tata', ['tatakeberatan'=>$tatakeberatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tatakeberatan $tatakeberatan)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tatakeberatan $tatakeberatan)
    {
        //
    }
}
