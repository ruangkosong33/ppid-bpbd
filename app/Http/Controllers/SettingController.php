<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting=Setting::orderBy('id')->get();

        return view('layouts.admin.pages.setting.index-setting', ['setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.setting.create-setting');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting=Setting::create([
            'link_ig'=>$request->link_ig,
            'link_fb'=>$request->link_fb,
            'link_x'=>$request->link_x,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('setting.index');
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
    public function edit(Setting $setting)
    {
       return view('layouts.admin.pages.setting.edit-setting', ['setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $setting->update([
            'link_ig'=>$request->link_ig,
            'link_fb'=>$request->link_fb,
            'link_x'=>$request->link_x,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
