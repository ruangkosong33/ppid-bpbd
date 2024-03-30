<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Visi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visi=Visi::orderBy('id')->get();

        return view('layouts.admin.pages.visi.index-visi', ['visi'=>$visi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.visi.create-visi');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
